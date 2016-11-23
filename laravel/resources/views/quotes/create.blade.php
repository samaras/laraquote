@extends('app')
 
@section('content')
    @section('pageheader')
    	Create Qoutes
    @endsection
 
    {!! Form::model(new App\Quote, ['route' => ['quotes.store']]) !!}
        @include('quotes/partials/_form', ['submit_text' => 'Create Qoute'])
    {!! Form::close() !!}
@endsection