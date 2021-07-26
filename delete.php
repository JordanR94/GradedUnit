<?php session_start(); 
if(!isset($_SESSION['admin']))
{
  header('location: login.php');
}
?>
<!--sets up php session -->
<?php 
   //includes database and checks for errors
   include( 'includes/errors.php' );
   include( 'includes/dbconx.php' ); 
    
   //finds the id and deletes from database
    $id = $_GET[ 'id' ];
    $delete = "DELETE FROM collections WHERE item_number = '$id' ";
    $result = $conn->query( $delete );

    if ( $conn->query($delete) === TRUE ) { 
        header( 'location:admin-account.php' );
     } 
     $conn->close();
?>