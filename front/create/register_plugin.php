<!DOCTYPE html>


<!--PLUGIN GIA PROSTHIKI ANNOUNCEMENT TYPOU MAG STIN VASI -->

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
		
		<?php 
			$link =mysqli_connect("localhost","root","","exempt_db");
			if ($link ===false){
				die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
				
			}
			
			
			$username=$_REQUEST['username'];
			$name=$_REQUEST['name'];
			$surname=$_REQUEST['surname'];
			$role = $_POST['type_option'];
			$password = $_REQUEST['password'];
			
			echo "<p>eimai edw me ton </p>" ;
			echo $role;
			if($role=="publisher"){
				$id_role = 2;
				echo "<p>mpika kai egina </p>" ;
			echo $id_role;
			}else if($role == "in_charge"){
				$id_role = 3;
				
				echo "<p>mpika kai egina </p>" ;
			echo $id_role;
			}
			
			echo "<p>to pass einai</p>" ;
			echo $password;
			$result =	"select user_id from users where (username='$username')";
			
			$doresult = mysqli_query($link, $result) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
			
			
			if(mysqli_num_rows($doresult)==0){
				echo "<p>ti tha ginei filaraki 1</p>" ;
					$toDo1 = "insert into users(id_role,username,name,surname,password)VALUES('$id_role', '$username', '$name', '$surname','$password')";
					$result1 = mysqli_query($link, $toDo1) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA VROUME TOUS USERS ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
					echo "<p>ti tha ginei filaraki </p>" ;
				
				
				echo "<p>telika </p>" ;
				echo $id_role;
			?>
			<body>
				<p>Your Account was succesfully submitted!</p>
				<?php
				if($id_role==2){
					?>
					<button class="btn btn-primary btn-md text-white" href="index.php"> <a href="index.php"  class="button">Perfect</a></button>
					<p>ergegeg</p>
					<?php
				}
				else if($id_role==3){
					?>
					<button class="btn btn-primary btn-md text-white"><a href="login.php"  class="button">Perfect</a></button>
					<p>erefesknsafljsndknj</p>
					<?php
				}
			}else{
			echo "<p>Your Account wasn't succesfully submitted!</p>";
			?>
			
			<button onclick="goBack()" class="btn btn-primary btn-md text-white">Go Back</button>
			
			<script>
				function goBack() {
					window.history.back();
				}
			</script>
			<?php
			}
			?>
			
			
			
			<script>
				function goBack() {
					window.history.back();
				}
				</script>
				
			</body>
			</center>
		</html>		