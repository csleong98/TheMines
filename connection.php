<?php
	$conn = mysqli_connect("boleh.tv","boleh","TWSB2018","boleh_mines2017");
	// $conn = mysqli_connect("localhost","root","","themines");
	
	if(mysqli_connect_errno())
	{
		die("<script>alert('Error in connection!');window.history.go(-1);</script>");
	}
	echo "<script>alert('Connection Successfully!');</script>";
?>