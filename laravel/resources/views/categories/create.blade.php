@extends('app')
 
@section('content')
 	@section('pageheader')
 		Create Category
 	@endsection
 
    {!! Form::model(new App\Category, ['route' => ['categories.store']], array('class'=>'form-horizontal')) !!}
        @include('categories/partials/_form', ['submit_text' => 'Create Category'])
    {!! Form::close() !!}
@endsection