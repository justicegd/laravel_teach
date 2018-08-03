<?php

namespace App\Http\ViewComposers;

use App\Services\ConfigServices;
use Illuminate\View\View;

class WebComposer
{
    /**
     * 使用者儲存庫的實例。
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * 建立一個新的個人檔案視圖組件。
     *
     */
    public function __construct(ConfigServices $configSer)
    {
        $this->configSer = $configSer;
    }

    /**
     * 將資料綁定到視圖。
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('lookCount', $this->configSer->getLookCount());
    }
}