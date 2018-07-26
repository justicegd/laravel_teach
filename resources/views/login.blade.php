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
    </div>
</nav>

<!-- Page Content -->
<div class="container">
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
