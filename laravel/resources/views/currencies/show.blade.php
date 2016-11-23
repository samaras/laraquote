@extends('app')
 
@section('content')
    <p>
        {!! link_to_route('currencies.index', 'Back to currencies') !!} |
        {!! link_to_route('currencies.create', 'Create a Currency') !!}
    </p>
@endsection