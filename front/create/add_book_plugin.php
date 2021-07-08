<html>
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
	<center>
		<!-- PLUGIN GIA PROSTHIKI ANNOUNCEMENT TIPOU BOOK STIN VASI-->
		
		<?php 
			$link =mysqli_connect("localhost","root","","exempt_db");
			if ($link ===false){
				die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
				
			}
			
			$id_title= $_REQUEST['id_title'];
			$author= $_REQUEST['author'];
			$surname= $_REQUEST['surname'];
			$orcid_url= $_REQUEST['orcid_url'];
			$p_url= $_REQUEST['p_url'];
			$role= $_REQUEST['role'];
			
			$atitle=$_REQUEST['atitle'];
			$year=$_REQUEST['year'];
			$month=$_REQUEST['month'];
			$note=$_REQUEST['note'];
			$b_url=$_REQUEST['b_url'];
			$key=$_REQUEST['key'];
			
			$editor=$_REQUEST['editor'];
			$volume=$_REQUEST['volume'];
			$number=$_REQUEST['number'];
			$series=$_REQUEST['series'];
			$address=$_REQUEST['address'];
			$edition=$_REQUEST['edition'];
			$isbn=$_REQUEST['isbn'];
			$issn=$_REQUEST['issn'];
			
			$result =	"select author_id from author where (surname='$surname')";
			
			$doresult = mysqli_query($link, $result) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
			
			
			if(mysqli_num_rows($doresult)==0){
				$toDo1 = "insert into author(id_title,name,surname,orcid_url,url_personal,role)VALUES('$id_title', '$author', '$surname','$orcid_url','$p_url', '$role')";
				$result1 = mysqli_query($link, $toDo1) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
			}
			$result2 =	"select announcement_id from announcement where (title='$atitle')";
			
			$doresult2 = mysqli_query($link, $result2) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
			
			
			if(mysqli_num_rows($doresult2)==0){
				$toDo2 =	"insert into announcement(author_id, type, title, year, month, note, url, announcement_key) values ((SELECT author_id from author WHERE surname='$surname'),'book', '$atitle', '$year', '$month', '$note', '$b_url', '$key')";
				$result3 = mysqli_query($link, $toDo2) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
			}
			$result4 =	"select ISBN from book where (ISBN='$isbn')";
			$doresult3 = mysqli_query($link, $result4) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
			
			if(mysqli_num_rows($doresult3)==0){
				$toDo3 = "insert into book(announcement_id, publisher, volume, number, series, address, edition, month, ISBN, ISSN) values ((SELECT announcement_id from announcement WHERE title='$atitle'),'$editor', '$volume','$number','$series', '$address', '$edition', '$month', '$isbn', '$issn')";
				$result5 = mysqli_query($link, $toDo3) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo3 "));
				echo "<p>Book was succesfully submitted!</p>";
			}
			else{
				$message = "NOT INSERTED!";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<p>Book wasn't succesfully submitted!</p>";
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