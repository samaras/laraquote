<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>LaraQoute - {!! $page_title !!}</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="{{ asset('/css/skins/skin-blue.min.css') }}">
    
    <link rel="shortcut icon" href="{{ asset('favicon48.png') }}">
	<link rel="icon" href="{{ asset('favicon.ico') }}">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('ico/apple-touch-icon-57-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/apple-touch-icon-72-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/apple-touch-icon-144-precomposed.png') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- Main Header -->
    	<header class="main-header">
	        <!-- Logo -->
	        <a href="index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>L</b>Q</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Lara</b>Qoute</span>
	        </a>

        	<!-- Header Navbar -->
        	<nav class="navbar navbar-static-top" role="navigation">
          		<!-- Sidebar toggle button-->
	          	<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <span class="sr-only">Toggle navigation</span>
	          	</a>
          		<!-- Navbar Right Menu -->
          		<div class="navbar-custom-menu">
            		<ul class="nav navbar-nav">
              			<!-- Notifications Menu -->
              			<li class="dropdown notifications-menu">
                			<!-- Menu toggle button -->
                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  				<i class="fa fa-bell-o"></i>
                  				<span class="label label-warning">10</span>
                			</a>
                			<ul class="dropdown-menu">
                  				<li class="header">You have 10 notifications</li>
                  				<li>
                    				<!-- Inner Menu: contains the notifications -->
                					<ul class="menu">
                      					<li><!-- start notification -->
                        					<a href="#"><i class="fa fa-users text-aqua"></i> 5 new members joined today</a>
                      					</li><!-- end notification -->
                      					<li><!-- start notification -->
                        					<a href="#"><i class="fa fa-users text-aqua"></i> 4 quotes approved today</a>
                      					</li><!-- end notification -->
                    				</ul>
                  				</li>
                  				<li class="footer"><a href="#">View all</a></li>
                			</ul>
              			</li>
              			<!-- Tasks Menu -->
              			<li class="dropdown tasks-menu">
                			<!-- Menu Toggle Button -->
                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  				<i class="fa fa-flag-o"></i>
                  				<span class="label label-danger">9</span>
                			</a>
                			<ul class="dropdown-menu">
                  				<li class="header">You have 9 quotes</li>
                  				<li>
                    				<!-- Inner menu: contains the tasks -->
                    				<ul class="menu">
                      					<li><!-- Task item -->
                        					<a href="#">
                          						<!-- Task title and progress text -->
                          						<h3>Product listed<small class="pull-right">20%</small></h3>
                          						<!-- The progress bar -->
                          						<div class="progress xs">
                            					<!-- Change the css width attribute to simulate progress -->
                            						<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              							<span class="sr-only">20% Complete</span>
                            						</div>
                          						</div>
                        					</a>
                      					</li><!-- end task item -->
                    				</ul>
                  				</li>
                  				<li class="footer"><a href="{{ url('/quotes/index') }}">View all quotes</a></li>
                			</ul>
              			</li>
              			<!-- User Account Menu -->
              			<li class="dropdown user user-menu">
                			<!-- Menu Toggle Button -->
                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  				<!-- The user image in the navbar-->
                  				<img src="{{ asset('/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                  				<!-- hidden-xs hides the username on small devices so only the image appears. -->
                  				@if (Auth::check())
									<span class="hidden-xs">{{ Auth::user()->username }}</span>
                  				@endif
                  				<span class="hidden-xs">Samaras</span>
                			</a>
                			<ul class="dropdown-menu">
                  				<!-- The user image in the menu -->
                  				<li class="user-header">
                    			<img src="{{ asset('/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    			<p>
                      				Samuel Komfi
                      				@if (Auth::check())
										{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
									@endif
                      				<small>Member since Nov. 2012</small>
                    			</p>
                  		</li>
                  		<!-- Menu Body -->
                  		<li class="user-body">
                    		<div class="col-xs-6 text-center">
                      			<a href="#">Clients</a>
                    		</div>
                    		<div class="col-xs-6 text-center">
                      			<a href="#">Quotes</a>
                    		</div>
                  		</li>
                  		<!-- Menu Footer-->
                  		<li class="user-footer">
                    		<div class="pull-left">
                      			<a href="#" class="btn btn-default btn-flat">Profile</a>
                    		</div>
                    		<div class="pull-right">
                      			<a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    		</div>
                  		</li>
                	</ul>
              	</li>
              	<!-- Control Sidebar Toggle Button -->
              	<li>
                	<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              	</li>
            </ul>
      	</div>
        </nav>
  	</header>
	   
    @include('sidebar')

	<!-- Content Wrapper. Contains page content -->
  	<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
			@include('pageheader', ['page_title' => $page_title])
          	<ol class="breadcrumb">
            	<li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            	<li class="active">@yield('active_link')</li>
          	</ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Error!</h4>
                    {{ Session::get('error') }}
                </div>
            @endif

            @if(Session::has('info'))
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-info"></i> Info!</h4>
                    {{ Session::has('info') }}
                </div>
            @endif

            @if(Session::has('warning'))
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Warning!</h4>
                    {{ Session::get('warning') }}
                </div>
            @endif

            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ Session::get('success') }}
                </div>
            @endif
            
            @yield('content')
        </section><!-- /.content -->
  	</div><!-- /.content-wrapper -->

	@include('footer')

	</div> <!-- wrapper -->
	<!-- Scripts -->
	<script src="{{ asset('/js/jquery.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<!-- AdminLTE App -->
    <script src="{{ asset('/js/app.min.js') }}"></script>
</body>
</html>
