@extends('app')
 
@section('content')
 	@section('pageheader')
 		Create Discount
 	@endsection
 
    {!! Form::model(new App\Discount, ['route' => ['discounts.store']]) !!}
        @include('discounts/partials/_form', ['submit_text' => 'Create a Discount'])
    {!! Form::close() !!}
@endsection