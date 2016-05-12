<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Intive Studio | Admin Dashboard</title>

@include('style')

</head>

<body>
@include('header')

	<!-- Page container -->
 	<div class="page-container">

		<!-- Sidebar -->
		@include('admin.sidebar')
		<!-- /sidebar -->


		<!-- Page content -->
	 	<div class="page-content">


			<!-- Page header -->
			<div class="page-header">
				@if(Auth::check())
				<div class="page-title">
					<h3>Dashboard <small>Selamat Datang di Sistem Informasi Security , <b> {{ Auth::user()->nama }}</b></small></h3>
				</div>
				@endif

				<div id="reportrange" class="range">
					<div class="visible-xs header-element-toggle">
						<a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
					</div>
					<div class="date-range"></div>
					<span class="label label-danger">9</span>
				</div>
			</div>
			<!-- /page header -->


			<!-- Breadcrumbs line -->
			<div class="breadcrumb-line">
				<ul class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li class="active">Dashboard</li>
				</ul>

				<div class="visible-xs breadcrumb-toggle">
					<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
				</div>

				<ul class="breadcrumb-buttons collapse">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>
						<div class="popup dropdown-menu dropdown-menu-right">
							<div class="popup-header">
								<a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>
								<span>Quick search</span>
								<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
							</div>
							<form action="#" class="breadcrumb-search">
								<input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
								<div class="row">
									<div class="col-xs-6">
										<label class="radio">
											<input type="radio" name="search-option" class="styled" checked="checked">
											Everywhere
										</label>
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Invoices
										</label>
									</div>

									<div class="col-xs-6">
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Users
										</label>
										<label class="radio">
											<input type="radio" name="search-option" class="styled">
											Orders
										</label>
									</div>
								</div>

								<input type="submit" class="btn btn-block btn-success" value="Search">
							</form>
						</div>
					</li>
				</ul>
			</div>
			<!-- /breadcrumbs line -->


			<!-- Info blocks -->
			<ul class="info-blocks">
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Add new post</a>
						<small>post management</small>
					</div>
					<a href="#"><i class="icon-pencil"></i></a>
				</li>
				<li class="bg-success">
					<div class="top-info">
						<a href="#">Site parameters</a>
						<small>layout settings</small>
					</div>
					<a href="#"><i class="icon-cogs"></i></a>
				</li>
				<li class="bg-danger">
					<div class="top-info">
						<a href="#">Site statistics</a>
						<small>visits, users, orders stats</small>
					</div>
					<a href="#"><i class="icon-stats2"></i></a>
				</li>
				<li class="bg-info">
					<div class="top-info">
						<a href="#">My messages</a>
						<small>messages history</small>
					</div>
					<a href="#"><i class="icon-bubbles3"></i></a>
				</li>
				<li class="bg-warning">
					<div class="top-info">
						<a href="#">Orders history</a>
						<small>purchases statistics</small>
					</div>
					<a href="#"><i class="icon-cart2"></i></a>
				</li>
				<li class="bg-primary">
					<div class="top-info">
						<a href="#">Invoices stats</a>
						<small>invoices archive</small>
					</div>
					<a href="#"><i class="icon-coin"></i></a>
				</li>
			</ul>
			<!-- /info blocks -->

            <!-- Newest team members -->
            <h6><i class="icon-people"></i>Daftar User Baru</h6>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="block">
						<div class="thumbnail">
							<a href="#" class="thumb-zoom lightbox" title="Eugene A. Kopyov">
								<img src="http://placehold.it/300">
							</a>

					    	<div class="caption text-center">
					    		<h6>Eugene A. Kopyov <small>UX designer</small></h6>
				    			<div class="icons-group">
			                    	<a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a>
			                    	<a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a>
			                    	<a href="#" title="Github" class="tip"><i class="icon-github3"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="block">
				    	<div class="thumbnail">
							<a href="#" class="thumb-zoom lightbox" title="Sophia R. McJamer">
						    	<img src="http://placehold.it/300">
					    	</a>

					    	<div class="caption text-center">
					    		<h6>Sophia R. McJamer <small>Media designer</small></h6>
				    			<div class="icons-group">
			                    	<a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a>
			                    	<a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a>
			                    	<a href="#" title="Github" class="tip"><i class="icon-github3"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="block">
				    	<div class="thumbnail">
							<a href="#" class="thumb-zoom lightbox" title="Noah Kennedy">
						    	<img src="http://placehold.it/300">
					    	</a>

					    	<div class="caption text-center">
					    		<h6>Noah Kennedy <small>CEO &amp; founder</small></h6>
				    			<div class="icons-group">
			                    	<a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a>
			                    	<a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a>
			                    	<a href="#" title="Github" class="tip"><i class="icon-github3"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="block">
				    	<div class="thumbnail">
							<a href="#" class="thumb-zoom lightbox" title="Will DeBrandon">
						    	<img src="http://placehold.it/300">
					    	</a>

					    	<div class="caption text-center">
					    		<h6>Will DeBrandon <small>Print designer</small></h6>
				    			<div class="icons-group">
			                    	<a href="#" title="Google Drive" class="tip"><i class="icon-google-drive"></i></a>
			                    	<a href="#" title="Twitter" class="tip"><i class="icon-twitter"></i></a>
			                    	<a href="#" title="Github" class="tip"><i class="icon-github3"></i></a>
		                    	</div>
					    	</div>
				    	</div>
					</div>
				</div>
			</div>
            <!-- /newest team members -->

	@include('footer')
	@include('sweet::alert')
	@if (Session::has('sweet_alert.alert'))
		<script>
			swal({!! Session::get('sweet_alert.alert') !!});
		</script>
	@endif

		</div>
		<!-- /page content -->


	</div>
	<!-- /page container -->

</body>
</html>