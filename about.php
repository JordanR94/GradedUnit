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
    include("includes/aboutPlugins.php");
	?>
  </head>
  <!--include files find the nav bar and then the require files connect to the database and/or find errors -->
	<?php 
	include("includes/nav.php");
	require("includes/dbconx.php");
	require("includes/errors.php");
	?>
    <!-- END nav -->
	<!--banner-->
    <div class="hero-wrap hero-bread" style="background-image: url('img/events/bridge.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">About us</h1>
          </div>
        </div>
      </div>
    </div>
	<br>
	<!--section with image and paragraphs of information -->
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light about-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(img/events/fossil-display.jpg);">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h3 class="mb-4">Our Aim:</h3>
	            </div>
	          </div>
	          <div class="pb-md-5">
	         			 	<p>Value our Collections: <br> Preserve, interpret, share and make them accessible for all.</p>
							<p>Increase our Reputation and Reach: <br> Connect more with people locally, nationally and internationally.</p>  
							<h3 class="mb-4">Our Priorities:</h3>
							<p>Creating inspiring visitor experiences at our Museums and elsewhere. Developing, preserving and increasing access to the National Collections. 
							Strengthening and sharing collections knowledge and research. Reaching out to people across Scotland and the world. Transforming our digital engagement.
							Valuing, supporting and developing our people and empowering them to work together in new ways.
							Growing and diversifying our income.</p>
							<p><a href="collections.php" class="btn btn-primary">View Collections</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
			<br>
			<!--section background image set with paragraphs displayed on top -->
		<section class="ftco-section img" style="background-image: url(img/events/workshop.jpg);">
    	<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
            <h2 class="mb-4">Interactive Workshop</h2>
            <p style="color: black; font-weight: bold;">Visit out our <u><a href="collections.php" style="color: black;">COLLECTIONS</a></u> page to learn about what we have on display.</p>
			<p style="color: black; font-weight: bold;">After you have visited it then please try out our collection based questions below!</p>
            <h3>Good Luck!</h3>
          </div>
        </div>   		
    	</div>
    </section>

	<!--interactive workshop -->
		<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          <h2>Play here</h2>
<div id="quiz">
  <div id="quiz-header">
    <p><a id="quiz-home-btn">Restart</a></p>
  </div>
  <div id="quiz-start-screen">
    <p><a href="#" id="quiz-start-btn" class="quiz-button">Begin</a></p>
  </div>
</div>
          </div>
          </div>
            </div>
    </section>

    <!-- include files newsletter and footer -->
        <?php
	include("includes/newsletter.php");
	include("includes/footer.php");
	?>


  <!-- loader -->
  <?php
    include("includes/scripts.php");
    include("includes/aboutScripts.php");
  ?>

</html>