<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="styles/basic/style.css" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
	session_start();


    switch ($_SESSION['id_role']) {
        case 1: //admin
            header("Location: index.php");
            exit();
            break;
        case 2: //publisher
            header("Location: publisher.php");
            exit();
            break;
        case 3: //in_charge
            header("Location: in_charge.php");
            exit();
            break;
        case 4: //guest
            header("Location: guest.php");
            exit();
            break;
    }
?>