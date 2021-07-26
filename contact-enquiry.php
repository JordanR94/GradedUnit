<?php 

    require('includes/dbconx.php');
    require('includes/errors.php');
    
        //escapes special characters in a string for use in an SQL statement(escape variables for security)
        $contact_name = mysqli_real_escape_string($conn, $_POST['name']);
        $contact_email = mysqli_real_escape_string($conn, $_POST['email']);
        $contact_subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $contact_reason = mysqli_real_escape_string($conn, $_POST['reason']);
        $contact_message = mysqli_real_escape_string($conn, $_POST['message']);
       
        //insert data into database and check whether connection and query exist and are error free
        $sql = "INSERT INTO contact (contact_name, contact_email, contact_subject, contact_reason, contact_message) VALUES 
        ('$contact_name', '$contact_email', '$contact_subject', '$contact_reason', '$contact_message')";

        if ($conn->query($sql) === TRUE) {
        header("location: contact.php");}
        else {
        header("location: index.php");
        }
        //redirect user to a confirmation page
        //close the connection when done
        $conn->close();
        ?>