<!doctype html>
<html>
<head>
    @include('includes.header')
</head>
<body>

<div class="container"></div>

<div id="fh5co-page">
    <header id="fh5co-header" role="banner">
        @include('includes.menu')
    </header>

    @yield('content')

    <footer id="fh5co-footer" role="contentinfo">
        @include('includes.footer')
    </footer>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
