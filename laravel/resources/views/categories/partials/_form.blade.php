<div class="box-body">
	<div class="form-group row">
	    {!! Form::label('category', 'Category', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::text('category') !!}</div>
	</div>
	 
	<div class="form-group row">
	    {!! Form::label('parent', 'Parent',array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::select('parent', $categories, array('class' => 'form-control select2')) !!}</div>
	</div>
	 
	<div class="form-group row">
		<div class="col-md-2">
	    	{!! Form::submit($submit_text, array('class' => 'btn btn-default')) !!}
    	</div>
	</div>
</div>
