<?php session_start();?>
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
	<!--banner with image -->
	<div class="hero-wrap hero-bread" style="background-image: url('img/events/museum-view-edit.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Events</h1>
          </div>
        </div>
      </div>
    </div>
	<!--sets up container for the event chosen -->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
				<?php
				//finds id from hyperlink
				$id = $_GET['id'];
				$sql = "SELECT * FROM events WHERE event_id = $id";
				$result = $conn->query( $sql );

				  if ( $result->num_rows > 0 ) {
						// output the recordset of each row found
						while ( $row = $result->fetch_assoc()) {

    			echo '<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="img/events/' .$row['event_image']. '" class="image-popup"><img src="img/events/' .$row['event_image']. '" class="img-fluid" alt="event-image"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>' .$row['event_name']. '</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4"></p>
						</div>
    				
					<p>' .$row['event_description']. '</p>
					<p>' .$row['event_info']. '</p>
						<div class="row mt-4">
					
			
	          	<div class="col-md-12">
                      
                      <p class="price col-place"></p>
	          	</div>
			  </div>
			  <p><a href="events.php" class="btn btn-primary py-3 px-5">Other Events</a></p>
          	<p></p>
    			</div>
			</div>
			</div>
			';

			echo '
			<div class="row justify-content-center">
			<div class="col-xl-7 ftco-animate">
						  <form action="event-booking.php" method="POST" class="billing-form">
							  <h3 class="mb-4 billing-heading">Confirm Booking</h3>
					<div class="row align-items-end">
						<div class="col-md-6">
					  <div class="form-group">
							<input type="hidden" name="event_id" value="' .$row['event_id']. '">
						  <label for="event-firstname">First Name</label>
						<input type="text" id="event-firstname" name="firstname" class="form-control" required>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-group">
						  <label for="event-lastname">Last Name</label>
						  <input type="text" id="event-lastname" name="lastname" class="form-control" required>
					  </div>
				  </div>
	
					  <div class="col-md-6">
					  <div class="form-group">
						  <label for="event-phone">Phone</label>
						<input type="number" id="event-phone" name="phone" class="form-control" required>
					  </div>
					</div>
					<div class="col-md-6">
					  <div class="form-group">
						  <label for="event-email">Email Address</label>
						<input type="email" id="event-email" name="email" class="form-control" required>
					  </div>
				  </div>
				  
				  <div class="col-md-12">
					  <div class="form-group mt-4">
										  <div class="radio">
										  <label for="event-date">Date:</label> <br>
										  <input type="date" id="event-date" name="date" required>
										  </div>
									  </div>
				  </div>
				  </div>
				  <input type="submit" id="event-book" class="btn btn-primary " value="Book Now">
				</form>';
					   }
					}
					$conn->close();
			?>
		
    	<br>
		<h4 id="confirm-event">Thank you! Your event have been booked.</h4>
		</div>
		</div>
		</section>

	<!--file includes for newsletter and footer-->
	<?php
	include("includes/newsletter.php");
	include("includes/footer.php");
	?>


  <!-- loader -->
  <?php
	include("includes/scripts.php");
	include("includes/eventsjs.php");
  ?>




  
  </body>
</html>