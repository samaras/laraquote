@extends('app')
 
@section('pagedescription')
	Quotations
@endsection 
 
@section('content')
<div class="col-xs-12">
	<div class="box box-primary">
		<div class="box-header with-border">
			<div class="col-md-6" style="padding-top: 5px">{!! link_to_route('quotes.create', 'Create Quote', array(), ['class' => 'btn btn-default']) !!}</div>
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
									<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50px;"> # </th>
									<th tabindex="1" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Client</th>
									<th tabindex="2" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">User</th>
									<th tabindex="3" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Date</th>
									<th tabindex="4" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Status</th>
									<th tabindex="5" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Discount</th>
									<th tabindex="6" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Updated At</th>
									<th style="width: 150px"></th>
								</tr>
							</thead>
							<tbody>
							@if (!$quotes->count())
								<tr>
									<td colspan="8" class="text-center">
										No qoutes found
									</td>
								</tr>
							@else
					            @foreach( $quotes as $quote )
					                <tr>
					                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('quotes.destroy'))) !!}
											<td>#</td>
					                        <td><a href="{{ route('quotes.show', $quote->id) }}">{{ $quote->client_id }}</a></td>
					                        <td>{{ $quote->user_id }}</td>
					                        <td>{{ $quote->created_at }}</td>
					                        <td>{{ $quote->status_id }}</td>
					                        <td>{{ $quote->discount_id }}</td>
					                        <td>{{ $quote->updated_at }}</td>
					                        <td style="text-align: center">
					                            {!! link_to_route('quotes.edit', 'Edit', $quote->id, array('class' => 'btn btn-info btn-sm btn-flat glyphicon glyphicon-edit')) !!},
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
	{!! $quotes->render() !!}
</div>
@endsection
