<?php

$dbhost="localhost";
$dbname="sarchive";
$dbuser="root";
$dbpass="";
$conn1=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(mysqli_connect_errno()){
	die("database connection failed:".mysqli_connect_error()."(".mysqli_connect_errno().")");
}



if(!empty($_POST["dID"])){
	$dID = $_POST["dID"];

	//$dID = '1';
	$query = "SELECT * FROM course where dID = $dID";
	$res = mysqli_query($conn1, $query);

	foreach ($res as $cour ) {

		?>

		<option value="<?php echo $cour['cID']; ?>"><?php  echo $cour["cname"]; ?></option>
		
		<?php
	}
		
	}

	//$_SESSION['cID'] =$_POST[''];
	
	?>


