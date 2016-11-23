@extends('app')
 
@section('content')
	<section>
        <div class="col-xs-12">
            <div class="box box-primary">

				<div class="row" style="padding: 25px">
					<!-- Apply any bg-* class to to the info-box to color it -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-yellow">
							<span class="info-box-icon"><i class="fa fa-exchange"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Qoutes</span>
								<span class="info-box-number">{!! $quoteCount !!}</span>
								<!-- The progress section is optional -->
								<div class="progress">
									<div class="progress-bar" style="width: 70%"></div>
								</div>
								<span class="progress-description">
									70% Increase in 30 Days
								</span>
							</div><!-- /.info-box-content -->
						</div><!-- /.info-box -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-aqua">
							<span class="info-box-icon"><i class="fa fa-tags"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Client</span>
								<span class="info-box-number">{!! $clientCount !!}</span>
								<!-- The progress section is optional -->
								<div class="progress">
									<div class="progress-bar" style="width: 10%"></div>
								</div>
								<span class="progress-description">
									10% Increase in 30 Days
								</span>
							</div><!-- /.info-box-content -->
						</div><!-- /.info-box -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-green">
							<span class="info-box-icon"><i class="fa fa-user"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Users</span>
								<span class="info-box-number">{!! $userCount !!}</span>
								<!-- The progress section is optional -->
								<div class="progress">
									<div class="progress-bar" style="width: 50%"></div>
								</div>
								<span class="progress-description">
									50% Increase in 30 Days
								</span>
							</div><!-- /.info-box-content -->
						</div><!-- /.info-box -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box bg-red">
							<span class="info-box-icon"><i class="fa fa-euro"></i></span>
							<div class="info-box-content">
								<span class="info-box-text">Currencies</span>
								<span class="info-box-number">{!! $quoteCount !!}</span>
								<!-- The progress section is optional -->
								<div class="progress">
									<div class="progress-bar" style="width: 33%"></div>
								</div>
								<span class="progress-description">
									33% Increase in 30 Days
								</span>
							</div><!-- /.info-box-content -->
						</div><!-- /.info-box -->
					</div>
				</div>
				
				<br />
				
    		</div>
		</div>
    </section>    
    <p></p>
@endsection
