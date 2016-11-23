@extends('app')
 
@section('pagedescription')
	Roles
@endsection 

@section('content')
<section>
	<div class="col-xs-12">
		<div class="box box-primary">
		<div>
			<div class="col-md-6" style="padding-top: 5px">{!! link_to_route('groups.create', 'Create Group', array(), ['class' => 'btn btn-default']) !!}</div>
			<div class="col-md-6">@include('toolboxsearch')</div>
		</div>
		<div class="box-body">
			<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-hover dataTable" id="example1" role="grid" aria-describedby="example1_info">
							<thead>
								<tr role="row">
									<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 50px;"> # </th>
									<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 180px;">Name</th>
									<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Created At</th>
									<th style="width: 150px"></th>
								</tr>
							</thead>
							<tbody>
							@if (!$groups->count() )
							<tr>
								<td colspan="4" class="text-center">
									No user groups found.
								</td>
							</tr>
							<br/>
							@else
								@foreach( $groups as $group )
        			                <tr>
        			                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('groups.destroy'))) !!}
											<td>#</td>
        			                        <td><a href="{{ route('groups.show', $group->id) }}">{{ $group->group }}</a></td>
        			                        <td>
        			                            {!! link_to_route('groups.edit', 'Edit', $group->id, array('class' => 'btn btn-info btn-sm btn-flat glyphicon glyphicon-edit')) !!},
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
</section>
    <div class="pull-right">
		{!! $groups->render() !!}
    </div>
@endsection
