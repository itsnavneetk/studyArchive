<!DOCTYPE html>
<html>
<head>
	<title>videos</title>
</head>
<body>
hello world !! this is video page
you are in course id 

<?php
session_start();


	$name = $_SESSION['users'];
	$Course = $_SESSION['cID'];
    $ename = $_SESSION['email'];

    echo "string".$ename."   ".$Course;
?>
</body>
</html>