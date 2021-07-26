<!-- nav bar -->
<nav class="navbar navbar-expand-lg ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		<!-- logo -->
	      <a class="navbar-brand navbar-brand-edit" href="index.php">National Museums Scotland</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
			<!-- list of pages -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="collections.php" class="nav-link">Collections</a></li>	
	          <li class="nav-item"><a href="visit.php" class="nav-link">Visit</a></li>
	          <li class="nav-item"><a href="events.php" class="nav-link">Events</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
			  <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
			  <!-- session for admins and users -->
              <?php 
				if(isset($_SESSION['admin'])){
				 echo '  <li class="nav-item dropdown"><a href="admin-account.php" id="dropdown04" class="nav-link"><span class="icon-person"></span></a>
				 <div class="dropdown-menu" aria-labelledby="dropdown04">
				  <a class="dropdown-item" href="logout.php">Logout</a></div>';
				} elseif(isset($_SESSION['user'])){
					echo '  <li class="nav-item dropdown"><a href="collectors.php" id="dropdown04" class="nav-link"><span class="icon-person"></span></a>
					<div class="dropdown-menu" aria-labelledby="dropdown04">
					 <a class="dropdown-item" href="logout.php">Logout</a></div>';
				} else{
				echo '<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>';	
				}
			  ?>
              </ul>
            </div>
	    </div>
	  </nav>