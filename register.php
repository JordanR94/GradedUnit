<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--^^^ setting up PHP session -->
<!-- setting the document type to html and its language to english-->
<!DOCTYPE html>
<html lang="en">
<!--setting up head tag with css stylesheet-->
<head>
<link rel="stylesheet" href="css/main.css">
<!--includes form css -->
<?php 
include("includes/login-reg-css-link.php");
?>
</head>
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
				<p>Already have an account? <a href="login.php">Login Now!</a></p>
                <br>
                <p><a href="index.php">Return to Website</a></p>
			</div>
		</div>
	</div>
	<!-- //main -->
</body>
</html>