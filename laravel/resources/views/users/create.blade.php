@extends('app')
 
@section('content')
    @section('pageheader')
    	Create User
    @endsection
 
    {!! Form::model(new App\User, ['method' => 'PATCH', 'route' => ['users.update']]) !!}
        @include('users/partials/_form', ['submit_text' => 'Create User'])
    {!! Form::close() !!}
@endsection