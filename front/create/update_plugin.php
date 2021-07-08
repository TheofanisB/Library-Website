<center>
	<!--PLUGIN GIA NA GINEI PROSTHIKI TOU Announcement TYPOY OTHER STIN VASI  -->

    <?php 
		$link =mysqli_connect("localhost","root","","exempt_db");
		if ($link ===false){
			die("ERROR: COULD NOT CONNECT TO THE DATABASE".mysqli_connect_error() ) ;
			
		}
	?>

   

    <?php
	
	//AUTHOR
	$old_id_title= $_REQUEST['old_id_title'];
	$old_author= $_REQUEST['old_author'];
	$old_surname= $_REQUEST['old_surname'];
	$old_orcid_url= $_REQUEST['old_orcid_url'];
	$old_p_url= $_REQUEST['old_p_url'];
	$old_role= $_REQUEST['old_role'];
	
	$new_id_title= $_REQUEST['new_id_title'];
	$new_author= $_REQUEST['new_author'];
	$new_surname= $_REQUEST['new_surname'];
	$new_orcid_url= $_REQUEST['new_orcid_url'];
	$new_p_url= $_REQUEST['new_p_url'];
	$new_role= $_REQUEST['new_role'];
	
	//ANNOUNCEMENT
	$old_atitle=$_REQUEST['old_atitle'];
	$old_year=$_REQUEST['old_year'];
	$old_month=$_REQUEST['old_month'];
	$old_note=$_REQUEST['old_note'];
	$old_url=$_REQUEST['old_url'];
	$old_key=$_REQUEST['old_key'];
	
	$new_atitle=$_REQUEST['new_atitle'];
	$new_year=$_REQUEST['new_year'];
	$new_month=$_REQUEST['new_month'];
	$new_note=$_REQUEST['new_note'];
	$new_url=$_REQUEST['new_url'];
	$new_key=$_REQUEST['new_key'];
	
	$toDo0 =	"select * from author where (surname='$old_surname' and url_personal='$old_p_url')";
	$result0= mysqli_query($link, $toDo0) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA KANOUME MODIFY ENO EXOUME SINDETHEI ME TIN VASI todo1 "));

	if($result0){
		$toDo1 = "update author set id_title='$new_id_title',name='$new_author', surname='$new_surname', orcid_url='$new_orcid_url', url_personal='$new_p_url', role='$new_role' where (surname='$old_surname' AND url_personal='$old_p_url')";
		$doresult0=mysqli_query($link, $toDo1) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA KANOUME MODIFY TON AUTHOR ENO EXOUME VREI OTI IPARXEI KAI  EXOUME SINDETHEI ME TIN VASI todo1 "));
	}
	
	$toDo2 =	"select * from announcement where (title='$old_atitle')";
	$result1= mysqli_query($link, $toDo2) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA KANOUME SELECT TA ANNOUNCEMENTS ME VASI TA KRITIRIA  ENO EXOUME SINDETHEI ME TIN VASI todo1 "));
	
	if($result1){
	echo "<p>mpika telika</p>";
		$toDo3 = "update announcement set title='$new_atitle', year='$new_year', month='$new_month', note='$new_note', url='$new_url',announcement_key='$new_key' where (title='$old_atitle')";
		$doresult1=mysqli_query($link, $toDo3) or die(header("HOUSTON WE HAVE A PROBLEM DEN MPOROUSAME NA KANOUME MODIFY ANNOUNCEMENT ME VASI TA KRITIRIA ENO EXOUME SINDETHEI ME TIN VASI KAI EXOUME VREI OTI IPARXOYN ANNOUNCEMENTS ME AFTA TA XARAKTIRISTIKA todo1 "));

	}
	
	
?>
<p>edw kolisa</p>
   <p>efiga</p>
</center>
<body>

<p>The announcement  was succesfully edited!</p>
<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

</body>
</html>