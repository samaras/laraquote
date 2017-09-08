<li class="dropdown user user-menu">
	<!-- Menu Toggle Button -->
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		<!-- The user image in the navbar-->
		<img src="{{ asset('/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
		<!-- hidden-xs hides the username on small devices so only the image appears. -->
		@if (Auth::check())
			<span class="hidden-xs">{{ Auth::user()->email }}</span>
		@endif
		<!--<span class="hidden-xs">skomfi@gmail.com</span>-->
	</a>
	<ul class="dropdown-menu">
		<!-- The user image in the menu -->
		<li class="user-header">
		<img src="{{ asset('/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
		<p>
			<!--Samuel Komfi-->
			@if(Auth::check())
				{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
			@endif
			<small>Member since Nov. 2016</small>
		</p>
</li>
<!-- Menu Body -->
<li class="user-body">
	<div class="col-xs-6 text-center">
		<a href="{{ url('/clients/'. Auth::id()) }}">Clients</a>
	</div>
	<div class="col-xs-6 text-center">
		<a href="{{ url('/quotes/'. Auth::id()) }}">Quotes</a>
	</div>
</li>
<!-- Menu Footer-->
<li class="user-footer">
	<div class="pull-left">
		<a href="{{ url('/profile/'. Auth::id()) }}" class="btn btn-default btn-flat">Profile</a>
	</div>
	<div class="pull-right">
		<form id="logout-form" action="{{ route('logout') }}" method="POST">{{ csrf_field() }}
			<input class="btn btn-default btn-flat" type="submit" value="Logout" />
		</form>
	</div>
</li>
