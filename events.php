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

	<!--sets up container for the events -->
    <section class="ftco-section ftco-degree-bg">
	<div class="container">

        <div class="row">
			<?php 
				$sql = "SELECT * FROM events";
				$result = $conn->query( $sql );
	
				  if ( $result->num_rows > 0 ) {
						// output the recordset of each row found
					   while ( $row = $result->fetch_assoc() ) {

       			  echo '<div class="col-lg-8 ftco-animate">
						<div class="row">
							<div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <img  class="block-20 event-img-edit"  src="img/events/' .$row['event_image'].'" alt="event-image">
		              
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                 
		                </div>
		                <h3 class="heading"><a href="#" class="event-heading">' .$row['event_name']. '</a></h3>
		                <p>' .$row['event_description']. '</p>
		                <p><a href="events-single.php?id=' .$row['event_id']. '" class="btn btn-primary event-btn py-2 px-3">Book now</a></p>
		              </div>
		            </div>
				  </div>
				  </div>
				  </div>';
					   }
					}
					
					?>
          </div> <!-- .col-md-8 -->
       
           

        </div>
 
   
    </section> <!-- .section -->
<!--file includes for newsletter and footer-->
	<?php
	include("includes/newsletter.php");
	include("includes/footer.php");
	?>

  <?php $conn->close(); ?>
  

  <!-- loader -->
  <?php
	include("includes/scripts.php");
  ?> 


  

  </body>
</html>