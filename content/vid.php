
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Courses</title>


	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/userD.css">


</head>
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
if(isset($_SESSION['users'])){
    $name = $_SESSION['users'];



    $sql = "SELECT fname, lname, university FROM registration where email='".$name."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "sorry";}
        else{
            while($row = mysqli_fetch_assoc($result)) {

                $fname =  $row["fname"];
                $lname =  $row["lname"];
                $university =  $row["university"];
            }

        }


    }   
    else{
        $name = "nobody";

    }

    ?>
    <body>
      <div class="login-wrap1">
         <div class="login-html" style="position: fixed;

         z-index: -1;

         background-size: cover;
         height: 100%;
         width: 100%;">
         <h3 style="color: white;">Howdy, <?php  echo $fname.'!'; ?></h3> 
         <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"><?php echo $university.' '; ?>University</label>
         <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
         
         <div class="login-form">
            <div class="sign-in-htm">
               <div id="wrapper">

                <form action="" >


                    <div id="thumb1paper">
                        <font color="black">Introduction to course</font>
                        <br>
                        <br>

                   		
  <iframe width="560" height="315" src="https://www.youtube.com/embed/y5yRJIc2TCo" frameborder="0" allowfullscreen style="margin-left: 300px;"></iframe>

          
                    </div>
                    
                </form>            
                </div>
            </div>
        </div>
    </div>
</div>

<div class="foot-lnk" style="margin-top: 609px;">
    <br>
        <a id="Logout" href="../userData.php" style="color: black; ">Back</a>
    <a id="Logout" href="../index.html" style="color: black; ">Logout</a>

</div>





</body>
</html>
