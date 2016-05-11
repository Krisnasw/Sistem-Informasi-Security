<!DOCTYPE html>
<html>
    <head>
        <title>Sistem Informasi Security</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        @include('style')

        <style>

            .title {
                font-size: 96px;
                font-weight: 100;
                font-family: 'Lato';
                margin-top: 250px;
                text-align: center;
                vertical-align: middle;
                width: 100%;
                height: 100%;
            }
            
        </style>
        
    </head>
    <body>
        <div class="container">
            <div class="content">
                <a href="{{ url('/login') }}"><div class="title">Sistem Informasi Security</div></a>    
            </div>
            
        </div>
        
		@include('sweet::alert')
		@if (Session::has('sweet_alert.alert'))
		<script>
			swal({!! Session::get('sweet_alert.alert') !!});
		</script>
		@endif

    </body>
</html>
