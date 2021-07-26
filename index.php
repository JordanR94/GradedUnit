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
  <!--includes nav -->
	<?php 
	include("includes/nav.php");
	?>
	<!-- END nav -->
	<!--banner carosel with image -->
    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(img/home/natural-history-museum-cover.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2 home-heading">Welcome to National Museums Scotland</h1>
	              
	              <p><a href="collections.php" class="btn btn-primary">View Collections</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
			<!--banner carosel with image -->
	      <div class="slider-item" style="background-image: url(img/home/museum-lookdown.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2 home-heading">Welcome to National Museums Scotland</h1>
	            
	              <p><a href="events.php" class="btn btn-primary">View Events</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>
		<!--sets up container for displaying the icons -->
    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading icon-heading">Collections</h3>
                <span>Over 25 items on display</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading icon-heading">Tours</h3>
                <span>We offer tours for all ages</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading icon-heading">Events</h3>
                <span>We have many upcoming events</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading icon-heading">Visits</h3>
                <span>Visit the Museum in your own time</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
		<!--sets up container for displaying the featured items -->
		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex">
									<div class="text text-center">
										<h2 class="welcome-msg">Welcome</h2>
										<p>These are our featured items we have on display at our Museum</p>
										<img src="img/collections/triceratops-small.jpg" id="welcome-img" alt="triceratops">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(img/events/dinosaur-trex.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="events.php">Tours</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(img/events/tour.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="events.php">Events</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(img/collections/arch-hibernica.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="collections.php">Collections</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(img/events/events.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="visit.php">Visit</a></h2>
							</div>
						</div>
					</div>
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