<?php 

    include('connection.php');

    $teamname = mysqli_real_escape_string($conn, $_POST['teamName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $player1 = mysqli_real_escape_string($conn, $_POST['name1']);
    $passnum1 = mysqli_real_escape_string($conn, $_POST['pass1']);
    $phonenum1 = mysqli_real_escape_string($conn, $_POST['phone1']);
    $player2 = mysqli_real_escape_string($conn, $_POST['name2']);
    $passnum2 = mysqli_real_escape_string($conn, $_POST['pass2']);
    $phonenum2 = mysqli_real_escape_string($conn, $_POST['phone2']);


    $sql = "INSERT INTO rooms(teamName, email, player1, pass1, phone1, player2, pass2, phone2) ".
    "values ('$teamname','$email','$player1','$passnum1','$phonenum1','$player2','$passnum2','$phonenum2');";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn)<=0) {
        echo "<script>alert('Unable to register! \\nPlease try again later.');";
        die("window.history.go(-1);</script>");
        
    }

    echo "<script>alert('Register Successfully! Please proceed to the game area.');";
    echo "window.location.href='./tutorial.html';</script>";
?>