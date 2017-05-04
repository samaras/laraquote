@extends('app')
 
@section('content')
<section>
	<div class="col-xs-12">
		<div class="box box-primary">
			<div>
				<div class="col-md-6" style="padding-top: 5px">{!! link_to_route('discounts.create', 'Create Discount', array(), ['class' => 'btn btn-default']) !!}</div>
				<div class="col-md-6">@include('toolboxsearch')</div>
			</div>
 
            @if ( !$discounts->count() )
                No discounts found
            @else
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover dataTable" id="example1" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
										<th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 180px;">#</th>
                	                    <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 180px;">Discount</th>
                	                    <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111px;">Created At</th>
                	                    <th style="width: 150px"></th>
                                    </tr>                                        
                                </thead>
                                <tbody>
            			            @foreach( $discounts as $discount )
            			                <tr role="row" class="odd">
            			                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('discounts.destroy', $discount->id))) !!}
												<td> # </td>
            			                        <td><a href="{{ route('discounts.show', $discount->id) }}">{{ $discount->discount }}</a></td>
            			                        <td></td>
            			                        <td style="text-align: center">
            			                            {!! link_to_route('discounts.edit', 'Edit', $discount->id, array('class' => 'btn btn-info btn-sm btn-flat glyphicon glyphicon-edit')) !!}
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
	{!! $discounts->render() !!}
</div>
@endsection
