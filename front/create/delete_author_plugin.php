<center>
	<!--PLUGIN GIA NA GINEI PROSTHIKI TOU Announcement TYPOY OTHER STIN VASI  -->
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
	<?php 
		$link =mysqli_connect("localhost","root","","exempt_db");
		if ($link ===false){
			die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
			
		}
	?>
	
	
	
    <?php
		$surname= $_REQUEST['surname'];
		$p_url= $_REQUEST['p_url'];
		
		
		$toDo2 = "select author_id from author where surname='$surname' and url_personal='$p_url'"; 
		$doresult2 = mysqli_query($link, $toDo2) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME EPILEXOUME STON PINAKA ANNOUNCEMENT  TO announcement_id todo2 "));
		
		if(mysqli_num_rows($doresult2)==0){
			$message = "NOT DELETED!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<p>Author wasn't succesfully deleted!";
		}else{
			$toDo1 = "delete from author where (surname='$surname' and  url_personal='$p_url')";
			$doresult1= mysqli_query($link, $toDo1) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME PROSTHESOUME AUTHOR ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
			echo "<p>Author was succesfully deleted!</p>";
			
		}
		
	?>
	
	<body>
		
		
		<button onclick="goBack()" class="btn btn-primary btn-md text-white">Go Back</button>
		
		<script>
			function goBack() {
				window.history.back();
			}
		</script>
		
	</body>
</center>
</html>