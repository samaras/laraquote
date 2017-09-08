@extends('app')
 
@section('content')
	@section('pageheader')
    	Edit Profile
    @endsection
 
    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user]]) !!}
        @include('users/partials/_form', ['submit_text' => 'Save'])
    {!! Form::close() !!}
@endsection
