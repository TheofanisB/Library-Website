<!DOCTYPE html>


<!-- iposelida pou prosthetei ena announcement tipou mag stin vasi -->


<?php
	session_start();
?>
<html lang="en">
	<head>
		<title>Announcement Page &mdash; by ICSD15133 & ICSD15139</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
		<link rel="stylesheet" href="fonts/icomoon/style.css">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		
		<link rel="stylesheet" href="css/jquery.fancybox.min.css">
		
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		
		<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
		
		<link rel="stylesheet" href="css/aos.css">
		
		<link rel="stylesheet" href="css/style.css">
		
	</head>
	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
		
		<div class="site-wrap">
			
			<div class="site-mobile-menu site-navbar-target">
				<div class="site-mobile-menu-header">
					<div class="site-mobile-menu-close mt-3">
						<span class="icon-close2 js-menu-toggle"></span>
					</div>
				</div>
				<div class="site-mobile-menu-body"></div>
			</div>
			
			<div class="border-bottom top-bar py-2 bg-dark"   href="index.php" >
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p class="mb-0">
								<span class="mr-3"><strong class="text-white">Phone:</strong> <a href="tel://#">2273082200</a></span>
								<span><strong class="text-white">Email:</strong> <a href="#">gramicsd@icsd.aegean.gr</a></span>
							</p>
						</div>
						
					</div>
				</div> 
			</div>
			
			<header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">
				
				<div class="container">
					<div class="row align-items-center">
						
						<div class="col-11 col-xl-2">
							<h1 class="mb-0 site-logo"><a href="index.php" class="text-black h2 mb-0">ICSD<span class="text-primary">.</span> </a></h1>
						</div>
						<div class="col-12 col-md-10 d-none d-xl-block">
							<nav class="site-navigation position-relative text-right" role="navigation">
								
								<ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
									<li><a href="index.php" class="nav-link">Home</a></li>
									
									
									<li class="has-children">
										<a href="#about-section" class="nav-link active ">Announcements</a>
										<ul class="dropdown">
											<li><a href="">Search an Announcement</a></li>
											<li class="nav-item active"><a href="add.php">Add an Announcement</a></li>
											<li><a href="delete.php">Delete an Announcement</a></li>
											<li><a href="update.php">Update an Announcement</a></li>
											<li><a href="import.php">Import Announcements</a></li>
											<li><a href="export.php">Export Announcements</a></li>
										</ul>
									</li>
									
								</ul>
							</nav>
						</div>
						
						
						<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
						
					</div>
				</div>
				
			</header>
			<div class="site-section">
				<div class="container">
					<div class="d-flex justify-content-center">
						
						
						
						
						
						<div class="d-flex justify-content-center">
							
							
							<!-- END comment-list -->
							
							<div class="comment-form-wrap pt-5">
								
								<h1> Create an Account </h1>
								<form action="register_plugin.php"  method="post"  class="bg-light p-5 contact-form">
									<center>
										<select id="type_option" name="type_option">
											<option value="publisher">Publisher</option>
											<option value="in_charge">In charge </option>
										</select>
									</center>
									
									<div class="form-group">
										<label for="username">Username*</label>
										<input type="text" class="form-control" name="username" id="username">
									</div>
									<div class="form-group">
										<label for="name">Name*</label>
										<input type="text" class="form-control" name="name" id="name">
									</div>
									<div class="form-group">
										<label for="surname">Surname*</label>
										<input type="text" class="form-control" name="surname" id="surname">
									</div>
									<div class="form-group">
										<label for="password">Password*</label>
										<input type="password" class="form-control" name="password" id="password">
									</div>
									<div class="form-group">
										<input type="submit" value="ADD" class="btn btn-primary btn-md text-white">
									</div>
									
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
			
			<a href="#" class="bg-primary py-5 d-block">
				<div class="container">
				<div class="row justify-content-center">
				<div class="col-md10"><h2 class="text-white">Back to Top</h2></div>
				</div>
				</div>  
			</a>
			
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-5">
									<h2 class="footer-heading mb-4">About Us</h2>
									<p>ΠΑΝΕΠΙΣΤΗΜΙΟ ΑΙΓΑΙΟΥ, Τμήμα Μηχανικών Πληροφοριακών και Επικοινωνιακών Συστημάτων, Καρλόβασι, 83200 Σάμος</p>
								</div>
								<div class="col-md-3 ml-auto">
									<h2 class="footer-heading mb-4">Features</h2>
									<ul class="list-unstyled">
										<li><a href="#">About Us</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
							<form action="#" method="post">
								<div class="input-group mb-3">
									<input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
									<div class="input-group-append">
										<button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="row pt-5 mt-5 text-center">
						<div class="col-md-12">
							<div class="border-top pt-5">
								<p>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script>  All rights reserved | This website was designed by ICSD15133 & ICSD15139 using a Template by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>
							</div>
						</div>
						
					</div>
				</div>
			</footer>
			
		</div> <!-- .site-wrap -->
		
  		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.countdown.min.js"></script>
		<script src="js/bootstrap-datepicker.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		
		<script src="js/typed.js"></script>
		<script>
            var typed = new Typed('.typed-words', {
				strings: ["ICSD","ΜΠΕΣ"],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true
			});
		</script>
		
		<script src="js/main.js"></script>
		
		
		
	</body>
</html>