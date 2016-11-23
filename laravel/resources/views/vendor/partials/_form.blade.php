<div class="box-body">
	<div class="form-group">
	    {!! Form::label('category', 'Category:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-6">{!! Form::text('category') !!}</div>
	</div>
	 
	<div class="form-group">
	    {!! Form::label('parent', 'Parent:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-6">{!! Form::text('parent') !!}</div>
	</div>
	 
	<div class="form-group">
	    {!! Form::label('completed', 'Completed:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-6">{!! Form::checkbox('completed') !!}</div>
	</div>
	 
	<div class="form-group">
	    {!! Form::label('description', 'Description:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-6">{!! Form::textarea('description') !!}</div>
	</div>
	 
	<div class="form-group">
		<div class="col-md-2">
	    	{!! Form::submit($submit_text, array('class' => 'btn btn-default')) !!}
    	</div>
	</div>
</div>