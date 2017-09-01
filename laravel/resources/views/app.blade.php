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
							      @includeIf('info_menu')              			
              			
              			<!-- Tasks Menu -->
              			@includeIf('task_menu')
              			
              			<!-- User Account Menu -->
              			@includeIf('user_menu')
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
            @include('messages')
            
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
