<!doctype html>
<html class="no-js" lang="en">

<!--   03:20:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Taimoor Ecommerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

</head>

<body>

    <!--header area start-->
@include('partials.header')
    <!--header area end-->


   @yield('content')
	
    <!--footer area start-->
    @include('partials.footer')
    <!--footer area end-->
<!-- JS
============================================ -->



<!-- Plugins JS -->
<script src="/assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="/assets/js/main.js"></script>



</body>

<!--   03:22:07 GMT -->
</html>