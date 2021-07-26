<?php session_start();
if(!isset($_SESSION['admin']))
{
  header('location: login.php');
}
?>
<?php 
    //requires the database and checks for errors
    require('includes/dbconx.php');
    require('includes/errors.php');
    
        //escapes special characters in a string for use in an SQL statement(escape variables for security)
        $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
        $collection_place = mysqli_real_escape_string($conn, $_POST['collection_place']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $associations = mysqli_real_escape_string($conn, $_POST['associations']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $image = mysqli_real_escape_string($conn, $_POST['image']);
        //insert data into database and check whether connection and query exist and are error free
        $sql = "INSERT INTO collections (item_name, collection_place, description, associations, category, image) VALUES ('$item_name', '$collection_place', '$description', '$associations', '$category', '$image')";

        if ($conn->query($sql) === TRUE) {
        header("location: admin-account.php");}
        else {
        header("location: index.php");
        }
        //redirect user to a confirmation page
        //close the connection when done
        $conn->close();
        ?>

