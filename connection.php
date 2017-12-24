<?php
	$conn = mysqli_connect("103.6.196.51","boleh","TWSB2018", "boleh_mines2017", "", "3306");
	if(mysqli_connect_errno())
	{
		die("<script>alert('Error in connection!');window.history.go(-1);</script>");
	}
	echo "<script>alert('Connection Successfully!');</script>";
?>