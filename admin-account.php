<?php session_start();
if(!isset($_SESSION['admin']))
{
  header('location: login.php');
}
?>
<!-- ^^^starting PHP session^^^ -->
<!-- setting doctype to html with english language-->
<!DOCTYPE html>
<html lang="en">
	<!--head tag with include files -->
<head>
	<?php 
	include("includes/head.php");
	include("includes/css-links.php");
	?>
  </head>
  <!--include files find the nav bar and then the require files connect to the database and/or find errors -->
	<?php 
	include("includes/nav.php");
	require("includes/dbconx.php");
	require("includes/errors.php");
	?>
	
    <!-- END nav -->
	<!--sets the banner with image cover -->
    <div class="hero-wrap hero-bread" style="background-image: url('img/events/leaves.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Account</h1>
          </div>
        </div>
      </div>
    </div>
	<!--starts section to display collections-->
    <section class="ftco-section">
    	<div class="container">
                <div class="row justify-content-center">
				<div class="col-md-10 mb-5 text-center">	
				<h2>Bookings & Enquiries</h2>
				<br>
    				<ul class="product-category">
    					<li><a href="#" id="event-tab" class="active">Event Bookings</a></li>
    					<li><a href="#" id="ticket-tab" class="none">Ticket Bookings</a></li>
    					<li><a href="#" id="contact-tab" class="none">Contact Enquiries</a></li>
    				</ul>
    			</div>
             <div class="row" style="overflow-x:auto; width:100%;" id="event-booking-tab">
			 <table>
				<thead>
					<tr>
					<th>Event Name</th>
					<th>Full name</th>
					<th>Phone number</th>
					<th>Email Address</th>
					<th>Booking date</th>
					</tr>
				</thead>
                 <?php
                 
                 $sql = "SELECT * FROM event_bookings";
                 $result = $conn->query( $sql );

			
			  if ( $result->num_rows > 0 ) {
					// output the recordset of each row found
				   while ( $row = $result->fetch_assoc() ) {
				  $eventName = $row['event_id'];
				  $firstName = $row['first_name'];
				  $lastName = $row['last_name'];
				  $fullName = $firstName .' '. $lastName;
				  
				  if($eventName == 1){
					  $eventName = "Tyrannosaurs";
				  }
				  elseif($eventName == 2){
					  $eventName = "Autism Friendly Sessions";
				  }
				  elseif($eventName == 3){
					  $eventName = "School Tour of Natural History";
				  }
				  else{
					  $eventName = "National Museums Scotland Tour";
				  }
				
			echo '
				<tbody>
					<tr>
					<td>' .$eventName. '</td>
					<td>' .$fullName. '</td>
					<td>' .$row['phone_number']. '</td>
					<td>' .$row['email_address']. '</td>
					<td>' .$row['event_date']. '</td>
					</tr>
				
            ';
                  }
              } 
                 ?>
				 </tbody>
			</table>
                 </div>
			  	<br>
				 <div class="row" style="overflow-x:auto; width:100%; display:none;" id="ticket-booking-tab">
			 <table>
				<thead>
					<tr>
					<th>Full name</th>
					<th>Delivery Address</th>
					<th>Phone Number</th>
					<th>Email Address</th>
					<th>Adult Ticket(s)</th>
					<th>Child Ticket(s)</th>
					<th>Senior Ticket(s)</th>
					<th>Family Ticket(s)</th>
					</tr>
				</thead>
                 <?php
                 
                 $sql = "SELECT * FROM ticket_bookings";
                 $result = $conn->query( $sql );

			
			  if ( $result->num_rows > 0 ) {
					// output the recordset of each row found
				   while ( $row = $result->fetch_assoc() ) {
				  $firstName = $row['first_name'];
				  $lastName = $row['last_name'];
				  $fullName = $firstName .' '. $lastName;
				  $address = $row['delivery_address'];
				  $town = $row['town_city'];
				  $postcode = $row['post_code'];
				  $fullAddress = $address .', '. $town . ', '. $postcode;

					
			echo '
				<tbody>
					<tr>
					<td>' .$fullName. '</td>
					<td>' .$fullAddress. '</td>
					<td>' .$row['phone_number']. '</td>
					<td>' .$row['email_address']. '</td>
					<td>' .$row['adult_tickets']. '</td>
					<td>' .$row['child_tickets']. '</td>
					<td>' .$row['senior_tickets']. '</td>
					<td>' .$row['family_tickets']. '</td>
					</tr>
				
            ';
                  }
              } 
                 ?>
				 </tbody>
			</table>
                 </div>
				 <div class="row" style="overflow-x:auto; width:100%; display:none;" id="contact-enquiry-tab">
			 <table>
				<thead>
					<tr>
					<th>Full Name</th>
					<th>Email Address</th>
					<th>Subject</th>
					<th>Reason</th>
					<th>Message</th>
					</tr>
				</thead>
                 <?php
                 
                 $sql = "SELECT * FROM contact";
                 $result = $conn->query( $sql );

			
			  if ( $result->num_rows > 0 ) {
					// output the recordset of each row found
				   while ( $row = $result->fetch_assoc() ) {
				  
		
				
				
			echo '
				<tbody>
					<tr>
					<td>' .$row['contact_name']. '</td>
					<td>' .$row['contact_email']. '</td>
					<td>' .$row['contact_subject']. '</td>
					<td>' .$row['contact_reason']. '</td>
					<td>' .$row['contact_message']. '</td>
					</tr>
				
            ';
                  }
              } 
                 ?>
				 </tbody>
			</table>
                 </div>
                    </div>
			<br>
			<br>
                		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
				<h2>Collections</h2>
					<!--button to take admin to form to add new item -->
						<button onclick="window.location.href='add.php'" class="add-to-col">Add to Collections</button>
    			</div>
    		</div>
			 <div class="row">
			 <?php
            //selects all from collections     
			$sql = "SELECT * FROM collections";
			$result = $conn->query( $sql );

			
			  if ( $result->num_rows > 0 ) {
					// output the recordset of each row found
				   while ( $row = $result->fetch_assoc() ) {
    			
    			echo'<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product product-edit">
				<img class="img-fluid col-img-edit" src="img/collections/' .$row['image']. '" alt="Collection-image">
						<div class="overlay"></div>
					
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">' .$row["item_name"]. '</a></h3>
						<div class="d-flex">
							<div class="pricing">
								<p class="price"><span>' .$row['category']. '</span></p>
							</div>
						</div>
						<div class="bottom-area d-flex px-3">
							<div class="m-auto d-flex">
								<a href="update.php?id=' .$row['item_number']. '" class="add-to-cart d-flex justify-content-center align-items-center text-center">
									<span><i class="ion-ios-menu"></i></span>
								</a>
								<a href="delete.php?id=' .$row['item_number']. '" class="buy-now d-flex justify-content-center align-items-center mx-1">
									<span><i class="ion-ios-trash"></i></span>
								</a>
								
							</div>
						</div>
					</div>
				</div>
			</div>'
						;
    				}
				}
			$conn->close();
						?>
						</div>
						</div>
					</section>
					
	<!--include files for newsletter and footer-->
	<?php
	include("includes/newsletter.php");
	include("includes/footer.php");
	?>
  <!-- loader -->
  <?php
	include("includes/scripts.php");
  ?>
  <script>
