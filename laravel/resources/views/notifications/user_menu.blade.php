<li class="dropdown user user-menu">
                			<!-- Menu Toggle Button -->
                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  				<!-- The user image in the navbar-->
                  				<img src="{{ asset('/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                  				<!-- hidden-xs hides the username on small devices so only the image appears. -->
                  				@if (Auth::check())
											<span class="hidden-xs">{{ Auth::user()->username }}</span>
                  				@endif
                  				<span class="hidden-xs">Samaras</span>
                			</a>
                			<ul class="dropdown-menu">
                  				<!-- The user image in the menu -->
                  				<li class="user-header">
                    			<img src="{{ asset('/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
                    			<p>
                      				Samuel Komfi
                      				@if (Auth::check())
												{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
											@endif
                      				<small>Member since Nov. 2012</small>
                    			</p>
                  		</li>
                  		<!-- Menu Body -->
                  		<li class="user-body">
                    		<div class="col-xs-6 text-center">
                      			<a href="#">Clients</a>
                    		</div>
                    		<div class="col-xs-6 text-center">
                      			<a href="#">Quotes</a>
                    		</div>
                  		</li>
                  		<!-- Menu Footer-->
                  		<li class="user-footer">
                    		<div class="pull-left">
                      			<a href="{{ url('/user/profile/{{ Auth::id() }}') }}" class="btn btn-default btn-flat">Profile</a>
                    		</div>
                    		<div class="pull-right">
                      			<a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    		</div>
                  		</li>