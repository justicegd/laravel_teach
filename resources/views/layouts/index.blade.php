<!DOCTYPE html>
<html lang="en">

@include('layouts.header')
<body>

<!-- Navigation -->
@include('layouts.menu')

<!-- Page Content -->
<div class="container">
    @yield('body')
</div>
<!-- /.container -->

@include('layouts.footer')

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
