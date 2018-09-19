<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>My_Blog</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="/css/app.css" rel="stylesheet">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

	@include ('layouts.nav') 


	@if ($flash= session('message'))

	<div class="alert alert-success" id="flash-message">
		
		{{ $flash }}


	</div>


	<script>
		
		$("#flash-message").fadeOut("1000");

	</script>

	@endif





	<div class="container">

		<div class="blog-header">
			<h1 class="blog-title">My Blog</h1>
			<p class="lead blog-description"></p>
		</div>

	</div>

	<div class="container">

		<div class="row">


			@yield ('content')

			@include ('layouts.sidebar')


		</div>


	</div>

	@include ('layouts.footer')

</body>
</html>
