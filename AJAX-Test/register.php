<?php include ('process.php'); ?>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">

	<!-- Bootstrap Library -->
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">


</head>

<body>
	<div class="container">
		<form id="register_form">
			<h1>Sign Up Here:</h1>
			<div id="error_msg"></div>
			<div class="form-group-lg">
				<input type="text" class="form-control input-lg" name="teamname" placeholder="Team Name" id="teamname">
				<span></span>
			</div>
			<div class="form-group-lg">
				<input type="email" class="form-control input-lg" name="email" placeholder="Email" id="email">
				<span></span>
			</div>
			<div class="form-group-lg">
				<input type="text" class="form-control input-lg" name="player1" placeholder="Player 1 name" id="player1">
				<span></span>
			</div>
			<div class="form-group-lg">
				<input type="text" class="form-control input-lg" name="pass1" placeholder="Player 1 IC/Passport Number" id="pass1">
				<span></span>
			</div>
			<div class="form-group-lg">
				<input type="text" class="form-control input-lg" name="phone1" placeholder="Player 1 Phone Number" id="phone1">
				<span></span>
			</div>
			<div class="form-group-lg">
				<input type="text" class="form-control input-lg" name="player2" placeholder="Player 2 Name" id="player2">
				<span></span>
			</div>
			<div class="form-group-lg">
				<input type="text" class="form-control input-lg" name="pass2" placeholder="Player 2 IC/Passport Number" id="pass2">
				<span></span>
			</div>
			<div class="form-group-lg">
				<input type="text" class="form-control input-lg" name="phone2" placeholder="Player 2 Phone Number" id="phone2">
				<span></span>
			</div>
			<div class="checkbox ">
				<label>
					<input id="agree" name="check" type="checkbox" value="1">I agree to the
					<a href="t&c.html">Terms and Conditions</a>
				</label>
			</div>
			<div class="form-group-lg">
				<button class="btn btn-primary btn-lg btn-block" type="button" id="reg_btn">Register</button>
			</div>
		</form>
	</div>

</body>

</html>
<!-- scripts -->
<script src="jquery-3.2.1.min.js"></script>
<script src="script.js"></script>
<script src="https://use.fontawesome.com/939e9dd52c.js"></script>