<!DOCTYPE html>
<!--// PLUGIN POU XRISIMOPOIEITAI STIN INDEX.PHP OTAN KAPOIOS XRISIMOPOIEISEI TIN FORMA EPIKOINONIAS 
// OTAN PATAEI TO KOUMPI PETAEI TON XRISTI SE AFTIN TIN SELIDA -->


<?php 
	$link =mysqli_connect("localhost","root","","exempt_db");
	if ($link ===false){
		die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
		
	}

	
	
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$email=$_REQUEST['email'];
	$subject=$_REQUEST['subject'];
	$message=$_REQUEST['message'];
	
	 
	
	$toDo ="INSERT INTO contact(fname,lname,email,subject,message)VALUES ('$fname','$lname','$email','$subject','$message')";
	
	$query=mysqli_query($link,$toDo)or die("ERROR: Could not append data to the database! ".mysqli_connect_error());
	
	
	?>
	<html>
<body>



<p>Your message was succesfully sent!</p>
<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>