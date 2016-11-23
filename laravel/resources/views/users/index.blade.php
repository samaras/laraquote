@extends('app')

@section('pagedescription')
	System Users and Salespeople
@endsection 
 
@section('content')
<div class="col-xs-12">
	<div class="box box-primary">
		<div>
			<div class="col-md-6" style="padding-top: 5px">{!! link_to_route('groups.create', 'Create User', array(), ['class' => 'btn btn-default']) !!}</div>
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
										<td style="width: 50px">#</td>
                                        <th rowspan="1" colspan="1" style="width: 111px;">First Name</td>
					                    <th rowspan="1" colspan="1" style="width: 111px;">Last Name</td>
					                    <th rowspan="1" colspan="1" style="width: 111px;">Email</td>
					                    <th rowspan="1" colspan="1" style="width: 111px;">Last Login</td>
					                    <th rowspan="1" colspan="1" style="width: 111px;">Active</td>
					                    <th rowspan="1" colspan="1" style="width: 111px;">Group(s)</td>
                                        <th rowspan="1" colspan="1" style="width: 111px;">Created At</th>
                                        <th style="width: 150px"></th>
                                    </tr>
                                </thead>
                                <tbody>
								@if ( !$users->count() )
									<tr>
										<td colspan="9" class="text-center">No users found</td>
									</tr>
								@else
									@foreach( $users as $user )
					                <tr>
					                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('users.destroy'))) !!}
					                        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->first_name }}</a></td>
					                        <td><a href="{{ route('users.show', $user->id) }}">{{ $user->last_name }}</a></td>
					                        <td>{{ $user->email }}</td>
					                        <td>{{ $user->last_login }}</td>
					                        <td>
					                        	@if ($user->active==1)
					                        		Active
				                        		@else
				                        			InActive
			                        			@endif

					                        </td>
					                        <td>Sales</td>
					                        <td>{{ Carbon::now() }}</td>
					                        <td style="text-align: center">
					                            {!! link_to_route('users.edit', 'Edit', $user->id, array('class' => 'btn btn-info')) !!},
					                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
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
			{!! $users->render() !!}
		</div>
@endsection
