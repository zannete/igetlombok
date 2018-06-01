<!DOCTYPE html>
<html class="load-full-screen">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Zannete">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>I Get Lombok - Your Trusted Lombok Agency</title>

    <!-- STYLES -->
    <link href="{{ asset("/assets/css/animate.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/bootstrap-select.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/owl.carousel.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/owl-carousel-theme.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/bootstrap.min.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("/assets/css/flexslider.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("/assets/css/style.css") }}" rel="stylesheet" media="screen">
    <link href="{{ asset("/assets/css/color/blue.css") }}" rel="stylesheet" media="screen">

    <!-- FONTS -->
    <link href="{{ asset("/assets/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>

    <!-- EXTRAS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    
  </head>
  <body class="load-full-screen">
    
    <!-- BEGIN: PRELOADER -->
    <div id="loader" class="load-full-screen">
      <div class="loading-animation">
        <span><i class="fa fa-ship"></i></span>
        <span><i class="fa fa-suitcase"></i></span>
        <span><i class="fa fa-ship"></i></span>
        <span><i class="fa fa-suitcase"></i></span>
      </div>
    </div>
    <!-- END: PRELOADER -->

    <div class="site-wrapper">
      @yield("content")
      @include("components.footer")
    </div>
    <!-- END: SITE-WRAPPER -->

    <!-- Load Scripts -->
    <script src="{{ asset("/assets/js/respond.js") }}"></script>
    <script src="{{ asset("/assets/js/jquery.js") }}"></script>
    <script src="{{ asset("/assets/plugins/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("/assets/js/jquery-ui.min.js") }}"></script>
    <script src="{{ asset("/assets/js/bootstrap-select.min.js") }}"></script>
    <script src="{{ asset("/assets/plugins/wow.min.js") }}"></script>
    <script src="{{ asset("/assets/plugins/supersized.3.1.3.min.js") }}"></script>
    <script src="{{ asset("/assets/js/js.js") }}"></script>

    <!-- EXTRAS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    @yield("additionalJS")
  </body>
</html>