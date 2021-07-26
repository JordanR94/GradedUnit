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
	<div class="hero-wrap hero-bread" style="background-image: url('img/events/collection-bones.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Fossils</h1>
          </div>
        </div>
      </div>
    </div>
		<!--sets up container -->
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
					<!--displays unlisted filter to choose different categories -->
    				<ul class="product-category">
    					<li><a href="collections.php">All</a></li>
    					<li><a href="fossils.php" class="active">Fossils</a></li>
    					<li><a href="minerals.php">Minerals</a></li>
    					<li><a href="plants.php">Plants</a></li>
    				</ul>
    			</div>
    		</div> 
			 <div class="row">
			 <?php

			$sql = "SELECT * FROM collections WHERE category LIKE '%Fossil%' ";
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