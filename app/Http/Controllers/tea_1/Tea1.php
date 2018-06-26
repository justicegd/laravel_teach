<?php

namespace App\Http\Controllers\tea_1;

use App\Http\Controllers\Controller;
use App\Repositories\UsersService;


class Tea1 extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UsersService $usersSer)
    {
        $this->usersSer = $usersSer;
    }

    function goView()
    {
        return view('tea.tea1');
    }

    function getUser()
    {
        $users = $this->usersSer->getAll();
        dd($users );
    }
}
