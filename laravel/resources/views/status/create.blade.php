@extends('app')
 
@section('content')
    @section('pageheader')
    	Edit Status
    @endsection
 
    {!! Form::model(new App\Status, ['method' => 'PATCH', 'route' => ['status.update']]) !!}
        @include('status/partials/_form', ['submit_text' => 'Edit Status'])
    {!! Form::close() !!}
@endsection
