@extends('layouts.index')
@section('body')
    <h1>訂購</h1>
    <form method="post" action="{{route('login')}}">
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
            <td>帳號</td>
            <td><input type="text" id="account" name="account" value="admin"></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>密碼</td>
            <td><input type="password" id="password" name="password" ></td>
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