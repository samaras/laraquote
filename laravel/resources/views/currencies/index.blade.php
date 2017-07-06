@extends('app')
 
@section('content')
<section>
	<div class="col-xs-12">
		<div class="box box-primary">
			<div class="box-header with-border"> 
				<div class="col-md-6" style="padding-top: 5px">{!! link_to_route('currencies.create', 'Create Currency', array(), ['class' => 'btn btn-default']) !!}</div>
				<div class="col-md-6">@include('toolboxsearch')</div>
			</div>
            
            <p>&nbsp;</p>
		    @if ( !$currencies->count() )
		        No currencies found
		    @else
			<div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover dataTable" id="example1" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
					                    <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 180px;">Currency</th>
					                    <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Code</th>
					                    <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Symbol</th>
					                    <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Created At</th>
					                    <th style="width: 150px"></th>
				                    </tr>
                				</thead>
			                    <tbody>
						            @foreach( $currencies as $currency )
						                <tr role="row" class="odd">
					                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('currencies.destroy', $currency->id))) !!}
					                        <td><a href="{{ route('currencies.show', $currency->id) }}">{{ $currency->currency }}</a></td>
					                        <td>{{ $currency->code }}</td>
					                        <td>{{ $currency->symbol }}</td>
					                        <td></td>
					                        <td style="text-align: center">
					                            {!! link_to_route('currencies.edit', 'Edit', $currency->id, array('class' => 'btn btn-info btn-sm btn-flat glyphicon glyphicon-edit')) !!}
					                            {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-sm btn-flat glyphicon glyphicon-trash')) !!}
					                        </td>
					                    {!! Form::close() !!}
		                				</tr>
		            				@endforeach
	            				</tbody>
			                </table>
			            </div>
			        </div>
				@endif
			</div>
		</div>
    </section> 
 
    <div class="pull-right">
		{!! $currencies->render() !!}
    </div>
@endsection
