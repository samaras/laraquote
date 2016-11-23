<div class="box-body">
    <div class="form-group row">
        {!! Form::label('company', 'Company:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('company') !!}</div>
    </div>
     
    <div class="form-group row">
        {!! Form::label('address', 'Address:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::textarea('address') !!}</div>
    </div>
     
    <div class="form-group row">
        {!! Form::label('contact_person', 'Contact Person:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('contact_person') !!}</div>
    </div>
     
    <div class="form-group row">
        {!! Form::label('address_line1', 'Address Line 1:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('address_line1') !!}</div>
    </div>

    <div class="form-group row">
        {!! Form::label('address_line2', 'Address Line 2:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('address_line2') !!}</div>
    </div>

    <div class="form-group row">
        {!! Form::label('address_line3', 'Address Line 3:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('address_line3') !!}</div>
    </div>

    <div class="form-group row">
        {!! Form::label('province', 'Province:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('province') !!}</div>
    </div>

    <div class="form-group row">
        {!! Form::label('postal_code', 'Postal Code:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('postal_code') !!}</div>
    </div>

    <div class="form-group row">
        {!! Form::label('phone_number', 'Phone Number:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('phone_number') !!}</div>
    </div>

    <div class="form-group row">
        {!! Form::label('cell_number', 'Cell Number:', array('class'=>'col-md-2 control-label')) !!}
        <div class="col-md-6">{!! Form::text('cell_number') !!}</div>
    </div>
     
    <div class="form-group row">
        <div class="col-md-2">
            {!! Form::submit($submit_text, array('class' => 'btn btn-default')) !!}
        </div>
    </div>
</div>