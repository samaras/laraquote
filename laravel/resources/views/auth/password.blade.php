@extends('auth')

@section('content')
<p class="login-box-msg">Reset password</p>
<div class="container-fluid">
	<div class="row">
		
		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif

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

		<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group has-feedback">
				<div class="col-md-12">
					<input type="email" class="form-control" placeholder="E-Mail Address" name="email" value="{{ old('email') }}">
				</div>
			</div>
			<br/ >
			<div class="form-group">
				<div class="col-md-4 md-offset-4">
					<button type="submit" class="btn btn-primary">
						Send Password Reset Link
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
<br />
@endsection
