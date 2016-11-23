@extends('app')
 
@section('content')
    @section('pageheader')
    	Edit Status
    @endsection
 
    {!! Form::model($status, ['method' => 'PATCH', 'route' => ['status.update']]) !!}
        @include('status/partials/_form', ['submit_text' => 'Edit Status'])
    {!! Form::close() !!}
@endsection