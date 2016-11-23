@extends('app')
 
@section('content')
 	@section('pageheader')
 		Create Currency
 	@endsection
 
    {!! Form::model(new App\Category, ['route' => ['currencies.store']]) !!}
        @include('currencies/partials/_form', ['submit_text' => 'Create a Currency'])
    {!! Form::close() !!}
@endsection