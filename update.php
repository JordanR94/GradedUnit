<?php session_start();
if(!isset($_SESSION['admin']))
{
  header('location: login.php');
}
?>
<!--^^^ setting up PHP session -->
<!-- setting the document type to html and its language to english-->
<!DOCTYPE html>
<html lang="en">
<!--setting up head tag with css stylesheet-->
<head>
<link rel="stylesheet" href="css/main.css">
<!--finds more css links and connects to database and/or finds errors-->
<?php 
include("includes/login-reg-css-link.php");
require("includes/dbconx.php");
require("includes/errors.php");
?>
</head>
<!--body background image sets full size of screen -->
</head>
<body class="login-register" style="background-image: url(img/home/museum-lookdown.jpg);">
    <?php
    $id = $_GET['id'];
    $update = "SELECT * FROM collections WHERE item_number = '$id' ";
    $result = $conn->query( $update );
    $row= mysqli_fetch_array($result);
    ?>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top log-reg-forms">
                 <!-- form for updating items in the collections-->
				<form action="updateCollection.php" method="POST" id="update">
                <h1 class="form-heading">UPDATE</h1>
                <br>
                <br>
                    <input type="hidden" name="id" value="<?php echo $row["item_number"]; ?>">
                    <label for="item_name" class="update-fields">Item Name:</label>
					<input class="text input-fields" id="item_name" type="text" name="item_name" value="<?php echo $row["item_name"];?>">
						<br>
                    <label for="collection_place" class="update-fields">Collection Place:</label>
					<input class="text input-fields" id="collection_place" type="text" name="collection_place" value="<?php echo $row["collection_place"];?>">
                        <br>
                    <label for="description" class="update-fields">Description:</label>
                    <input class="text input-fields" id="description" type="text" name="description" value="<?php echo $row["description"];?>" >
	                   <br>
                    <label for="associations" class="update-fields">Associations:</label>
                    <input type="text" class="input-fields" id="associations" name="associations" value="<?php echo $row["associations"]; ?>">
                    <br>
                    <input class="text input-fields" type="hidden" name="original_image" value="<?php echo $row["image"]; ?>">
                    <br>
                    <label for="img-upload" class="update-fields">Upload New Image:</label>
                    <input type="file" accept="image/*" id="img-upload" name="new_image" class="update-fields">
                    <br>
					<input type="submit" class="log-reg-btns" value="UPDATE">
				</form>
				<br>
                <p><a href="admin-account.php">RETURN</a></p>
			</div>
		</div>
		<!-- copyright -->
	
	</div>
	<!-- //main -->
</body>
</html>