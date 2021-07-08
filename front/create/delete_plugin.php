<center>
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
	<!--PLUGIN GIA NA GINEI PROSTHIKI TOU Announcement TYPOY OTHER STIN VASI  -->
	
    <?php 
		$link =mysqli_connect("localhost","root","","exempt_db");
		if ($link ===false){
			die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
			
		}
	?>
	
	
	
    <?php
		
		
		/*$id_title= $_REQUEST['id_title'];
		$author= $_REQUEST['author'];
		$surname= $_REQUEST['surname'];*/
		
		$atitle=$_REQUEST['atitle'];
		$url=$_REQUEST['url'];
		$key=$_REQUEST['key'];
		
		
		
		//$type_option=$_REQUEST['type_option'];
		
		
		/*$toDo1 = "select author_id from author where id_title='$id_title' and name='$author' and surname='$surname'"; 
		$result1 = mysqli_query($link, $toDo1) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME EPILEXOUME TO author_id STON PINAKA author todo2 "));*/

		$toDo2 = "select announcement_id from announcement where title='$atitle' and url='$url' and announcement_key='$key'"; 
		$doresult2 = mysqli_query($link, $toDo2) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME EPILEXOUME STON PINAKA ANNOUNCEMENT  TO announcement_id todo2 "));

		if(mysqli_num_rows($doresult2)==0){
			$toDo2 = "select announcement_id from announcement where title='$atitle'"; 
			$doresult3 = mysqli_query($link, $toDo2) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
			if(mysqli_num_rows($doresult3)==0){
				$message = "NOT EXISTS!";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else{
				$toDo3 ="delete from announcement where (announcement_id=(select announcement_id from announcement where title='$atitle' and url='$url' and announcement_key='$key'))";
				$deleteresult = mysqli_query($link, $toDo3) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME EPILEXOUME STON PINAKA ANNOUNCEMENT  TO announcement_id todo2 "));
			}
		}else{
			$toDo3 ="delete from announcement where (announcement_id=(select announcement_id from announcement where title='$atitle' and url='$url' and announcement_key='$key'))";
			$deleteresult = mysqli_query($link, $toDo3) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME EPILEXOUME STON PINAKA ANNOUNCEMENT  TO announcement_id todo2 "));
		}
	?>

<body>
	
	<p>Book was succesfully submitted!</p>
	<button onclick="goBack()" class="btn btn-primary btn-md text-white">Go Back</button>
	
	<script>
	function goBack() {
		window.history.back();
	}
</script>

</body>
</center>
</html>