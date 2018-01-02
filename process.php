<?php 
	$db = mysqli_connect('boleh.tv', 'boleh', 'TWSB2018', 'boleh_mines2017');


	$sqlcheck = "SELECT * FROM team";
	$result_check = mysqli_query($db, $sqlcheck);

	if (mysqli_num_rows($result_check)>=61) {
		echo "<script>alert('Registration closed');";
        echo "window.location.href='./index.html';</script>";
	}

	if (isset($_POST['teamname_check'])) {
		$teamname = $_POST['teamname'];

		$sql = "SELECT * FROM team WHERE teamName='$teamname'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}

	if (isset($_POST['email_check'])) {
		$email = $_POST['email'];

		$sql = "SELECT * FROM team WHERE email='$email'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}

	if (isset($_POST['player1_check'])) {
		$player1 = $_POST['player1'];

		$sql = "SELECT * FROM team WHERE player1='$player1'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}

	if (isset($_POST['pass1_check'])) {
		$pass1 = $_POST['pass1'];

		$sql = "SELECT * FROM team WHERE pass1='$pass1'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}

	if (isset($_POST['phone1_check'])) {
		$phone1 = $_POST['phone1'];

		$sql = "SELECT * FROM team WHERE phone1='$phone1'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}

	if (isset($_POST['player2_check'])) {
		$player2 = $_POST['player2'];

		$sql = "SELECT * FROM team WHERE player2='$player2'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}

	if (isset($_POST['pass2_check'])) {
		$pass2 = $_POST['pass2'];

		$sql = "SELECT * FROM team WHERE pass2='$pass2'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}

	if (isset($_POST['phone2_check'])) {
		$phone2 = $_POST['phone2'];

		$sql = "SELECT * FROM team WHERE phone2='$phone2'";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) > 0) {
			echo "taken";	
		}else{
			echo 'not_taken';
		}
		exit();
	}

	if (isset($_POST['submit'])) {
		$teamname = $_POST['teamname'];
		$email = $_POST['email'];
		$player1 = $_POST['player1'];
		$pass1 = $_POST['pass1'];
		$phone1 = $_POST['phone1'];
		$player2 = $_POST['player2'];
		$pass2 = $_POST['pass2'];
		$phone2 = $_POST['phone2'];

		$sql = "SELECT * FROM team";
		$results = mysqli_query($db, $sql);

		if (mysqli_num_rows($results) >= 0) {
		
			$query = "INSERT INTO team (teamName, email, player1, pass1, phone1, player2, pass2, phone2) 
					VALUES ('$teamname', '$email', '$player1', '$pass1', '$phone1', '$player2', '$pass1', '$phone2')";
			$results = mysqli_query($db, $query);
			echo 'saved';
			exit();
		}
	}

?>
