
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Courses</title>


	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/userD.css">


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

$dept=$_POST['dept'];
$Course=$_POST['Course'];
//$_SESSION['Course'] =$_POST['Course'];
//$cou = $_POST['Course'];
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
						<form action="display.php" method="POST">
							<div id="upleft">

								<div class="group">
									<label for="dept" class="label"><h3>Department</h3></label>
									<select id="dept" name="dept" class="input" style="position: center; color: black; " onchange="getId(this.value);" required >
                            <!-- <option value="CS">CS</option>
                            <option value="IT">IT</option>
                            <option value="ECE"><font color="black">ECE</font></option> -->
                            <option value="">Select Department</option>
                            <?php
                            $query = "SELECT * FROM dept";
                            $res = mysqli_query($conn, $query);

                            foreach ($res as $dept ) {
                                    # code...
                            	?>

                            	<option value="<?php echo $dept['dID']; ?>"><?php  echo $dept["dname"]; ?></option>
                            	<p><?php  echo $dept["dname"]; ?></p>
                            	<?php
                            }
                            ?>
                        </select>
                    </div>
                </div>

                
                
                <div class="Course" id="upright">
                	<div class="group">
                		<label for="Course" class="label"><h3>Course</h3></label>
                		<select id="Course" name="Course" class="input" style="position: center; color: black; " required>    
                			<option value="">Select Course</option>
                			<option value=""></option>
                		</select>
                	</div>
                </div>
                
                
                <div id="below">
                	<div class="group">
                		<input type="submit" class="button" value="Go" style="margin-top: 50px; ">
                	</div>
                </div>
            </form>
            <pre>

            </pre>
            <div id="disp">
            	<div id="info"><br>
            		<?php
            		// checking subscription 
            		$type  = "guest";
            		$subs = "null";	
            		$query111="SELECT * FROM subscription WHERE email = '$name' ";
            		$res=mysqli_query($conn,$query111);
            		if (mysqli_num_rows($res) == 0) {
            			echo "data not available";
            		}
            		else{
            			while($row = mysqli_fetch_assoc($res)) {
            				$type = $row["type"];
            			}

            		}

            		?>

            		<h3><font color="black"><?php echo $type; ?> account</font></h3>
            		<?php
            		if($type=="guest"){
            			echo "<a href='subs.php'>"?><pre>	Upgrade to premium</pre><?php "</a>";
            		}else{
            			echo ""?><pre>					   </pre><?php "</a>";
            		}

            		?>

            		<?php


            		$query="SELECT * FROM courseDetails WHERE cID = $Course";
            		$result11=mysqli_query($conn,$query);
            		foreach ($result11 as $cour ) {

            			?>
            			<div>
            				<p value="<?php echo $cour['cname']; ?>"><br><hr><?php  echo $cour["text"]; ?></p>
            				<hr>
            			</div>
            			<?php
            		}


            		$_SESSION['cID'] = $Course;
            		$_SESSION['email'] = $name;
            		?>

            	</div>
            	<?php  
                //premium account
            	if($type=="premium"){

            		?>
            		
            		<form action="" >
            			
            			<a href="content/vid.php">
            				<div id="thumb1">
            					<font color="black">Video: Intro</font>
            				</div>
            			</a>

            			<a href="content/demo.php">
            				<div id="thumb2">
            					<font color="black">course demo</font>
            				</div>
            			</a>

            			<a href="content/qpaper.php">
            				<div id="thumb3">
            					<font color="black">Previous year papers</font>
            				</div>
            			</a>

            			<a href="content/modules.php">
            				<div id="thumb4">
            					<font color="black">Study Material</font>
            				</div>
            			</a>

            		</form>

            		<?php
            	}
            	else{
            		?>
            		
            		<form action="" >
            			
            			<a href="content/vid.php">
            				<div id="thumb1">
            					<font color="black">Video: Intro</font>
            				</div>
            			</a>

            			<a href="content/demo.php">
            				<div id="thumb2">
            					<font color="black">course demo</font>
            				</div>
            			</a>

            			<a href="subs.php">
            				<div id="thumb3">
            					<font color="black">Previous year papers</font>
            				</div>
            			</a>

            			<a href="subs.php">
            				<div id="thumb4">
            					<font color="black">Study Material</font>
            				</div>
            			</a>

            		</form>
            		<?php

            	}
            	?>
            </div>                               
            <div class="foot-lnk" style="margin: 120px;">
            	<br>
            	<a id="Logout" href="index.html" style="color: black; ">Logout</a>
            </div>


        </div>

    </div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-1.12.0.min.js" ></script> 
<script>
	function getId(val) {
        //alert(val)    ;
        $.ajax({
        	type: "POST",
        	url: "getData.php",
        	data: "dID="+val,
        	success: function(data){
        		$("#Course").html(data);
        	}

        });
    }
</script>


</body>
</html>
