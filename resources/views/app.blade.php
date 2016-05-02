<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Healthcare Data</title>

	

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.css"/>
 
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.js"></script>
	<!-- bootstrap widget theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">

			<nav class="navbar navbar-default">
					<div class="navbar-header">
						<a class="navbar-brand" href="/">Interactive Public Healthcare Data</a>
					</div>
			</nav>
            <ul class="nav nav-tabs" id="navbar">
			  <li class="active"><a data-target="#cadiac" data-toggle="tab">Cardiac Surgery by Surgeon</a></li>
			</ul>

			<!--<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-primary active">
			    	<a href="/" type="radio" name="options" id="option1" autocomplete="off" checked style="color:white">Cardiac Surgery by Surgeon</a>
			    </label>
			    <label class="btn btn-primary">
			    	<a href="/" type="radio" name="options" id="option2" autocomplete="off" style="color:white">Hospital Inpatient Discharges by Facility</a>
			    </label>
			</div>-->
		</div>
	</div>
</div>
<br><br>

	@yield('content')

</body>
</html>