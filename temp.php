<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

$dbhost="localhost";
        $dbname="sarchive";
        $dbuser="root";
        $dbpass="";
        $conn1=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(mysqli_connect_errno()){
            die("database connection failed:".mysqli_connect_error()."(".mysqli_connect_errno().")");
        }

?>
<select id="dept" name="dept" class="input" style="position: center;" onchange="getId(this.value);"  >
							<!-- <option value="CS">CS</option>
							<option value="IT">IT</option>
							<option value="ECE"><font color="black">ECE</font></option> -->
							<option value="">Select Department</option>
							<?php

								$query = "SELECT * FROM dept";
								$res = mysqli_query($conn1, $query);

								foreach ($res as $dept1 ) {
									$dID = $dept1['dID'];
							?>

							<option value="<?php echo $dept1["dID"]; ?>"><?php  echo $dept1["dname"]; ?></option>
								
							<?php
								}

							?>
						</select>
						ouside php
						<?php
							echo $dID;
						?>
						</div>
					</div>

			<div class="Course" id="upright">
						<div class="group">
						<label for="Course" class="label"><h3>Course</h3></label>
						<select id="Course" name="Course" class="input" style="position: center; " required>	
							<option value="">Select Course</option>
							<option value=""></option>
						</select>
						</div>
					</div>
				


 <script src="https://code.jquery.com/jquery-1.12.0.min.js" ></script> 
<script>
	function getId(val) {
		alert(val)	;
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
temp space
<p>
:
<?php
session_start();

if(isset($_SESSION['cID'])){
    $name1 = $_SESSION['cID'];
   
   echo "string : ". $name1;
}else{
	echo "no session ";
}


?>
</p>
</body>
</html>
