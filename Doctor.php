<?php  
	/*session_start();
	$loginuser = $_SESSION['login'];
	if(empty($loginuser)){
		echo "<script type = 'text/javascript'>location.href ='Home.php'</script>";
	}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Big Hospital Doctors</title>
	<link rel="stylesheet" type="text/css" href="styles2.css">
	<script type="text/javascript" src="Hospital.js"></script>
	
</head>
<body>
	<div style="background: deepskyblue"><center>
<u><header><h1>BIG HOSPITAL</h1>
<label style="float: right;"><a href="Home.php">logout</a></label>

</header></u></center></div>
<input type="checkbox" name="" id="check">
<label for="check">
	<i><img src="icons/download-1.png" height="30px" id="btn"></i>
	<i><img src="icons/images-3.png" height="30px" id="cancel"></i>
	
</label>

<div class="sidebar" >
	<header>MENU</header>
<ul>
	<li class="active"><a href="#">My account</a></li>
	<li><a href="#">My Patient</a></li>
	<li><a href="#" onclick="openformxray()">X-ray</a></li>
	<li><a href="#" onclick="openformtherapy()">Therapy</a></li>
	<li><a href="#" onclick="openformct()">CT-Scan</a></li>
	<li><a href="Inpatient.php">Inpatient</a></li>
	<li><a href="#">My Schedule</a></li>
	<li><a href="Profiled.php">My Profile</a></li>
	
</ul></div>
<section>
	<div> <form method="post">
		<div class="controls">
		<button class="clear">CLEAR</button>
		<button class="admit">ADMIT</button>
		<button class="careunit">CARE UNIT</button>
		<button class="appointments">APPOINTMENTS</button>
		
		
	</div>
	<div class="doctorpatient">
		<center><label><h3><i>Patient Data</i></h3></label></center><br>
		<label>Patient ID</label><br>
		<input type="text" name="searchpatient" ><br>
		<input type="submit" name="viewpatient" value="View Patient" id="viewpatient"><br><br>
		<hr>
		<?php 
if(isset($_POST['viewpatient'])){
	$patientno = filter_input(INPUT_POST, 'searchpatient');
	
	


	include("Config.php");
	if(!$conn -> connect_errno >0){
		#echo "Success";
	$sql = "SELECT * FROM tblpatient WHERE patientno = '$patientno'";
	if (!$result = $conn -> query($sql)) {
		# code...
	}
	while ( $row = $result -> fetch_assoc()) {

		$currentage = Date('Y');
		$fname = $row['FNAME'];
		$mname = $row['MNAME'];
		$lname = $row['LNAME'];
		$age= $row['YOB'];
		$gender = $row['GENDER'];
		$location = $row['LOCATION'];
		$newage = $currentage - $age;


		
	}
	//$patientno2=$_POST['searchpatient'];
}//echo $patientno2;
}

 ?>
		<label>PATIENT NO :</label><input type="text" name="patientnoview" value="<?php if(empty($patientno)){echo "Null";}else{echo "   $patientno";}?>" disabled><br><br>
		<label>NAME :</label><input type="text" name="" value="<?php if(empty($patientno)){echo "Null";}else{echo "   $fname";}?>" disabled>
		<input type="text" name="" value="<?php if(empty($patientno)){echo "Null";}else{echo "   $mname";}?>" disabled>
		<input type="text" name="" value="<?php if(empty($patientno)){echo "Null";}else{echo "   $lname";}?>" disabled><br><br>
		<label>AGE :</label><input type="text" name="" value="<?php if(empty($patientno)){echo "Null";}else{echo "   $newage";}?>" disabled><br><br>
		<label>GENDER :</label><input type="text" name="" value="<?php if(empty($patientno)){echo "Null";}else{echo "   $gender";}?>" disabled><br><br>
		<label>LOCATION :</label><input type="text" name="" value="<?php if(empty($patientno)){echo "Null";}else{echo "   $location";}?>" disabled><br><br>
		<label>WEIGHT :</label>
		<input type="" name="weightkgs" > kgs<br><br>
		<label>BP:</label>
		<input type="" name="bpmmhg">mmhg<br><br>
		<hr><br><br>
		<label>LAB :</label><br><textarea style="width: 200px; height: 200px" name="labinfor"></textarea>

	</div>
	<div class="doctorreport">
		<label>Diagnosis</label><br>
		<textarea style="width: 200px; height: 200px" name="Diagnosis" ></textarea><br>
		<label>Prescription</label><br>
		<textarea style="width: 200px; height: 200px" name="Prescription" ></textarea>
		<button class="complete" name="complete" type="submit">COMPLETE</button>
	</div>

	
</form>
<?php 
// post patient details to database

if (isset($_POST['complete'])) {
	# code...
	
	$patientno2 = filter_input(INPUT_POST, 'patientnoview');
	$weight = $_POST['weightkgs'];
	$bp = $_POST['bpmmhg'];
	$diagnosis = $_POST['Diagnosis'];
	$prescription = $_POST['Prescription'];
	$lab = $_POST['labinfor'];
	include('Config.php');
	if ($conn ->connect_errno>0) {
		# code...
		die ("connection failed:".$db);
	}else{
		$sql = "INSERT INTO tblPatientDoctor (WEIGHT,BLOODP,DIAGNOSIS,PRESCRIPTION,LAB,PatientNo) VALUES ('$weight','$bp','$diagnosis','$prescription','$lab','$patientno2')";
		if ($conn->query($sql)) {
			# code...
			echo "<script language ='javascript' type='text/javascript'> alert('COMPLETED SUCCESFULY ' ) </script>";
		}else{
			echo "<script language ='javascript' type='text/javascript'> alert('failed to complete ' ) </script>";
		}

	}


}

?>





		</div>	
</section>
<div class="doctorXRay" id="doctorXray">
	<form method="post" id="xRaycontainer">
	<label><h1>X-Ray</h1></label><br>
	<label>Enter patient details below for X-Ray </label><br><br>
	<label>Enter patient No :</label>
	<input type="text" name="" placeholder="patient number"><br><br>
	<label><b>Date :</b></label>
	<input type="Date" name=""><br><br>
	<button type="submit" id="submitxray">Submit</button>
	<button id="closexray" onclick="closeformxray()">Close</button>

	</form>

</div>
<div class="doctorTHerapy" id="doctortherapy">
	<form method="post" id="Therapycontainer">
	<label><h1>X-Ray</h1></label><br>
	<label>Enter patient details below for  Therapy </label><br><br>
	<label>Enter patient No :</label>
	<input type="text" name="" placeholder="patient number"><br><br>
	<label><b>Date :</b></label>
	<input type="Date" name=""><br><br>
	<button type="submit" id="submittherapy">Submit</button>
	<button id="closetherapy" onclick="closeformtherapy()">Close</button>

	</form>

</div>
<div class="doctorCT" id="doctorct">
	<form method="post" id="Ctcontainer">
	<label><h1>X-Ray</h1></label><br>
	<label>Enter patient details below for  CT-Scan </label><br><br>
	<label>Enter patient No :</label>
	<input type="text" name="" placeholder="patient number"><br><br>
	<label><b>Date :</b></label>
	<input type="Date" name=""><br><br>
	<button type="submit" id="submitct">Submit</button>
	<button id="closect" onclick="closeformct()">Close</button>

	</form>

</div>

</body>
</html>