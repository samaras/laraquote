@extends('auth')

@section('content')
<p class="login-box-msg">Register a new membership</p>
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

		<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group has-feedback">
				<div class="col-md-12">
					<input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name') }}">
				</div>
			</div>

			<div class="form-group has-feedback">
				<div class="col-md-12">
					<input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}">
				</div>
			</div>

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

			<div class="form-group has-feedback">
				<div class="col-md-12">
					<input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-3">
					<button type="submit" class="btn btn-primary btn-block btn-flat">
						Register
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="text-center">
	<a href="{{ url('/login') }}" class="text-center">I already have membership</a>
</div>
@endsection
