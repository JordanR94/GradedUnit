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
  <!--includes the nav -->
	<?php 
		include("includes/nav.php");
	?>
    <!-- END nav -->
<!-- banner with image -->
    <div class="hero-wrap hero-bread" style="background-image: url('img/events/gallery-view.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </div>
    <!--contact info blocks -->
    <section class="ftco-section contact-section bg-light contact-section">
      <div class="container">
      	<div class="row d-flex mb-5">
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4 contact-info">
	            <p><span>Address: <br></span>Chambers St, Edinburgh <br>EH1 1JF</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4 contact-info">
	            <p><span>Phone:</span><br><a href="tel://03001236789">0300 123 6789</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4 contact-info">
	            <p><span>Email:</span> <a href="mailto:info@yoursite.com">membership@nms.ac.uk.</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4 contact-info">
	            <p>Social Media: </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/museum_scotland?lang=en"><span class="icon-twitter social-media"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/NationalMuseumsScotland/"><span class="icon-facebook social-media"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/nationalmuseumsscotland/?hl=en"><span class="icon-instagram social-media"></span></a></li>
              </ul>
	          </div>
          </div>
        </div>
        <!--contact form-->
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="contact-enquiry.php" method="POST" class="bg-white p-5 contact-form contact-info">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your Email" name="email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject" name="subject" required>
              </div>
               <div class="form-group">
               <select id="contact-reason" name="reason">
               <option value="" selected disabled hidden>Contact Reason:</option>
               <option value="School">Arrange a school trip</option>
               <option value="General">General Enquiry</option>
               <option value="Refund">Refund</option>
               <option value="Other">Other</option>
              </select>
              </div>
            
              <div class="form-group">
                <textarea cols="30" rows="7" class="form-control" name="message" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
          <!-- sets up google maps -->
          <div class="col-md-6 d-flex">
          	<iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=national%20museums%20scotland&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
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