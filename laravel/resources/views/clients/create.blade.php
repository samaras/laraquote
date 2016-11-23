@extends('app')
 
@section('content')
    @section('pageheader')
    	Create Client
    @endsection
 
    {!! Form::model(new App\Client, ['route' => ['clients.store']]) !!}
        @include('clients/partials/_form', ['submit_text' => 'Create Client'])
    {!! Form::close() !!}
@endsection