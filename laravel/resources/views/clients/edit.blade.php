@extends('app')
 
@section('content')
    @section('pageheader')
    	Edit Client
	@endsection
 
    {!! Form::model($client, ['method' => 'PATCH', 'route' => ['clients.update', $client]]) !!}
        @include('clients/partials/_form', ['submit_text' => 'Edit Client'])
    {!! Form::close() !!}
@endsection
