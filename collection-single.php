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
	<!-- sets banner with background image -->
	<div class="hero-wrap hero-bread" style="background-image: url('img/events/collection-bones.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Collections</h1>
          </div>
        </div>
      </div>
    </div>
	<!--sets up container for collection -->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
				<?php
				//finds the id from the hyperlink-->
				$id = $_GET['id'];
				$sql = "SELECT * FROM collections WHERE item_number = $id";
				$result = $conn->query( $sql );
				
				  if ( $result->num_rows > 0 ) {
						// output the recordset of each row found
						while ( $row = $result->fetch_assoc()) {

    			echo '<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="img/collections/' .$row['image']. '" class="image-popup"><img src="img/collections/' .$row['image']. '" class="img-fluid" alt="Collection-image"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3 class="col-single">' .$row['item_name']. '</h3>
    				<div class="rating d-flex">
							<p class="text-left mr-4">' .$row['category']. 
							'</p>
						</div>
    				<h4><span>Collection Place: ' .$row['collection_place']. '</span></h4>
    				<p>' .$row['description']. '</p>
						<div class="row mt-4">
					
							<div class="w-100"></div>
			
	          	<div class="w-100"></div>
	          	<div class="col-md-12">
	          		<p style="color: #000;">Associations: ' .$row['associations']. '</p>
	          	</div>
          	</div>
          	<p><a href="collections.php" class="btn btn-primary py-3 px-5">View Collections</a></p>
    			</div>
			';
					   }
					}
					$conn->close();
			?>
                </div>
    	</div>
   

    </section>
					<!--include files for newsletter and footer -->
	<?php
	include("includes/newsletter.php");
	include("includes/footer.php");
	?>


  <!-- loader -->
  <?php
	include("includes/scripts.php");
  ?>

 
    
  </body>
</html>