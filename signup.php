<!DOCTYPE html>
<html>

<head>

    <title>Sign Up</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://use.fontawesome.com/939e9dd52c.js"></script>
   

</head>

<body>

    <div class="mainDiv">
        <form id="signup" action="submit.php" method="POST">
            <h2>Sign Up Here:</h2>
            <div class="form-group">
                <input type="name" class="form-control" id="teamName" name="teamName" placeholder="Team Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="name" class="form-control" id="name1" name="name1" placeholder="Player 1 Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="passport1" name="pass1" placeholder="Player 1 Passport">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="phone1" name="phone1" placeholder="Player 1 Phone Number">
            </div>
            <div class="form-group">
                <input type="name" class="form-control" id="name2" name="name2" placeholder="Player 2 Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="passport2" name="pass2" placeholder="Player 2 Passport">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="phone2" name="phone2" placeholder="Player 2 Phone Number">
            </div>
            <div class="checkbox">
                <label>
                    <input id="agree" name="check" type="checkbox" value="1">I agree to the <a href="t&c.html" target="_blank">Terms and Conditions</a>
                </label>
            </div>
            <button type="submit" id="submitBtn">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </button>

        </form>
        <!-- 
		<h1 align="left">Sign Up Here:</h1>
		<textarea id="teamName" placeholder="Team Name"></textarea>
		<textarea id="email" placeholder="Main Email"></textarea>
		<textarea id="name1" placeholder="Player 1 Full Name"></textarea>
		<textarea id="passport1" placeholder="Player 1 NRIC/Passport"></textarea>
		<textarea id="phone1" placeholder="Player 1 Phone No"></textarea>
		<textarea id="name2" placeholder="Player 2 Full Name"></textarea>
		<textarea id="passport2" placeholder="Player 2 NRIC/Passport"></textarea>
        <textarea id="phone2" placeholder="Player 2 Phone No"></textarea>
        <label id="checkbox"><input  type="checkbox"/>I agree to the <a href="t&c.html" target="_blank">Terms and Conditions</a></label> 
        <button id="submitBtn" onCLick="submitClick()"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>		
     -->
    </div>
    <!-- <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyDWQUh1HRCEfISKSSmx9EWhPH9PswMHtPo",
            authDomain: "kinectapp-9bf58.firebaseapp.com",
            databaseURL: "https://kinectapp-9bf58.firebaseio.com",
            projectId: "kinectapp-9bf58",
            storageBucket: "kinectapp-9bf58.appspot.com",
            messagingSenderId: "812526179555"
        };
        firebase.initializeApp(config);
    </script>

    <script src="signup.js"></script> --> -->
    
</body>

</html>