@extends('layouts.index')
@section('body')
    <h1>訂購明細</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">名稱</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>姓名</td>
            <td>{{$order->name}}</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>電話</td>
            <td>{{$order->phone}}</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>地址</td>
            <td>{{$order->address}}</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>運費</td>
            <td>{{$order->freight_amout}}</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>訂單狀態</td>
            <td>{{$order->order_status}}</td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>明細</td>
            <td>
                @foreach($detail as $val)
                    名稱:{{$val->product->name}}<br>
                    數量:{{$val->count}}<br>
                    總計:{{$val->amount}}<br>
                @endforeach
            </td>
        </tr>


        </tbody>
    </table>
@endsection