<?php

namespace App\Http\Controllers\tea_1;

use App\Http\Controllers\Controller;


class Tea1 extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    function goView(){
        return view('tea.tea1');
    }
}
