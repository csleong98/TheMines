<?php 

    include 'connection.php';

    $teamname = mysqli_real_escape_string($conn, $_POST['teamName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $player1 = mysqli_real_escape_string($conn, $_POST['name1']);
    $passnum1 = mysqli_real_escape_string($conn, $_POST['pass1']);
    $phonenum1 = mysqli_real_escape_string($conn, $_POST['phone1']);
    $player2 = mysqli_real_escape_string($conn, $_POST['name2']);
    $passnum2 = mysqli_real_escape_string($conn, $_POST['pass2']);
    $phonenum2 = mysqli_real_escape_string($conn, $_POST['phone2']);

    // if ($teamname = "") {
    //     echo "<script>alert('Team name is not inserted!');";
    //     die("window.history.go(-1);</script>");  
    // }

    //     elseif ($player1 = "") {
    //         echo "<script>alert('Player 1 name is not inserted!');";
    //         die("window.history.go(-1);</script>");   
    //       }

    //         elseif (ctype_digit($passnum1)) {
    //             echo "number 1";
    //         }
    //         // else {
    //         //     echo "<script>alert('Player 1 passport is not inserted or is not a number');";
    //         //     die("window.history.go(-1);</script>");  
    //         // }

    //         elseif (ctype_digit($phonenum1)) {
    //             echo "phone 1";
    //         }
    //         // else {
    //         //     echo "<script>alert('Player 1 phone number is not inserted or is not a number');";
    //         //     die("window.history.go(-1);</script>");  
    //         // }


    //       if ($player2 = "") {
    //         echo "<script>alert('Player 2 name is not inserted!');";
    //         die("window.history.go(-1);</script>");   
    //       }
    //       else {
    //         if (is_numeric($passnum2)) {
    //             echo "number 2";
    //         }
    //         else {
    //             echo "<script>alert('Player 2 passport is not inserted or is not a number');";
    //             die("window.history.go(-1);</script>");  
    //         }

    //         if (is_numeric($phonenum2)) {
    //             echo "phone 2";
    //         }
    //         else {
    //             echo "<script>alert('Player 2 phone number is not inserted or is not a number');";
    //             die("window.history.go(-1);</script>");  
    //         }
        
    //       }

          if(isset($_POST['check']) && $_POST['check']="1")
          {
                $sql = "INSERT INTO team(teamName, email, player1, pass1, phone1, player2, pass2, phone2) ".
                "values('$teamname','$email','$player1','$passnum1','$phonenum1','$player2','$passnum2','$phonenum2');";
            
                mysqli_query($conn, $sql);
            
                if (mysqli_affected_rows($conn)<=0) {
                    echo "<script>alert('Unable to register! \\nPlease fill in all fields.');";
                    die("window.history.go(-1);</script>");
                    
                }
            
                echo "<script>alert('Register Successfully! Please proceed to the game area.');";
                echo "window.location.href='./tutorial.html';</script>";
            }

          else {
            echo "<script>alert('Terms & Conditions is not checked');";
            die("window.history.go(-1);</script>");  
          }


    

    

    

    

    // // define variables and set to empty values
    // $teamnameErr = $emailErr = $player1Err = $passnum1Err = $phonenum1Err = $player2Err = $passnum2Err = $phonenum2Err = "";
    // // $name = $email = $gender = $comment = $website = "";
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    // if (empty($_POST["teamName"])) {
    //     $teamnameErr = "Name is required";
    // } else {
    //     $teamname = test_input($_POST["teamName"]);
    // }

    // if (empty($_POST["email"])) {
    //     $emailErr = "Email is required";
    // } else {
    //     $email = test_input($_POST["email"]);
    // }

    // if (empty($_POST["player1"])) {
    //     $player1Err = "Please fill in player1's name";
    // } else {
    //     $player1 = test_input($_POST["player1"]);
    // }

    // if (empty($_POST["pass1"])) {
    //     $passnum1Err = "Please fill in player1's passport number";
    // } else {
    //     $passnum1 = test_input($_POST["pass1"]);
    // }

    // if (empty($_POST["phone1"])) {
    //     $phonenum1Err = "Please fill in phone number";
    // } else {
    //     $phonenum1 = test_input($_POST["phone1"]);
    // }

    // if (empty($_POST["player2"])) {
    //     $player2Err = "Please fill in player2's name";
    // } else {
    //     $player2 = test_input($_POST["player2"]);
    // }

    // if (empty($_POST["pass2"])) {
    //     $passnum2Err = "Please fill in player2's passport number";
    // } else {
    //     $passnum2 = test_input($_POST["pass2"]);
    // }

    // if (empty($_POST["phone2"])) {
    //     $phonenum2Err = "Please fill in phone numberr";
    // } else {
    //     $phonenum2 = test_input($_POST["phone2"]);
    // }

    // }

    // function test_input($data) {
    //     $data = trim($data);
    //     $data = stripcslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }

    // echo $teamname;
    // echo $email;
    // echo $player1;
    // echo $passnum1;
    // echo $phonenum1;
    // echo $player2;
    // echo $passnum2;
    // // echo $phonenum2;
?>