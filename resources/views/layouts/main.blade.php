<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('landing/img/favicon.png') }}" type="image/png">
    <title>{{ $title }} | kh21rul</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/vendors/nice-select/css/nice-select.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
</head>

<body>

    @include('partials.header')

    @yield('container')

    @include('partials.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('landing/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('landing/js/popper.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/stellar.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('landing/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('landing/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('landing/js/mail-script.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('landing/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('landing/js/theme.js') }}"></script>
</body>

</html>
