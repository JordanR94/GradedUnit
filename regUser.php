<?php 

//connects to database and checks for errors 
include( 'includes/errors.php' );
include( 'includes/dbconx.php' ); 

//sets up variables from the form inputs
$firstname = mysqli_real_escape_string( $conn, $_POST[ 'firstname' ] );
$lastname = mysqli_real_escape_string( $conn, $_POST[ 'lastname' ] );
$email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
$username = mysqli_real_escape_string( $conn, $_POST[ 'username' ] );
$password = mysqli_real_escape_string( $conn, $_POST[ 'password' ] );
$hashpass = md5($password);

//selects all the usernames where the user has the same username
$sql = "SELECT * FROM user_accounts WHERE username = '$username'";
$result = $conn->query( $sql );

if ( $result->num_rows > 0) {
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <!--setting up head tag with css stylesheet-->
    <head>
    <link rel="stylesheet" href="css/main.css">
    <!-- sets title of page -->
<title>National Museums Scotland</title>
<!--sets up page for responsive viewing -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- sets language -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<link rel="stylesheet" href="css/login.css">
</head>
    <!--includes form css -->
<!--sets body background image to whole screen -->
<body class="login-register" style="background-image: url(img/home/natural-history-museum-cover.jpg);">
	<!-- main -->
	<div class="main-w3layouts wrapper">

		<div class="main-agileinfo">
			<div class="agileits-top log-reg-forms">
				<!--form input to register-->
                <form action="regUser.php" method="POST" id="register">
                <h1 class="form-heading">REGISTER</h1>
				<br>
				<br>
					<input class="text input-fields" type="text" name="firstname" placeholder="Firstname" required>
					<br>
					<input class="text input-fields" type="text" name="lastname" placeholder="Surname" required>
					<input class="text email input-fields" type="email" name="email" placeholder="Email" required>
					<input class="text input-fields" type="text" name="username" placeholder="Username" required>
					<br>
					<input class="text input-fields" type="password" name="password" placeholder="Password" required>

					<input type="submit" class="log-reg-btns" value="SIGNUP">
                </form>
                <p>Username already taken</p>
                <br>
				<p>Already have an account? <a href="login.php">Login Now!</a></p>
                <br>
                <p><a href="index.php">Return to Website</a></p>
			</div>
		</div>
	</div>
	<!-- //main -->
</body>
</html>';

   } 

   else {
    $sql = "INSERT INTO user_accounts (type_of_user, firstname, lastname, email, username, password) VALUES ('user', '$firstname', '$lastname', '$email', '$username', '$hashpass' )"; 
    $result = $conn->query( $sql );
    header ("location: login.php");
   // you can send the user to another page rather than display an error
   }
   //close the database connection
   $conn->close();




?>