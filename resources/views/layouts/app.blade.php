<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="template">
  <link rel="icon" title="Favicon" sizes="16x16" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
  <title>{{ config('app.name', 'Feminature Uganda') }} - @yield('title')</title>

  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/jqueryui.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">

</head>

<body>

  <div class="main_page_wrapper">


    <!-- ==== header start ==== -->
    @include('partials.header')

    @yield('content')

    <!-- ==== footer start ==== -->
    @include('partials.footer')


    <a id="button"></a>
    <!-- plugins js -->

    <script src="{{ asset('assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick-animation.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    
  </div>

</body>

</html>
