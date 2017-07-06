@extends('app')

@section('pagedescription')
	Quote Status
@endsection
 
@section('content')
<div class="col-xs-12">
	<div class="box box-primary">
		<div class="box-header with-border">
			<div class="col-md-6" style="padding-top: 5px">{!! link_to_route('status.create', 'Create Status', array(), ['class' => 'btn btn-default']) !!}</div>
			<div class="col-md-6">@include('toolboxsearch')</div>
		</div>

		<p>&nbsp;</p>
		<div class="box-body">
			<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-hover dataTable" id="example1" role="grid" aria-describedby="example1_info">
							<thead>
								<tr role="row">
									<th tabindex="0" rowspan="1" colspan="1" style="width: 50px;">#</th>
									<th tabindex="1" rowspan="1" colspan="1" style="width: 111px;">Status</th>
									<th tabindex="2" rowspan="1" colspan="1" style="width: 111px;">Created At</th>
									<th style="width: 150px"></th>
								</tr>
							</thead>
							<tbody>
							@if ( !$status->count() )
							<tr>
								<td colspan="4">
									No statuses found	
								</td>
							</tr>
							@else
							@foreach( $status as $st )
							<tr>
								{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('status.destroy', $st->id))) !!}
									<td> # </td>
									<td><a href="{{ route('status.show', $st->id) }}">{{ $st->status }}</a></td>
									<td></td>
									<td style="text-align: center">
										{!! link_to_route('status.edit', 'Edit', $st->id, array('class' => 'btn btn-info btn-sm btn-flat glyphicon glyphicon-edit')) !!}
										{!! Form::submit('Delete', array('class' => 'btn btn-danger btn-sm btn-flat glyphicon glyphicon-trash')) !!}
									</td>
								{!! Form::close() !!}
							</tr>
							@endforeach
						@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="pull-right">
		{!! $status->render() !!}
	</div>
@endsection
