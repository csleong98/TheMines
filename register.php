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
		<form id="register_form" name="register_form">
			<h1>Sign Up Here:</h1>
			<div id="error_msg"></div>
			<div class="form-group-lg">
				<input type="text" class="form-control input-lg" name="teamname" placeholder="Team Name *(Max 10 characters)" id="teamname">
				<span></span>
			</div>
			<div class="form-group-lg">
				<input type="email" class="form-control input-lg" name="email" placeholder="Email *(optional)" id="email">
				<span id="no_span"></span>
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
			<div class="tc form-control">

				<h2 class="col-md-12 col-sm-12">Terms & Conditions</h2>
				<ol class="col-md-12 col-sm-12">
					<li class="text-justify">The contest is open to public, with exception of employees of The Mines, its advertising & promotions agencies, co-organizers,
						tenants of The Mines, and members of their immediate families.</li>
					<br>
					<li class="text-justify">Contestants are required to participate as a team of 2 players in this “It’s Raining Presents” game.</li>
					<br>
					<li class="text-justify">Contestants are required to scan the provided QR code that will link to the “Raining Presents” webpage and register
						2 players’ details using their own Internet connection. Internet connection will not be provided throughout this contest.</li>
					<br>
					<li class="text-justify">Contestants are required to ensure that their own network connection is stable throughout the registration. The Organizer
						shall not be liable for any result discrepancies caused by unstable Internet connection.</li>
					<br>
					<li class="text-justify">Only the first 100 teams of players who queued up and successfully registered in “Raining Presents” webpage will be
						able to join the game at The Mines Level 3, Centre Court.</li>
					<br>
					<li class="text-justify">The prizes are worth RM30,000.00 in total which will be won by top 30 scorers with the highest marks with the least
						life deducted.</li>
					<br>
					<li class="text-justify">Each team is entitled to win one (1) set of prizes only. Prizes not redeemed on the same day will be forfeited.</li>
					<br>
					<li class="text-justify">All prizes are non-transferable and non-exchangeable for cash and the Organizer shall not be liable for any damages
						on the prize.</li>
					<br>
					<li class="text-justify">The Organizer’s decision is final and no correspondence shall be entertained.</li>
					<br>
					<li class="text-justify">The Organizer and its agencies reserve the rights to use the participants’ name and/or photographs for the purpose of
						publicity, advertising and /or trade without prior compensation or notice.</li>
					<br>
					<li class="text-justify">By participating in this contest, participants agree to be bound by the Terms & Conditions and all decision of The Organizer.
						The Organizer reserves the rights to cancel, terminate, change or amend this contest and its Terms & Conditions without
						prior notice.</li>
				</ol>
				<br>
				<h2 class="col-md-12 col-sm-12">PDPA</h2>
				<p class="col-md-12 col-sm-12 text-justify">I hereby agree to the terms and conditions of the game and CMA Group’s (namely, Mtrustee Berhad as Trustee of CapitaLand
					Malaysia Mall Trust and its related entities) as well as their agents processing of my personal data in accordance with
					the Personal Data Protection Notice. I further agree to CMA Group (as defined in the Personal Data Protection Notice)
					processing my personal data, for the purpose of contacting me via mail, email, SMS, telephone and other means of communication
					(including via all and any of my telephone numbers which CMA Group may have in our records from time to time).</p>
			</div>
			<div class="checkbox">
				<label>
					<input id="agree" name="check" type="checkbox" value="1">I have agreed to the Terms & Conditions and PDPA
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