<?php 
	
	//<!-- METHODOS GIA SINDESI KAPOIOU XRISTI KATA TO LOGIN -->
	require_once('connection.php');
	session_start();
    if(isset($_POST['Login']))
    {
		if(empty($_POST['UName']) || empty($_POST['Password']))
		{
            header("location:login.php?Empty= Please Fill in the Blanks");
			?>
			<script >
			
			function whichType(event)
			{
				alert(event.type)
			}
			
			var myWindow = window.open("", "myWindow", "width=200, height=100");
			
			// Write some text in the new window
			myWindow.document.write("<p>This is 'myWindow'</p>");     
			
			// Write some text in the window that created the new window            
			myWindow.opener.document.write("<p>This is the source window!</p>"); 
			</script>
			
			<?php
		}
		else
		{
            $query="SELECT * FROM `users` WHERE `username`='".$_POST['UName']."' AND `password`='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);
			
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:index.php?Logged_in_successfully");
			}
            else
            {
                header("location:login.php?Invalid= Please Enter Correct User Name and Password 22222");
			}
		}
	}
    else
    {
        echo 'There was an error in the Process';
	}
	
?>