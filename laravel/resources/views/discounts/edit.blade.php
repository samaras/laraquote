@extends('app')
 
@section('content')
    @section('pageheader')
    	Edit Discount
    @endsection
 
    {!! Form::model($discount, ['method' => 'PATCH', 'route' => ['discounts.update']]) !!}
        @include('discounts/partials/_form', ['submit_text' => 'Edit Discount'])
    {!! Form::close() !!}
@endsection