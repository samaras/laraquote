@extends('app')
 
@section('content')
    @section('pageheader')
    	Edit Group
    @endsection
 
    {!! Form::model($group, ['method' => 'PATCH', 'route' => ['groups.update']]) !!}
        @include('groups/partials/_form', ['submit_text' => 'Edit Group'])
    {!! Form::close() !!}
@endsection