<?php
	//<!--ARXEIO SINDESIS ME TIN VASI -->
 
    $con=mysqli_connect('localhost','root','','exempt_db');
 
    if(!$con)
    {
        die(' Please check your connection with the database'.mysqli_error($con));
    }
?>