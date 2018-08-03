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

    /**
     * 新增訂單數量
     */
    public function addOrderCount()
    {

        $count= 1;
        $orderCount = $this->config->where('key','order_count')->get();
        if($orderCount->count()>0){
            $orderCountData = $orderCount->first();
            $orderCountNumber = $orderCountData->value;
            $model = $this->config->find($orderCountData->id);
            $model->value = $orderCountNumber +1;
            $model->save();

        }else{
            $model = $this->config->newInstance();
            $model->key = 'order_count';
            $model->value = $count;
            $model->save();
        }

        return 'ok;';

    }

    function getOrderCount(){
        $orderCount = $this->config->where('key','order_count')->get();
        if($orderCount->count()>0){
           return $orderCount->first()->value;
        }else{
            return 0;
        }
    }

}
