<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Sistem Informasi Security | Login</title>

@include('style')

</head>

<body class="full-width page-condensed">
    
	<!-- Login wrapper -->
	<div class="login-wrapper">
    	{{ Form::open(array('action' => 'AdminController@postSignIn', 'method' => 'post')) }}
			<div class="popup-header">
				<a data-toggle="modal" role="button" href="#form_modal" class="pull-left"><i class="icon-user-plus"></i></a>
				<span class="text-semibold">User Login</span>
				<div class="btn-group pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                    <ul class="dropdown-menu icons-right dropdown-menu-right">
						<li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
						<li><a data-toggle="modal" role="button" href="#form_bug"><i class="icon-support"></i> Bug Reports</a></li>
                    </ul>
				</div>
			</div>
			<div class="well">
				<div class="form-group has-feedback">
					<label>Username</label>
					<input type="text" class="form-control" placeholder="Username" name="uname">
					<i class="icon-users form-control-feedback"></i>
				</div>

				<div class="form-group has-feedback">
					<label>Password</label>
					<input type="password" class="form-control" placeholder="Password" name="pasw">
					<i class="icon-lock form-control-feedback"></i>
				</div>

				<div class="row form-actions">
					<div class="col-xs-6">
						<div class="checkbox checkbox-success">
						<label>
							<input type="checkbox" class="styled">
							Remember me
						</label>
						</div>
					</div>

					<div class="col-xs-6">
						<button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Sign in</button>
					</div>
				</div>
			</div>
    	{{ Form::close() }}
	</div>  
	<!-- /login wrapper -->


    <!-- Footer -->
    @include('footer')
    @include('sweet::alert')
	@if (Session::has('sweet_alert.alert'))
    <script>
        swal({!! Session::get('sweet_alert.alert') !!});
    </script>
    @endif
    <!-- /footer -->
    
    <!-- Form modal -->
			<div id="form_modal" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title"><i class="icon-paragraph-justify2"></i> Daftar Karyawan Baru</h4>
						</div>

						<!-- Form inside modal -->
						<form action="#" role="form">

							<div class="modal-body with-padding">
								<div class="block-inner text-danger">
									<h6 class="heading-hr">Isikan Data Diri Anda Dengan Benar </h6>
								</div>

								<div class="form-group">
									<div class="row">
									<div class="col-sm-6">
										<label>Nama Lengkap</label>
										<input type="text" placeholder="Sutejo bin Sutarjo" class="form-control">
									</div>

									<div class="col-sm-6">
										<label class="control-label">Username</label>
										<input type="text" placeholder="OutAttacker" class="form-control">
									</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label>Alamat</label>
											<input type="text" placeholder="Ring street 12" class="form-control">
										</div>

										<div class="col-sm-6">
											<label>Password</label>
											<input type="password" placeholder="*********" class="form-control">
										</div>
									</div>
								</div>
                                
                                <div class="form-group">
							        <div class="row">
                                        <div class="col-sm-12">
                                            <label>Upload Foto:</label>
                                            <input type="file" class="styled form-control" id="fotoxxx" name="foto">
                                            <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                    </div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-4">
											<label>Kota</label>
											<input type="text" placeholder="Munich" class="form-control">
										</div>

										<div class="col-sm-4">
											<label>Provinsi</label>
											<input type="text" placeholder="Bayern" class="form-control">
										</div>

										<div class="col-sm-4">
											<label>Kode Pos</label>
											<input type="text" placeholder="1031" class="form-control">
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label>Email</label>
											<input type="text" placeholder="cs@mail.pft" class="form-control">
										</div>

										<div class="col-sm-6">
											<label>No. Handphone</label>
											<input type="text" placeholder="+62-12-3456-7890" data-mask="+99-99-9999-9999" class="form-control">
										</div>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Submit form</button>
							</div>

						</form>
					</div>
				</div>
			</div>
			<!-- /form modal -->
            
            <!-- Form bug -->
			<div id="form_bug" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title"><i class="icon-paragraph-justify2"></i> Bug Reports</h4>
						</div>

						<!-- Form inside modal -->
						<form action="#" role="form">

							<div class="modal-body with-padding">
								<div class="block-inner text-danger">
									<h6 class="heading-hr">Laporkan Bug Website ini Demi Kenyamanan Anda </h6>
								</div>

								<div class="form-group">
									<div class="row">
									<div class="col-sm-6">
										<label>Nama Lengkap</label>
										<input type="text" placeholder="Sutejo bin Sutarjo" class="form-control">
									</div>

										<div class="col-sm-6">
											<label>Email</label>
											<input type="text" placeholder="cs@mail.pft" class="form-control">
										</div>
                                                                      
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-md-6">
                                            <label>Operating system :</label>
                                            <select data-placeholder="OS yang anda gunakan" class="select-full" tabindex="2">
                                                <option value=""></option> 
                                                <option value="win7">Windows 7</option> 
                                                <option value="win8">Windows 8</option> 
                                                <option value="macos">Mac OS</option> 
                                                <option value="chromeos">Chrome OS</option> 
                                            </select>
                                        </div>

										<div class="col-md-6">
                                            <label>Browser :</label>
                                            <select data-placeholder="Browser yang anda gunakan" class="select-full" tabindex="2">
                                                <option value=""></option> 
                                                <option value="chrome">Chrome</option> 
                                                <option value="firefox">Firefox</option> 
                                                <option value="opera">Opera</option> 
                                                <option value="safari">Safari</option> 
                                            </select>
                                        </div>
									</div>
								</div>
                                
                                <div class="form-group">
							        <div class="row">
                                        <div class="col-sm-6">
                                            <label>Upload Screenshot:</label>
                                            <input type="file" class="styled form-control" id="fotoxxx" name="foto">
                                            <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label>Issue type:</label>
                                            <select data-placeholder="Choose issue type..." class="select-full" tabindex="2">
                                                <option value="functionality">Functionality</option> 
                                                <option value="content">Content</option> 
                                                <option value="errors">Generic errors</option> 
                                                <option value="other">Other</option> 
                                            </select>
                                        </div>
                                
                                    </div>
								</div>
                                
                                <div class="form-group">
                                    <label>Additional information:</label>
                                    <textarea rows="5" cols="5" placeholder="If you want to add any info, do it here." class="elastic form-control"></textarea>
                                </div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Submit form</button>
							</div>

						</form>
					</div>
				</div>
			</div>
			<!-- /form bug -->


</body>
</html>