@extends('auth')

@section('content')
<p class="login-box-msg">Sign in to start your session</p>
<div class="container-fluid">
	<div class="row">
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group has-feedback">
				<div class="col-md-12">
					<input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
				</div>
			</div>

			<div class="form-group has-feedback">
				<div class="col-md-12">
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-8" style="padding-right: 35px;">
					<div class="checkbox">
                          <label>
                            <input type="checkbox" name="remember"> Remember me
                          </label>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
				</div>
			</div>
		</form>
	</div>
</div>
<br />
<div class="text-center">
	<a href="{{ url('/password/email') }}">I forgot my password</a><br>
	<a href="{{ url('/register') }}" class="text-center">Register a new membership</a>
</div>
@endsection
