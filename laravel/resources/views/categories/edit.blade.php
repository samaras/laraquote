@extends('app')
 
@section('content')
    @section('pageheader')
    	Edit Category
	@endsection

 
    {!! Form::model($category, ['method' => 'PATCH', 'route' => ['categories.update']], array('class'=>'form-horizontal')) !!}
        @include('categories/partials/_form', ['submit_text' => 'Edit Category'])
    {!! Form::close() !!}
@endsection