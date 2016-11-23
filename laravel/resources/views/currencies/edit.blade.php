@extends('app')
 
@section('content')
	@section('pageheader')
    	Edit Currency
    @endsection
 
    {!! Form::model($currency, ['method' => 'PATCH', 'route' => ['currencies.update']]) !!}
        @include('currencies/partials/_form', ['submit_text' => 'Edit Currency'])
    {!! Form::close() !!}
@endsection