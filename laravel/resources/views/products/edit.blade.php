@extends('app')
 
@section('content')
    @section('pageheader')
    	Edit Product
    @endsection
 
    {!! Form::model($product, ['method' => 'PATCH', 'route' => ['products.update']]) !!}
        @include('products/partials/_form', ['submit_text' => 'Edit Product'])
    {!! Form::close() !!}
@endsection