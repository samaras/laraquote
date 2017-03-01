<div class="box-body">
	<div class="form-group row">
	    {!! Form::label('client_id', 'Client:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::select('client_id', $clients, array('class' => 'form-control select2')) !!}</div>
	</div>

	<div class="form-group row">
	    {!! Form::label('status_id', 'Status:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::select('status_id', $status, array('class' => 'form-control select2')) !!}</div>
	</div>

	<div class="form-group row">
	    {!! Form::label('discount_id', 'Discount:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::select('discount_id', $discounts, array('class' => 'form-control select2')) !!}</div>
	</div>
	 
	<div class="form-group row">
		<div class="col-md-2">
	    	{!! Form::submit($submit_text, array('class' => 'btn btn-default')) !!}
    	</div>
	</div>
</div>