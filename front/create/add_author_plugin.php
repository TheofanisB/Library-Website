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
		
		
		$id_title=$_REQUEST['id_title'];
		$author=$_REQUEST['author'];
		$surname=$_REQUEST['surname'];
		$orcid_url=$_REQUEST['orcid_url'];
		$p_url=$_REQUEST['p_url'];
		$role=$_REQUEST['role'];
		
		$result =	"select author_id from author where (surname='$surname')";
		
		$doresult = mysqli_query($link, $result) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
		
		
		if(mysqli_num_rows($doresult)==0){
			$toDo1 = "insert into author(id_title,name,surname,orcid_url,url_personal,role)VALUES('$id_title', '$author', '$surname','$orcid_url','$p_url', '$role')";
			$result1 = mysqli_query($link, $toDo1) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
			echo "<p>Author was succesfully submitted!</p>";
		}else{
			echo "<p>Author wasn't succesfully submitted!</p>";
			$message = "NOT SUCCESS!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	?>
	
	<body>
		<button class="btn btn-primary btn-md text-white" ><a href="index.php">Go Back</a></button>
	</body>
</center>
</html>