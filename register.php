<?php
session_start();
$email=$_POST["email"];
$fName=$_POST['fname'];
$lName=$_POST['lname'];
$password=$_POST['pass'];
$univ=$_POST['univ'];

$connection=mysqli_connect("localhost","root","","sarchive");


$escapedPW = mysqli_real_escape_string($connection,$password);

# generate a random salt to use for this account
$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
$saltedPW =  $escapedPW . $salt;
///sha256 is a hashing algorithm
$hashedPW = hash('sha256', $saltedPW); 
    
    $sql="insert into user(email, fname, lname, password, salt, university) 
 values ('$email','$fName','$lName','$hashedPW','$salt','$univ')";
    //$result=$conn->query($sql);
    $result = mysqli_query($connection,$sql);
    if($result==true)
        echo "user inserted successfully";
    else
        echo "user insertion error";
    


$query="INSERT INTO registration(email, fname, lname, password, university) VALUES ('$email','$fName','$lName','$password','$univ')";
if(mysqli_query($connection,$query))
{
	$query="INSERT INTO login(email, password) VALUES ('$email','$password')";
	if(mysqli_query($connection,$query)){
	
	echo"Succesfully registered";
	header('Location:index.html'); 		
	}else{
		echo "error!!";
	}

}
else
{
	echo"Some thing went wrong or already registered <br/>";
		echo '<a href="index1.html">try again</a>';

}
//



?>