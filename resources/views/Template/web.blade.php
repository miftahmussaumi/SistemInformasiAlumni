<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('logo/logo2.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('web/img/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('web/img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('web/img/apple-touch-icon-114x114.png')}}">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{asset('web/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- CSS Files For Plugin -->
    <link href="{{asset('web/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('web/css/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('web/css/YTPlayer.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('web/inc/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/inc/owlcarousel/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/inc/revolution/css/settings.css')}}" />
    <link rel="stylesheet" href="{{asset('web/inc/revolution/css/layrs.css')}}" />
    <link rel="stylesheet" href="{{asset('web/inc/revolution/css/navigation.css')}}" />

    <!-- Custom CSS -->
    <link href="{{asset('web/css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="blog_index" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">


    <!-- Preloader -->
    <div id="preloader">
        <div id="spinner"></div>
    </div>
    <!-- End Preloader-->


    <!-- Start Navigation -->
    <header class="nav-solid" id="home">

        <nav class="navbar navbar-fixed-top">
            <div class="navigation">
                <div class="container-fluid">
                    <div class="row">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Logo -->
                            <div class="logo-container">
                                <div class="logo-wrap local-scroll">
                                    <a href="index.html">
                                        <img class="logo" src="{{asset('logo/logo1.png')}}" alt="logo" data-rjs="2">
                                    </a>
                                </div>
                            </div>
                        </div> <!-- end navbar-header -->

                        <div class="col-md-8 col-xs-12 nav-wrap">
                            <div class="collapse navbar-collapse" id="navbar-collapse">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="{{route('webHome')}}">Home</a></li>
                                    <li><a href="index.html#service">About</a></li>
                                    <li><a href="{{route('webAlumni')}}">Alumni</a></li>
                                    <li><a href="{{route('webLogin')}}">Login</a></li>
                                </ul>

                            </div>
                        </div> <!-- /.col -->

                    </div> <!-- /.row -->
                </div>
                <!--/.container -->
            </div> <!-- /.navigation-overlay -->
        </nav> <!-- /.navbar -->

    </header>
    <!-- End Navigation -->

    <!-- Section Title Blog -->



    <!--BLog single section-->
    @yield('isi blog')
    <!--End blog single section-->

    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->


    <!-- jQuery -->
    <script src="{{asset('web/js/jquery.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('web/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Components Plugin -->
    <script src="{{asset('web/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('web/js/smooth-scroll.js')}}"></script>
    <script src="{{asset('web/js/jquery.appear.js')}}"></script>
    <script src="{{asset('web/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('web/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('web/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('web/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('web/js/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{asset('web/js/retina.min.js')}}"></script>
    <script src="{{asset('web/js/wow.min.js')}}"></script>
    <script src="{{asset('web/inc/owlcarousel/js/owl.carousel.min.js')}}"></script>

    <!-- Custom Plugin -->
    <script src="{{asset('web/js/custom.js')}}"></script>

</body>

</html>