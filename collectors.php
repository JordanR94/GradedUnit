<?php session_start();
if(!isset($_SESSION['user']))
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
<!--banner with image -->
<div class="hero-wrap hero-bread" style="background-image: url('img/events/leaves.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">
                Hello <?php echo $_SESSION['user']; ?>
              </h1>
          </div>
        </div>
      </div>
    </div>
  <!-- container  -->
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Adding to our collecions</span>
            <h2 class="mb-4">Requirements</h2>
            <p>If your item meets the criteria below, then you may send your details along side your item information to our specialists: specialists@nms.com</p>
            
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(img/collections/granite.jpg)">
                 
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">We require photographic evidence of your item along with any associations it might have with previous owners.</p>
                    <p class="name">Photographic Evidence</p>
                 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(img/events/collection-bones.jpg)">
             
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Please make sure you have all documents to ensure that this item belongs to you legally with approval of its authenticity.</p>
                    <p class="name">Authenticity</p>
                  
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(img/events/gallery-view.jpg)">
                  
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Detailed information of your item and where it comes from. How did it land in your possession? And why do you want to add it to our museum?</p>
                    <p class="name">Detailed information</p>
                    <span class="position"></span>
                  </div>
                </div>
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

</html>