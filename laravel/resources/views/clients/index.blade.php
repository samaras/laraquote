@extends('app')

@section('pagedescription')
	Companies and Customers
@endsection 
 
@section('content')
	<div class="col-xs-12">
		<div class="box box-primary">
			<div>
				<div class="col-md-6" style="padding-top: 5px">{!! link_to_route('clients.create', 'Create Client', array(), ['class' => 'btn btn-default']) !!}</div>
				<div class="col-md-6">@include('toolboxsearch')</div>
			</div>
			

			<p>&nbsp;</p>
				<div class="box-body">
					<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row">
							<div class="col-sm-12">
								<table class="table table-hover" id="example1" role="grid" aria-describedby="example1_info">
									<thead>
										<tr role="row">
											<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50px;">#</th>
											<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 180px;">Client</th>
											<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Address</th>
											<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Province</th>
											<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Postal Code</th>
											<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Phone Number</th>
											<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Cell Number</th>
											<th style="width: 150px"></th>
										</tr>
									</thead>
									<tbody>
									@if (!$clients->count())
									<tr>
										<td colspan="4" class="text-center">
											No clients found.
										</td>
									</tr>
									@else
										@foreach( $clients as $client )
											<tr role="row" class="odd">
												{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('clients.destroy', $client->id))) !!}
													<td> # </td>
													<td><a href="{{ route('clients.show', $client->id) }}">{{ $client->contact_person }} ({{ $client->company }})</a></td>
													<td style="overflow: hidden;">{{ $client->address }}, {{ $client->address_line1 }}, {{ $client->address_line2 }}, {{ $client->address_line3 }},</td>
													<td>{{ $client->province }}</td>
													<td>{{ $client->postal_code }}</td>
													<td>{{ $client->phone_number }}</td>
													<td>{{ $client->cell_number }}</td>
													<td style="text-align: center">
														{!! link_to_route('clients.edit', 'Edit', $client->id,  array('class' => 'btn btn-info btn-sm btn-flat glyphicon glyphicon-edit')) !!}
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
				</div> <!-- box-body -->
		</div> <!-- box-primary -->
	</div>
	
	<div class="pull-right">
		{!! $clients->render() !!}
    </div>
@endsection
