<?php
//connecting to database and checking for errors
include( 'includes/errors.php' );
include( 'includes/dbconx.php' ); 

//finding the form input details and setting them as variables
$firstname = mysqli_real_escape_string( $conn, $_POST[ 'firstname' ] );
$lastname = mysqli_real_escape_string( $conn, $_POST[ 'lastname' ] );
$address = mysqli_real_escape_string( $conn, $_POST[ 'address' ] );
$town = mysqli_real_escape_string( $conn, $_POST[ 'town' ] );
$postcode = mysqli_real_escape_string( $conn, $_POST[ 'postcode' ] );
$phone = mysqli_real_escape_string( $conn, $_POST[ 'phone' ] );
$email = mysqli_real_escape_string( $conn, $_POST[ 'email' ] );
$adult = mysqli_real_escape_string( $conn, $_POST[ 'adult-total' ] );
$child = mysqli_real_escape_string( $conn, $_POST[ 'child-total' ] );
$senior = mysqli_real_escape_string( $conn, $_POST[ 'senior-total' ] );
$family = mysqli_real_escape_string( $conn, $_POST[ 'family-total' ] );

//inserts into database
$sql="INSERT INTO ticket_bookings (first_name, last_name, delivery_address, town_city, post_code, phone_number, email_address, adult_tickets, child_tickets, senior_tickets, family_tickets) VALUES ('$firstname', '$lastname', '$address', '$town', '$postcode', '$phone', '$email', '$adult', '$child', '$senior', '$family')";

$result = $conn->query( $sql );


 if (!$result) { 
     
     die('Error: ' . mysqli_error()); 
 
 }

header("location: visit.php");

   $conn->close();
?>