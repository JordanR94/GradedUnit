<?php session_start();
if(!isset($_SESSION['admin']))
{
  header('location: login.php');
}
?>
<!--^^^ setting up PHP session^^^ -->
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
<body class="login-register" style="background-image: url(img/home/museum-lookdown.jpg);">
    	<div class="main-w3layouts wrapper">
		<div class="main-agileinfo">
			<div class="agileits-top log-reg-forms">
        <!-- form for adding new items to collections-->
      <form action="addCollection.php" method="POST" name="add-collection" class="form-container">
      <h1 class="form-heading">ADD</h1>
      <br>
      <br>
          <input type="text" class="input-fields" placeholder="Enter Item Name" name="item_name" required>
            <br>
          <input type="text" class="input-fields" placeholder="Enter Collection Place" name="collection_place" required>
            <br>
          <input type="text" class="input-fields" placeholder="Enter Description" name="description" required>
            <br>
          <input type="text" class="input-fields" placeholder="Enter Any Associations" name="associations" required>
          <br>
            <select name="category" class="cate-dropdown" required>
                    <option value="" selected disabled hidden>Category</option>
                    <option value="Fossil">Fossil</option>
                    <option value="Mineral">Mineral</option>
                    <option value="Plant">Plant</option>
            </select>
          <br>
          <br>
          <label for="upload-image" class="image-upload"><strong>Upload image:</strong></label>
          <input type="file" id="upload-image" class="image-upload" name="image" accept="image/*" required>
          <br>
          <input type="submit" class="log-reg-btns" value="ADD">
           <p><a href="admin-account.php">RETURN</a></p>

        </form>
    
    		</div>

	</div>
    </div>
	<!-- //main -->
    </body>
    </html>