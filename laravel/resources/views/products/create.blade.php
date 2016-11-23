@extends('app')
 
@section('content')
    @section('pageheader')
    	Create Product
    @endsection
 
    {!! Form::model(new App\Product, ['route' => ['products.store']]) !!}
        @include('products/partials/_form', ['submit_text' => 'Create Product'])
    {!! Form::close() !!}
@endsection