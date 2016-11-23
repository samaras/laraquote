@extends('app')
 
@section('content')
    @section('pageheader')
    	Edit Qoute
    @endsection
 
    {!! Form::model($quote, ['method' => 'PATCH', 'route' => ['quotes.update']]) !!}
        @include('quotes/partials/_form', ['submit_text' => 'Edit Qoute'])
    {!! Form::close() !!}
@endsection