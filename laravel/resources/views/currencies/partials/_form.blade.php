<div class="box-body">
	<div class="form-group row">
	    {!! Form::label('currency', 'Currency:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::text('currency') !!}</div>
	</div>
	 
	<div class="form-group row">
	    {!! Form::label('code', 'Code:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::text('code') !!}</div>
	</div>
	 
	<div class="form-group row">
	    {!! Form::label('symbol', 'Symbol:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::text('symbol') !!}</div>
	</div>
	 
	<div class="form-group row">
		<div class="col-md-2">
	    	{!! Form::submit($submit_text, array('class' => 'btn btn-default')) !!}
    	</div>
	</div>
</div>