@extends('app')
 
@section('content')
	@section('pageheader')
    	Edit User
    @endsection
 
    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['users.update', $user]]) !!}
        @include('users/partials/_form', ['submit_text' => 'Edit User'])
    {!! Form::close() !!}
@endsection
