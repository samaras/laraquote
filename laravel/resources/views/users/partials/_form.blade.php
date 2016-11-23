<div class="box-body">
    <div class="form-group row">
        {!! Form::label('first_name', 'First Name:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('first_name') !!}</div>
    </div>
     
    <div class="form-group row">
        {!! Form::label('last_name', 'Last Name:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('last_name') !!}</div>
    </div>

    <div class="form-group row">
        {!! Form::label('email', 'Email:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('email') !!}</div>
    </div>

    <div class="form-group row">
        {!! Form::label('password', 'Password:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::password('password') !!}</div>
    </div>
     
    <div class="form-group row">
        {!! Form::label('active', 'Active:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::checkbox('active') !!}</div>
    </div>
     
    <div class="form-group">
        <div class="col-md-2">
            {!! Form::submit($submit_text) !!}
        </div>
    </div>
</div>