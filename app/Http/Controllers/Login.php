<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Login extends Controller
{
    function __construct(User $user)
    {
        $this->user = $user;
    }

    function login(Request $request){
        $account = $request->input('account');
        $password = $request->input('password');
        $accounts = $this->user->where('account',$account )->get();
        if($accounts->count() <= 0){
            return '登入失敗';
        }
        $accountPassword = $accounts ->first()->password;
        if(Hash::check($password,$accountPassword)){
            session(['loginStatus' => true]);
            echo  '登入成功';
            sleep(2);
            return redirect()->route('order-page');
        }else{
            return '登入失敗';
        }


    }
}
