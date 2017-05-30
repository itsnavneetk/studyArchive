<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>subscription</title>


	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/userD.css">

</head>

<body>

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
			$fname = "nobody";

		}

		?>


		<div class="login-wrap" >
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Subscription</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
				<div id="disp1">
					<h3 style="color: white;">Howdy, <?php  echo $fname.'!'; ?></h3> 

					<div id="thumb11">
						<font color="black">Payment for course ID : <?php 
							if(isset($_SESSION['cID'])){
								$cID = $_SESSION['cID'];
								$ename = $_SESSION['email'] ;
							}
							echo $cID;
							?>
							<p>
								Course name: ___ <br><br>
								Your <br> subscription <br> expires in : <br> <?php echo "__months __ days"; ?>
							</p>
						</font>
					</div>

					<div id="thumb21">
						<font color="black">Annual<br> membership</font>
						<a href="">
							<div id="c211">
								<font color="black">Rs. 500 <br>year</font>
							</div>
						</a>
						<a href="">
							<div id="c212">
								<font color="black">Rs. 300 <br> for 6months</font>
							</div>
						</a>
					</div>



					<div id="thumb31">

								<a type="submit" class="button" href="index.html" value="pay" style="margin-top: 25px; ">Logout</a>
								<?php
								?>
					</div>




				</div>
			</div>
		</div>

		
			
	</body>
	</html>
