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

    $sqlcheck = "SELECT * FROM team";
    $result = mysqli_query($conn, $sqlcheck);

    // if(mysqli_num_rows($result)<=0) {
    //     echo "no results";
    // }
    // else 
    // {
        if($rows = mysqli_fetch_array($result)) {
            if($rows['teamName'] == $teamname) {
                echo "<script>alert('Team name already registered');";
                die("window.history.go(-1);</script>");  
            }
                elseif($rows['email'] == $email) {
                    echo "<script>alert('Email already registered');";
                    die("window.history.go(-1);</script>"); 
                }
                    elseif($rows['player1'] == $player1) {
                        echo "<script>alert('Player name already registered');";
                        die("window.history.go(-1);</script>"); 
                    }
                        elseif($rows['pass1'] == $passnum1) {
                            echo "<script>alert('IC /Passport number already registered');";
                            die("window.history.go(-1);</script>"); 
                        }
                            elseif($rows['phone1'] == $phonenum1) {
                                echo "<script>alert('Phone number already registered');";
                                die("window.history.go(-1);</script>"); 
                            }
                                elseif($rows['player2'] == $player2) {
                                    echo "<script>alert('Player name already registered');";
                                    die("window.history.go(-1);</script>"); 
                                }
                                    elseif($rows['pass2'] == $passnum2) {
                                        echo "<script>alert('IC /Passport number already registered');";
                                        die("window.history.go(-1);</script>"); 
                                    }
                                        elseif($rows['phone2'] == $phonenum2) {
                                            echo "<script>alert('Phone number already registered');";
                                            die("window.history.go(-1);</script>"); 
                                        }
        }
        
    // }

    if ($teamname == '') {
        echo "<script>alert('Team name is not inserted!');";
        die("window.history.go(-1);</script>");  
    }

        elseif ($player1 == '') {
            echo "<script>alert('Player 1 name is not inserted!');";
            die("window.history.go(-1);</script>");   
          }

            elseif (!is_numeric($passnum1)) {
                echo "<script>alert('Player 1 passport is not a number');";
                die("window.history.go(-1);</script>");  
            }

                elseif (!is_numeric($phonenum1)) {
                    echo "<script>alert('Player 1 phone number is not a number');";
                    die("window.history.go(-1);</script>");  
                }

                elseif ($player2 == '') {
                    echo "<script>alert('Player 2 name is not inserted!');";
                    die("window.history.go(-1);</script>");   
                  }
        
                    elseif (!is_numeric($passnum2)) {
                        echo "<script>alert('Player 2 passport is not a number');";
                        die("window.history.go(-1);</script>");  
                    }
        
                        elseif (!is_numeric($phonenum2)) {
                            echo "<script>alert('Player 2 phone number is not a number');";
                            die("window.history.go(-1);</script>");  
                        }

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
?>