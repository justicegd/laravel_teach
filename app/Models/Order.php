<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    function getOrderStatusAttribute($value){;
        $statusName ='';
        switch((int)$value){
            case 0:
                $statusName ='處理中';
                break;
            case 1:
                $statusName ='完成';
                break;
        }
        return $statusName;
    }

    function orderDetail(){
        return $this->hasMany('App\Models\OrderDetail', 'order_id', 'id');
    }
}
