<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>LaraQoute System</title>

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
<body class="hold-transition login-page">
    <div class="login-box">
		<div class="login-logo">
			<img style="padding-bottom: 8px;" src="{{ asset('favicon48.png') }}" alt="logo" />
			<a style="letter-spacing: 2px;" href="">Lara<b></b>Quote</a>
		</div><!-- /.login-logo -->
		<div class="login-box-body">
	  
			@yield('content')
		
		</div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

	<!-- Scripts -->
	<script src="{{ asset('/js/jquery.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<!-- AdminLTE App -->
    <script src="{{ asset('/js/app.min.js') }}"></script>
</body>
</html>
