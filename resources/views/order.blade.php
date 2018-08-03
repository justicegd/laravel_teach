@extends('layouts.index')
@section('body')
    <h1>訂購</h1>
    <form method="post" action="{{route('create-order')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
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
                <td>@lang('order.name') </td>
                <td><input type="text" id="name" name="name" value="irvin">{{$errors->first('name')}}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>@lang('order.phone')</td>
                <td><input type="text" id="phone" name="phone" value="0987654321"></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>@lang('order.address')</td>
                <td><input type="text" id="address" name="address" value="高雄市新興區"></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>@lang('order.product')</td>
                <td>
                    <select id="product" name="product">
                        @foreach($products as $product )
                            <option value ="{{$product->id}} ">{{$product->name}} 價錢 {{$product->price}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>@lang('order.number')</td>
                <td>
                    <select id="total" name="total">
                        <option value ="1">1</option>
                        <option value ="2">2</option>
                        <option value ="3">3</option>
                        <option value ="4">4</option>
                        <option value ="5">5</option>
                        <option value ="6">6</option>
                        <option value ="7">7</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>@lang('order.number')</td>
                <td>
                    <input type="file" name="img">
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>@lang('order.chooseFreight')</td>
                <td>
                    <select id="product" name="freight">
                        @foreach($freights as $freight )
                            <option value ="{{$freight->id}} ">{{$freight->name}} 運費: {{$freight->price}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td rowspan="2"></td>
                <td><input type="submit" class="btn btn-primary" value="送出"></td>
            </tr>

            </tbody>
        </table>

    </form>
@endsection



