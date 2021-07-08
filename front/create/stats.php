



<!-- SELIDA POU THA EMFANIZONTAI TA STATISTIKA-->


<?php
	//include "connect.php";
	$connect = new PDO("mysql:host=localhost;dbname=exempt_db", "root", "");
	
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
									<li><a href="check.php" class="nav-link">Home</a></li>
									
									
									<li class="has-children">
										<a href="#about-section" >Announcements</a>
										<ul class="dropdown">
											<li><a href="search.php">Search an Announcement</a></li>
											<li><a href="add.php">Add an Announcement</a></li>
											<li><a href="delete.php">Delete an Announcement</a></li>
											<li><a href="update.php">Update an Announcement</a></li>
											<li><a href="import.php">Import Announcements</a></li>
											<li><a href="export.php">Export Announcements</a></li>
											
										</ul>
									</li>
									<li><a href="stats.php" class="nav-item active">Stats</a></li>
									
								</ul>
							</nav>
						</div>
						
						
						<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
						
					</div>
				</div>
				
			</header>
			<div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row align-items-center justify-content-center text-center">
						
						<div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
							
							<div class="row justify-content-center mb-4">
								<div class="col-md-8 text-center">
									<h1>University of The Aegean   </br>    <span class="typed-words"></span></h1>
									<p class="lead mb-5">ICSD15133 & ICSD15139 </p>
									<div><a data-fancybox data-ratio="2" href="https://www.youtube.com/watch?v=TR831EYWwWA" class="btn btn-primary btn-md">Watch Video</a></div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>  
			
			
			
			
			
			<div class="site-section">
				<div class="container">
					<div class="d-flex justify-content-center">
						
						
						
						
						
						
						
						<?php  
							
							
							
							
							
							$query = "SELECT year FROM announcement GROUP BY year DESC";
							
							$statement = $connect->prepare($query);
							
							$statement->execute();
							
							$result = $statement->fetchAll();
							
						?>  
						<!DOCTYPE html>  
						<html>  
							<head>  
								<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
								<script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
							</head>  
							<body> 
								<br /><br />
								<div class="container">  
									<h3 align="center">Statistics</h3>  
									<br />  
									
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="row">
												<div class="col-md-9">
													<h3 class="panel-title">Amount of Announcements per Year</h3>
												</div>
												<div class="col-md-3">
													<select name="year" class="form-control" id="year">
														<option value="">Select Year</option>
														<?php
															foreach($result as $row)
															{
																echo '<option value="'.$row["year"].'">'.$row["year"].'</option>';
															}
														?>
													</select>
												</div>
											</div>
										</div>
										<div class="panel-body">
											<div id="chart_area" style="width: 1000px; height: 700px;"></div>
										</div>
									</div>
								</div>  
							</body>  
						</html>
						<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
						<script type="text/javascript">
							google.charts.load('current', {packages: ['corechart', 'bar']});
							google.charts.setOnLoadCallback();
							
							function load_monthwise_data(year, title)
							{
								var temp_title = title + ' '+year+'';
								$.ajax({
									url:"fetch.php",
									method:"POST",
									data:{year:year},
									dataType:"JSON",
									success:function(data)
									{
										drawMonthwiseChart(data, temp_title);
									}
								});
							}
							
							function drawMonthwiseChart(chart_data, chart_main_title)
							{
								var jsonData = chart_data;
								var data = new google.visualization.DataTable();
								data.addColumn('string', 'Amount');
								data.addColumn('number', 'Year');
								$.each(jsonData, function(i, jsonData){
									var month = jsonData.month;
									var profit = parseFloat($.trim(jsonData.profit));
									data.addRows([[month, profit]]);
								});
								var options = {
									title:chart_main_title,
									hAxis: {
										title: "Amount"
									},
									vAxis: {
										title: 'Year'
									}
								};
								
								var chart = new google.visualization.ColumnChart(document.getElementById('chart_area'));
								chart.draw(data, options);
							}
							
						</script>
						
						<script>
							
							$(document).ready(function(){
								
								$('#year').change(function(){
									var year = $(this).val();
									if(year != '')
									{
										load_monthwise_data(year, 'Amount of Announcements with Year :');
									}
								});
								
							});
							
						</script>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
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