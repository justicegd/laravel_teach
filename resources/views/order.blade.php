<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portfolio Item - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/portfolio-item.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @foreach($menu as $menuData)
                    <li class="nav-item">
                        @if($menuData->route_name != 'null')
                            <a class="nav-link" href="{{route($menuData->route_name)}}">{{$menuData->name}}</a>
                        @else
                            <a class="nav-link" href="#">{{$menuData->name}}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
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

    {{--<!-- Portfolio Item Heading -->--}}
    {{--<h1 class="my-4">Page Heading--}}
        {{--<small>Secondary Text</small>--}}
    {{--</h1>--}}

    {{--<!-- Portfolio Item Row -->--}}
    {{--<div class="row">--}}

        {{--<div class="col-md-8">--}}
            {{--<img class="img-fluid" src="http://placehold.it/750x500" alt="">--}}
        {{--</div>--}}

        {{--<div class="col-md-4">--}}
            {{--<h3 class="my-3">Project Description</h3>--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>--}}
            {{--<h3 class="my-3">Project Details</h3>--}}
            {{--<ul>--}}
                {{--<li>Lorem Ipsum</li>--}}
                {{--<li>Dolor Sit Amet</li>--}}
                {{--<li>Consectetur</li>--}}
                {{--<li>Adipiscing Elit</li>--}}
            {{--</ul>--}}
        {{--</div>--}}

    {{--</div>--}}
    {{--<!-- /.row -->--}}

    {{--<!-- Related Projects Row -->--}}
    {{--<h3 class="my-4">Related Projects</h3>--}}

    {{--<div class="row">--}}

        {{--<div class="col-md-3 col-sm-6 mb-4">--}}
            {{--<a href="#">--}}
                {{--<img class="img-fluid" src="http://placehold.it/500x300" alt="">--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="col-md-3 col-sm-6 mb-4">--}}
            {{--<a href="#">--}}
                {{--<img class="img-fluid" src="http://placehold.it/500x300" alt="">--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="col-md-3 col-sm-6 mb-4">--}}
            {{--<a href="#">--}}
                {{--<img class="img-fluid" src="http://placehold.it/500x300" alt="">--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<div class="col-md-3 col-sm-6 mb-4">--}}
            {{--<a href="#">--}}
                {{--<img class="img-fluid" src="http://placehold.it/500x300" alt="">--}}
            {{--</a>--}}
        {{--</div>--}}

    {{--</div>--}}
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
