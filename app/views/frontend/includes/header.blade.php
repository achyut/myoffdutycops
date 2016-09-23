    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Off Duty Cops</title>

        <!-- Bootstrap -->
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- font awesome for icons -->
        <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- flex slider css -->
        <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="screen">
        <!-- animated css  -->
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" media="screen"> 
        <!-- Revolution Style-sheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/rev-style.css') }}">
        <!--owl carousel css-->
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" type="text/css" media="screen">
        <!--mega menu -->
        <link href="{{ asset('css/yamm.css') }}" rel="stylesheet" type="text/css">
        <!--cube css-->
        <link href="{{ asset('cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet" type="text/css">
        <!-- custom css-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="screen">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!--sky form pro css-->
        <link href="{{ asset('sky-form/css/sky-forms.css') }}" rel="stylesheet">

		<style>
			.btn-theme-dark{
					background-color:#32c5d2;color:#fff
			}
			.navbar-default .navbar-nav > li > a.requestservice{
					color:#fff;
			}
			.navbar-default .navbar-nav > li > a.requestservice:hover{
					
					background-color:#259CA7;
			}
		</style>
    </head>
    <body>
        <div class="top-bar-dark">            
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 hidden-xs">
                        <!--
                        <div class="top-bar-socials">
                            <a href="index.html#" class="social-icon-sm si-dark si-gray-round si-colored-facebook">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="index.html#" class="social-icon-sm si-dark si-gray-round si-colored-twitter">
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-twitter"></i>
                            </a>
                           
                        </div>
                        -->
                    </div>
                    <div class="col-sm-8 text-right">
                        <ul class="list-inline top-dark-right">                      
                            <li class="hidden-sm hidden-xs"><i class="fa fa-envelope"></i> info@myoffdutycops.com</li>
                            <!-- <li class="hidden-sm hidden-xs"><i class="fa fa-phone"></i> +01 1800 453 7678</li> -->
                            <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!--top-bar-dark end here-->
        <!--navigation -->
        <!-- Static navbar -->
        <div class="navbar navbar-default navbar-static-top yamm sticky" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand custom-brand" href="/">My Off Duty Cops</a>
                </div>
                <div class="navbar-collapse collapse">
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('requestservice') }}" class="btn btn-theme-dark btn-lg requestservice" style="min-width:250px;">GET STARTED NOW!</a>
                        </li>
                        
                        <li class="active">
                            <a href="/">Home</a>
                        </li>
                       <li class="active">
                            <a href="{{ route('about') }}">About</a>
                        </li>
                        <li class="active">
                            <a href="{{ route('allnews') }}">News</a>
                        </li>
                        
                        <li class="active">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>
                        <li class="active">
                            <a href="{{ route('policesignup') }}">Police Signup</a>
                        </li>
                        
                        
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--container-->
        </div><!--navbar-default-->

