<div class="box-body">
	<div class="form-group row">
	    {!! Form::label('name', 'Name:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::text('name') !!}</div>
	</div>
	 
	<div class="form-group row">
	    {!! Form::label('category', 'Category:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::select('category', $categories, array('class' => 'form-control select2')) !!}</div>
	</div>
	 
	<div class="form-group row">
	    {!! Form::label('description', 'Description:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::textarea('description') !!}</div>
	</div>
	 
	<div class="form-group row">
	    {!! Form::label('stock', 'Stock:', array('class'=>'col-md-2 control-label')) !!}
	    <div class="col-md-6">{!! Form::text('stock') !!}</div>
	</div>
	 
	<div class="form-group row">
		<div class="col-md-2">
	    	{!! Form::submit($submit_text,array('class'=>'btn btn-default')) !!}
    	</div>
	</div>
</div>