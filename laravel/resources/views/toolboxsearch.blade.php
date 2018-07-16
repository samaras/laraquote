<div class="box-header">
	<div class="box-tools">
		<div class="input-group" style="width: 150px;">
            {!! Form::open(['url' => 'clients/search', 'method' => 'get']) !!}
    			<input name="search" class="form-control input-sm" placeholder="Search" type="text" style="max-width: 111px;"> 
	    		<div class="input-group-btn">
	    			<button class="btn btn-sm btn-default" style="height: 30px; width: 40px"><i class="fa fa-search"></i></button>
	    		</div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
        
