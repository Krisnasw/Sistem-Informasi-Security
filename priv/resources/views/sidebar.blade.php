<div class="sidebar">
			<div class="sidebar-content">

				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="http://placehold.it/300">
						@if (Auth::check())
						<div class="user-info">
							{{ Auth::user()->name }}<span>{{ Auth::user()->role }}</span>
						</div>
						@endif
					</a>
					<div class="popup dropdown-menu dropdown-menu-right">
					    <div class="thumbnail">
					    	<div class="thumb">
								<img src="http://placehold.it/300">
								<div class="thumb-options">
									<span>
										<a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a>
										<a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a>
									</span>
								</div>
						    </div>
					    
					    	<div class="caption text-center">
					    		<h6>Madison Gartner <small>Front end developer</small></h6>
					    	</div>
				    	</div>

				    	<ul class="list-group">
							<li class="list-group-item"><i class="icon-pencil3 text-muted"></i> My posts <span class="label label-success">289</span></li>
							<li class="list-group-item"><i class="icon-people text-muted"></i> Users online <span class="label label-danger">892</span></li>
							<li class="list-group-item"><i class="icon-stats2 text-muted"></i> Reports <span class="label label-primary">92</span></li>
							<li class="list-group-item"><i class="icon-stack text-muted"></i> Balance <h5 class="pull-right text-danger">$45.389</h5></li>
						</ul>
					</div>
				</div>
				<!-- /user dropdown -->


				<!-- Main navigation -->
				<ul class="navigation">
					<li><a href="{{ url('/usr') }}"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li>
						<a href="#"><span>Laporan</span> <i class="icon-paragraph-justify2"></i></a>
						<ul>
							<li><a href="#">Data Laporan</a></li>
							<li><a href="#">Cetak Laporan</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Absensi</span> <i class="icon-clock"></i></a>
						<ul>
							<li><a href="#">Data Absensi</a></li>
						</ul>
					</li>
					<li>
						<a href="#"><span>Karyawan</span> <i class="icon-user"></i></a>
						<ul>
							<li><a href="#">Data User</a></li>
						</ul>
					</li>
				</ul>
				<!-- /main navigation -->
				
			</div>
		</div>