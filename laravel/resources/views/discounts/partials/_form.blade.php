<div class="box-body">
	<div class="form-group row">
	    {!! Form::label('discount', 'Discount:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::text('discount') !!}</div>
	</div>
	 
	<div class="form-group">
		<div class="col-md-2">
	    	{!! Form::submit($submit_text, array('class' => 'btn btn-default')) !!}
    	</div>
	</div>
</div>