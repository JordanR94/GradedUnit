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
	<div class="hero-wrap hero-bread" style="background-image: url('img/events/museum-hall.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">Visit us</h1>
          </div>
        </div>
      </div>
    </div>
		<!--setting up container to display the tickets -->
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table visit-table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>Ticket</th>
						        <th>Price</th>
						        <th>Quantity</th>
						      </tr>
						    </thead>
						    <tbody>
							<?php
		
						$sql = "SELECT * FROM tickets WHERE booking_type LIKE '%Visit%'";
						$result = $conn->query( $sql );

							if ( $result->num_rows > 0 ) {
							// output the recordset of each row found
	 						  while ( $row = $result->fetch_assoc() ) {
								?>
						      <tr class="text-center">
						        
						        <td class="image-prod"><img class="visit-img" src="img/tickets/<?php echo $row['image'];?>" alt="ticket-image"/></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $row['name']; ?></h3>
						        	<p><?php echo $row['booking_info'] ?></p>
						        </td>
						        
						        <td class="price" id="price-<?php echo $row['price'];?>" >£<?php echo $row['price']; ?></td>
						        
						        <td class="quantity">
						        	<div class="input-group mb-3">
									<span class="icon-minus quantity-left-minus quantity-minus-<?php echo $row['ticket_number']; ?>"></span>
					             	<input type="text" name="quantity" id="quantity-<?php echo $row['ticket_number']; ?>" class="quantity quantity-value form-control input-number quantity-<?php echo $row['ticket_number']; ?>" value="<?php $quantity= 0; echo $quantity ?>">
									<span class="icon-plus quantity-right-plus quantity-add-<?php echo $row['ticket_number']; ?>"></span>
					          	</div>
					          </td>
						        
						  
						      </tr><!-- END TR-->
									<?php
							   }
							}
							$conn->close();?>

						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
							<br>
							<!--form input for billing details -->
			<div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="visit-bookings.php" id="visit-booking-form" method="POST" class="billing-form">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6"> 
					  <input type="hidden" name="adult-total" class="quantity-3" value="">
                      <input type="hidden" name="child-total" class="quantity-4" value="">    
                      <input type="hidden" name="senior-total" class="quantity-5" value="">
                      <input type="hidden" name="family-total" class="quantity-6" value="">
                     
	                <div class="form-group">
	                	<label for="visit-firstname">First Name</label>
                    
	                  <input type="text" id="visit-firstname"  name="firstname" class="form-control" required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="visit-lastname">Last Name</label>
	                  <input type="text" id="visit-lastname" class="form-control" placeholder="" name="lastname" required>
	                </div>
                </div>
                <div class="w-100"></div>
		        
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="visit-address">Street Address</label>
	                  <input type="text" id="visit-address" name="address" class="form-control" required>
	                </div>
		            </div>
                      <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="visit-town">Town / City</label>
	                  <input type="text" id="visit-town" name="town" class="form-control" required>
	                </div>
		            </div>
		         
		            <div class="w-100"></div>
		  
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="visit-postcode" >Postcode</label>
	                  <input type="text" id="visit-postcode" name="postcode" class="form-control" required>
	                </div>
		            </div>
                  
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="visit-phone">Phone</label>
	                  <input type="text" id="visit-phone" name="phone" class="form-control" required>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="visit-email">Email Address</label>
	                  <input type="text" id="visit-email" name="email" class="form-control" required>
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group mt-4">
										<input type="submit" id="visit-submit" class="btn btn-primary visit-btn-edit" value="Submit"/>
									</div>
                </div>
	            </div>
				
	          </form><!-- END -->
			  <h4 id="confirm-tickets">Thank you! Your tickets have been booked.</h4>
					</div>
					<!--cart to show price of tickets -->
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
						  <p class="d-flex">
    						<span>Adult Ticket(s)</span>
    						<span id="adult-total"></span>
    					</p>
    					<p class="d-flex">
    						<span>Child Ticket(s)</span>
    						<span id="child-total"></span>
    					</p>
    					<p class="d-flex">
    						<span>Senior Ticket(s)</span>
    						<span id="senior-total"></span>
    					</p>
						<p class="d-flex">
    						<span>Family Ticket(s)</span>
    						<span id="family-total"></span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span id="total-price-tickets"></span>
    					</p>
						<p><button  id="calc-total-price" class="btn btn-primary visit-btn-edit py-3 px-4">Calculate</button></p>
                        </div>
	          	</div>
	      
	          </div>
          </div> <!-- .col-md-8 -->
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
	include("includes/visitjs.php");
  ?>

  </body>
</html>