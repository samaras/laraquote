@extends('app')
 
@section('content')
<section>
	<div class="col-xs-12">
		<div class="box box-primary">
			<div>
				<div class="col-md-6" style="padding-top: 5px">{!! link_to_route('categories.create', 'Create Category', array(), ['class' => 'btn btn-default']) !!}</div>
				<div class="col-md-6">@include('toolboxsearch')</div>
			</div>
			<p>&nbsp;</p>

			@if ( !$categories->count() )
				You have no categories
			@else            
			<div class="box-body">
				<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-hover" id="example1" role="grid" aria-describedby="example1_info">
								<thead>
									<tr role="row">
										<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 180px;">Name</th>
										<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Created At</th>
										<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;"></th>
									</tr>
								</thead>
								<tbody>
								@foreach( $categories as $category )
									<tr role="row" class="odd">
										{!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('categories.destroy', $category->id))) !!}
											<td><a href="{{ route('categories.show', $category->id) }}">{{ $category->category }}</a></td>
											<td></td>
											<td style="text-align: center">
												{!! link_to_route('categories.edit', 'Edit', $category->id, array('class' => 'btn btn-info btn-sm btn-flat glyphicon glyphicon-edit')) !!}
												{!! Form::submit('Delete', array('class' => 'btn btn-danger btn-sm btn-flat glyphicon glyphicon-trash')) !!}
											</td>
										{!! Form::close() !!}
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		@endif
		</div>
	</div>
</section>
	
<div class="pull-right">
	{!! $categories->render() !!}
</div>
@endsection
