<?php

namespace App\Services;

use App\Models\Config;

class ConfigServices
{

    function __construct(Config $config)
    {

        $this->config = $config;
    }

    /**
     * 取得觀看次數
     */
    function getLookCount(){
        $count= 1;
        $lookCount = $this->config->where('key','look_count')->get();
        if($lookCount->count()>0){
           $count = $lookCount->first()->value;
        }
        return $count ;

    }

}
