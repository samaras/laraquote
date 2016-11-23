<div class="box-body">
	<div class="form-group row">
	    {!! Form::label('status', 'Status:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::text('status') !!}</div>
	</div>
	 
	<div class="form-group row">
		<div class="col-md-2">
	    	{!! Form::submit($submit_text, array('class' => 'btn btn-default')) !!}
	    </div>
	</div>
</div>