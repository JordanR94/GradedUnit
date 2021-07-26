<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
	include("includes/head.php");
	include("includes/css-links.php");
	?>
	<link rel="stylesheet" href="css/collections.css">
  </head>
	<?php 
	include("includes/nav.php");
	require("includes/dbconx.php");
	require("includes/errors.php");

	?>
	
    <!-- END nav -->

	<div class="hero-wrap hero-bread" style="background-image: url('img/events/collection-bones.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Plants</h1>
          </div>
        </div>
      </div>
    </div>
	<!--sets up container for displaying collections -->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category"> <!-- filter option for categories -->
    					<li><a href="collections.php">All</a></li>
    					<li><a href="fossils.php">Fossils</a></li>
    					<li><a href="minerals.php">Minerals</a></li>
    					<li><a href="plants.php" class="active">Plants</a></li>
    				</ul>
    			</div>
    		</div> 
			 <div class="row">
			 <?php

			$sql = "SELECT * FROM collections WHERE category LIKE '%Plant%' ";
			$result = $conn->query( $sql );

			  if ( $result->num_rows > 0 ) {
					// output the recordset of each row found
				   while ( $row = $result->fetch_assoc() ) {
    			
					echo'<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product product-edit">
						<a href="collection-single.php?id=' .$row['item_number']. '" class="img-prod"><img class="img-fluid col-img-edit" src="img/collections/' .$row['image']. '" alt="Collection-image">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">' .$row["item_name"]. '</a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span>' .$row['category']. '</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								
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
					<!--file includes for newsletter and footer-->
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