document.getElementById("ticket-tab").addEventListener('click', function(){
        document.getElementById("ticket-tab").classList.add("active");
        document.getElementById("event-tab").classList.remove('active');
		document.getElementById("contact-tab").classList.remove('active');
		document.getElementById("ticket-booking-tab").style.display = "inline";
		document.getElementById("event-booking-tab").style.display = "none";	
		document.getElementById("contact-enquiry-tab").style.display = "none";					
});

document.getElementById("contact-tab").addEventListener('click', function(){
        document.getElementById("contact-tab").classList.add("active");
        document.getElementById("event-tab").classList.remove('active');
		document.getElementById("ticket-tab").classList.remove('active');
		document.getElementById("contact-enquiry-tab").style.display = "inline";
		document.getElementById("event-booking-tab").style.display = "none";	
		document.getElementById("ticket-booking-tab").style.display = "none";			
});

document.getElementById("event-tab").addEventListener('click', function(){
        document.getElementById("event-tab").classList.add("active");
        document.getElementById("contact-tab").classList.remove('active');
		document.getElementById("ticket-tab").classList.remove('active');
		document.getElementById("event-booking-tab").style.display = "inline";
		document.getElementById("ticket-booking-tab").style.display = "none";	
		document.getElementById("contact-enquiry-tab").style.display = "none";			
});
  </script>
    
</html>