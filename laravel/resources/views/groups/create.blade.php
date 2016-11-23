@extends('app')
 
@section('content')
    @section('pageheader')
    	Create Group
    @endsection
 
    {!! Form::model(new App\Group, ['route' => ['groups.store']]) !!}
        @include('groups/partials/_form', ['submit_text' => 'Create Group'])
    {!! Form::close() !!}
@endsection