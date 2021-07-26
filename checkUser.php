<?php
session_start();
include( 'includes/errors.php' );
include( 'includes/dbconx.php' ); 

//finds username and password entered from login page and hashes password
 $username = mysqli_real_escape_string( $conn, $_POST[ 'username' ] );
 $password = mysqli_real_escape_string( $conn, $_POST[ 'password' ] );
 $hashpass = md5($password);

//query sending to the mysql database to find user
 $sql = "SELECT * FROM user_accounts WHERE username = '$username' AND password = '$hashpass' "; 

 $result = $conn->query( $sql ); 

 //determins if the user is an admin or not
  if ( $result->num_rows > 0 )
   {
      while($row = mysqli_fetch_assoc($result)) 
      {
            if($row["type_of_user"] == "admin")
            {
               $_SESSION['admin'] = $row["type_of_user"];
               header('location:admin-account.php');
            }
            else
            {
               $_SESSION['user'] = $username;
               header('location:collectors.php');
            }
         }
      }
     
      else
      {
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
       
        
         <body class="login-register" style="background-image: url(img/home/natural-history-museum-cover.jpg);">
         <!-- main -->
         <div class="main-w3layouts wrapper">
      
            <div class="main-agileinfo">
               <div class="agileits-top log-reg-forms">
                  <!--form input to login-->
                  <form action="checkUser.php" class="log-reg" method="POST" id="login">
                  <h1 class="form-heading">LOGIN</h1>
				<br>
				<br>
                     <input class="text input-fields" type="text" name="username" placeholder="Username" required>
                        <br>
                     <input class="text input-fields" type="password" name="password" placeholder="Password" required>
      
                     <input type="submit" class="log-reg-btns" value="LOGIN">
                  </form>
                  <p>You have entered a wrong username or password.</p>
                  <br>
                  <p>Don\'t have an Account? <a href="register.php">Sign up now!</a></p>
                  <br>
                      <p><a href="index.php">Return to Website</a></p>
               </div>
            </div>
      
         </div>
      
      </body>
      </html>';
      }

   $conn->close();
?>