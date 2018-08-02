<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderPost;
use App\Models\Freight;
use App\Models\FreightOffer;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class Home extends Controller
{
    private $menu;
    private $product;

    function __construct(
        Menu $menu,
        Product $product,
        Order $order,
        OrderDetail $orderDetail,
        Freight $freight,
        FreightOffer $freightOffer
    ) {
        $this->menu         = $menu;
        $this->product      = $product;
        $this->order        = $order;
        $this->orderDetail  = $orderDetail;
        $this->freight      = $freight;
        $this->freightOffer = $freightOffer;
    }

    /**
     * 主頁面
     */
    function home()
    {

        $menu = $this->getMenu();

        /** @var 傳入view的資料 $viewData */
        $viewData = [
            'menu' => $menu,
        ];

        return view('home', $viewData);
    }

    /**
     * 取menu資料
     */
    function getMenu()
    {
        return $this->menu->get();
    }

    /**
     * 購買頁
     */
    function orderPage()
    {
        App::setLocale('en');
//        $a = trans('order.name');
//        dd($a);
        /** 取menu data */
        $menu = $this->getMenu();
        /** 取商品data */
        $product = $this->getProduct();
        /** 運費data */
        $freight = $this->getFreight();

        /** @var 傳入view的資料 $viewData */
        $viewData = [
            'menu'     => $menu,
            'products' => $product,
            'freights' => $freight,
        ];

        return view('order', $viewData);
    }

    /**
     * 取得商品資料
     */
    private function getProduct()
    {
        return $this->product->get();

    }

    /**
     * 取得運費
     */
    private function getFreight()
    {
        return $this->freight->get();
    }

    /**
     * 購買頁
     */
    function order(CreateOrderPost $request)
    {
        $aa = $request->file('img')->store('img');
        dd($aa);
        $name    = $request->input('name');// 姓名
        $phone   = $request->input('phone');// 電話
        $address = $request->input('address');// 地址

        $productId = $request->input('product');//產品id
        $total     = $request->input('total');// 數量

        $freightId = $request->input('freight');// 運費id

        $orderData = [
            'name'    => $name,
            'phone'   => $phone,
            'address' => $address,
        ];

        /** 新增訂單 */
        $orderId = $this->addOrder($orderData);

        /** 新增明細 */
        $orderDetailData = [
            'order_id'   => $orderId,
            'product_id' => $productId,
            'count'      => $total,
        ];
        $amount          = $this->addOrderDetail($orderDetailData);

        /** 更新運費 */
        $this->updateFreight($amount, $freightId, $orderId);

        /** 顯示訂單資訊 */
        $order  = $this->order->find($orderId);
        $detail = $this->orderDetail->where("order_id", $orderId)->get();

        /** $menu */
        $menu     = $this->getMenu();

        $viewData = [
            'order'  => $order,
            'detail' => $detail,
            'menu'   => $menu,
        ];

        return view('detail', $viewData);


    }

    /**
     * 新增訂單
     */
    private function addOrder($orderData)
    {
        $product = $this->order->newInstance();
        foreach ($orderData as $key => $value) {
            $product->$key = $value;
        }
        $product->save();

        return $product->id;
    }

    /**
     * 新增明細
     */
    private function addOrderDetail($orderDetailData)
    {
        $product = $this->findProduct($orderDetailData['product_id']);

        /** 計算總價 */
        $amount = $product->price * $orderDetailData['count'];

        $orderDetailData['amount'] = $amount;

        $detail = $this->orderDetail->newInstance();
        foreach ($orderDetailData as $key => $val) {
            $detail->$key = $val;
        }

        $detail->save();

        return $amount;
    }

    /**
     * 取得商品資料
     * @param $id
     */
    private function findProduct($id)
    {
        return $this->product->find($id);
    }

    /**
     * 更新運費
     */
    private function updateFreight($amount, $freightId, $orderId)
    {
        $freight      = 0;
        $freightOffer = $this->freightOffer->find(1);
        /** 滿額免運 */
        if ($freightOffer->offer_price > $amount) {
            $freight = $this->freight->find($freightId)->price;
        }

        return $this->editFreight($orderId, $freight);

    }

    /**
     * 更新運費
     */
    function editFreight($orderId, $freight)
    {
        $order                = $this->order->find($orderId);
        $order->freight_amout = $freight;

        return $order->save();
    }

    /**
     * 測試
     */
    function test(Request $request)
    {

        $rules=[
          'title'=>'required'
        ];
        $messages = [
            'title.required' => '錯誤',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        $a = $validator->getMessageBag()->messages();
        dd($a ['title']);
    }

}
