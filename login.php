<?php

//error_reporting(0);
//$name=$_POST['name'];
//$pass = $_POST['password'];


?>
<?php
        session_start();

        $dbhost="localhost";
        $dbname="sarchive";
        $dbuser="root";
        $dbpass="";
        $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(mysqli_connect_errno()){
            die("database connection failed:".mysqli_connect_error()."(".mysqli_connect_errno().")");
        }
        ?>
<?php

$username=$_POST['user'];
$password=$_POST['pass'];
$_SESSION['users'] =$_POST['user'];
$query="SELECT * FROM login WHERE email='$username' AND password='$password'";
$result=mysqli_query($conn,$query);


if(mysqli_fetch_row($result))
    {
        
        header('Location: userData.php'); 
    }
else
    {
        
        echo "Wrong username or password <br/>";
        header('Location: index1.html');
    }
        
?>
