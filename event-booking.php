<?php
//connects to database and checks for errors
include( 'includes/errors.php' );
include( 'includes/dbconx.php' ); 
//sets up variables from event form
$eventID = mysqli_real_escape_string( $conn, $_POST[ 'event_id' ] );
$firstname = mysqli_real_escape_string( $conn, $_POST[ 'firstname' ] );
$lastname = mysqli_real_escape_string( $conn, $_POST[ 'lastname' ] );
$phone = mysqli_real_escape_string( $conn, $_POST[ 'phone' ] );
$email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
$date = mysqli_real_escape_string( $conn, $_POST[ 'date' ] );

//inserts into datbase
$sql="INSERT INTO event_bookings (event_id, first_name, last_name, phone_number, email_address, event_date) VALUES ('$eventID', '$firstname', '$lastname', '$phone', '$email', '$date')";

$result = $conn->query( $sql );


 if (!$result) { 
     
     die('Error: ' . mysqli_error()); 
 
 }

header("location: events.php");

   $conn->close();
?>