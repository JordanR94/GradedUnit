<?php session_start(); 
if(!isset($_SESSION['admin']))
{
  header('location: login.php');
}
?>
<!--session starts for admin -->
<?php 
    // connects to database and checks for errors
    require('includes/dbconx.php');
    require('includes/errors.php');
      //sets form inputs to variables
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
        $collection_place = mysqli_real_escape_string($conn, $_POST['collection_place']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $associations = mysqli_real_escape_string($conn, $_POST['associations']);
        $newImage = mysqli_real_escape_string($conn, $_POST['new_image']);
        $originalImage =  mysqli_real_escape_string($conn, $_POST['original_image']);

        //setting the form to check if the new is the same as the original
        if($newImage !== $originalImage){
          $image = $newImage;
          $sql = "UPDATE collections SET item_name = '$item_name', collection_place = '$collection_place',
          description = '$description' , associations = '$associations', image = '$image' WHERE item_number = '$id' ";
        }
        else{
          $image = $originalImage;
          $sql = "UPDATE collections SET item_name = '$item_name', collection_place = '$collection_place',
          description = '$description' , associations = '$associations', image = '$image' WHERE item_number = '$id' ";
        }
       
        if (mysqli_query($conn, $sql)) {
        header("location: admin-account.php");
        }
        else {
            echo "Error updating record: " . mysqli_error($conn);
        }
      
        $conn->close();
        ?>
