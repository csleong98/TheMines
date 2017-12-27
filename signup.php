<?php include 'submit.php';?>
<html>

<head>

    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://use.fontawesome.com/939e9dd52c.js"></script>


</head>

<body>

    <div class="container">
        <form id="signup" action="submit.php" method="POST">
            <h1>Sign Up Here:</h1>
            <div class="form-group-lg">
                <input type="name" class="form-control input-lg" id="teamName" name="teamName" placeholder="Team Name" required>
                <span></span>                
            </div>
            <span></span>
            <div class="form-group-lg">
                <input type="email" class="form-control input-lg" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group-lg">
                <input type="name" class="form-control input-lg" id="name1" name="name1" placeholder="Player 1 Name" required>
            </div>
            <div class="form-group-lg">
                <input type="text" class="form-control input-lg" id="passport1" name="pass1" placeholder="Player 1 IC/Passport" required>
            </div>
            <div class="form-group-lg">
                <input type="text" class="form-control input-lg" id="phone1" name="phone1" placeholder="Player 1 Phone Number" required>
            </div>
            <div class="form-group-lg">
                <input type="name" class="form-control input-lg" id="name2" name="name2" placeholder="Player 2 Name" required>
            </div>
            <div class="form-group-lg">
                <input type="text" class="form-control input-lg" id="passport2" name="pass2" placeholder="Player 2 IC/Passport" required>
            </div>
            <div class="form-group-lg">
                <input type="text" class="form-control input-lg" id="phone2" name="phone2" placeholder="Player 2 Phone Number" required>
            </div>
            <div class="checkbox ">
                <label>
                    <input id="agree" name="check" type="checkbox" value="1">I agree to the
                    <a href="t&c.html">Terms and Conditions</a>
                </label>
            </div>
            <div class="form-group-lg">
                <button class="btn btn-primary btn-lg btn-block" type="submit">
                    Sign Up
                </button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="signup.js"></script>
</body>

</html>