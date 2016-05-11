
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>404 Not Found</title>

@include('style')

</head>

<body class="full-width page-condensed">

	<!-- Error wrapper -->
	<div class="error-wrapper text-center">
	    <h1>404</h1>
        <h6> Oops, an error has occurred. Page not found! - Administrator</h6>

        <!-- Error content -->
        <div class="error-content">
	    	<form class="block-inner" action="#">
	    		<div class="input-group">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-primary" type="button">Search</button>
					</span>
				</div>
	    	</form>

	        <div class="row">
		        <div class="col-md-6">
		            <a href="{{ url('/login') }}" class="btn btn-danger btn-block">Back to Login</a>
	            </div>
	            <div class="col-md-6">
		            <a href="{{ url('/') }}" class="btn btn-success btn-block">Back to Main Page</a>
	            </div>
	        </div>
        </div>
        <!-- /error content -->
        
	</div>  
	<!-- /error wrapper -->


    <!-- Footer -->
    @include('footer')
    <!-- /footer -->


</body>
</html>