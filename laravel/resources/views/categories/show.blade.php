@extends('app')
 
@section('content')
    <p>
        {!! link_to_route('categories.index', 'Back to category') !!} |
        {!! link_to_route('categories.create', 'Create Category') !!}
    </p>
@endsection