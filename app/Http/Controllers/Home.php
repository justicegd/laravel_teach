<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class Home extends Controller
{
    private $menu;

    function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }

    /**
     * 主頁面
     */
    function home()
    {

        $menu = $this->getMenu();

        /** @var 傳入view的資料 $viewData */
        $viewData = [
            'menu'=>$menu
        ];

        return view('home',$viewData);
    }

    /**
     * 取menu資料
     */
    function getMenu(){
        return $this->menu->get();
    }

    /**
     * 購買頁
     */
    function orderPage(){

        $menu = $this->getMenu();

        /** @var 傳入view的資料 $viewData */
        $viewData = [
            'menu'=>$menu
        ];
        return view('order',$viewData);
    }

    /**
     * 購買頁
     */
    function order(){

        $menu = $this->getMenu();

        /** @var 傳入view的資料 $viewData */
        $viewData = [
            'menu'=>$menu
        ];
        return view('order',$viewData);
    }


}
