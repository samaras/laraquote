@extends('auth')

@section('content')
<p class="login-box-msg">Reset password</p>
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

		<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="token" value="{{ $token }}">

			<div class="form-group">
				<div class="col-md-12">
					<input type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}">
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<input type="password" class="form-control" placeholder="Password" name="password">
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-12">
					<input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-6 col-md-offset-4">
					<button type="submit" class="btn btn-primary btn-flat">
						Reset Password
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
<br />
@endsection
