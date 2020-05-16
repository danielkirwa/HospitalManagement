<!DOCTYPE html>
<html>
<head>
	<title>Big Hospital Reception</title>
	<link rel="stylesheet" type="text/css" href="Styles1.css">
	<script type="text/javascript" src="Hospital.js"></script>
</head>
<body style="background-color: teal">
<div class="menubar">
		<ul class="menubarsize">
			<li class="active "> <a href="#"> <img src="icons\images (4).png" height="30px">RECEPTION</a></li>
			
			
			<li><a href="#">BOOKINGS</a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#">VIEW BOOKINGS</a></li>
			<li><a href="#" onclick="openbooking()">ADD BOOKING</a></li>
			<li><a href="#" onclick="openbookingdetails()">CANCEL BOOKINGS</a></li>
			</ul>
		</div>
	</li>
		<li><a href="#"><img src="icons\emergency.jpg" height="30px"> EMERGENCY</a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#"><img src="icons\ambulance.jpg" height="30px"> AMBULANCE</a></li>
			
			
			</ul>
			<li><a href="#"><img src="icons\images.png" height="30px"></a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#">SCHEDULE</a></li>
			<li><a href="Profile.php">PROFILE</a></li>
			<li><a href="Home.php">LOGOUT</a></li>
			</ul>
		</div>
	</li>

		</ul>

	</div>
	<div class="head">

		<label><h1>BIG HOSPITAL</h1></label>
	</div>
	<div class="patient-details">
		<form action="" method="post">
		<center><label><i>PATIENT DETAILS :</i></label></center>
		
		<label>FULL NAME :</label>
		<input type="text" name="firstname" placeholder="enter firstname" required="">
		<input type="text" name="middlename" placeholder="enter middlename">
		<input type="text" name="lastname" placeholder="enter lastname"><br><br>
		<label>ID NUMBER :</label>
		<input type="text" name="idnumber" placeholder="enter idnumber"><br><br>
		<label>YEAR OF BIRTH :</label>
		<input type="text" name="yearofbirth" required=""><br><br>
		<label>LOCATION :</label>
		<input type="text" name="locationarea" placeholder="enter location" required=""><br><br>
		<label>GENDER :</label>
			<select name="gender">
					<option>MALE</option>
				<option>FEMALE</option>
			</select><br><br>
		<label>PHONE :</label>
		<input type="phone" name="phone"><br><br>
		<div calss="reception-infor">
			<label>DEPARTMENT :</label>
			<select name="department">
					<option>INPATIENT</option>
				<option>OUTPATIENT</option>
				
			</select><br><br>
			<label>NEED :</label>
			<select name="need">
					<option>DENTAL</option>
				<option>CLINIC</option>
				<option>CHECK UP</option>
				<option>THERAPY</option>
				<option>MATERNITY</option>
				<option>IMUNIZATION</option>
			</select><br><br>
			<label><b>patient No : </b></label>
			<input type="text" name="patientno" placeholder="patient number" id="patientNolabel" required="">
			<p ></p><br><br>

			<button class="btnreception" name="registerpatient">REGISTER</button>
			<button class="btnreception">RESET</button>
			<button class="btnreceptionemergency">EMERGENCY</button>
			
			
		</div>

			<?php

			if (isset($_POST['registerpatient'])) {
				# code...
			$fnamea = $_POST['firstname'];
			$mnamea= $_POST['middlename'];
			$lnamea=$_POST['lastname'];
			$ida = $_POST['idnumber'];
			$yoba =$_POST['yearofbirth'];
			$locationa = $_POST['locationarea'];
			$gender =$_POST['gender'];
			$phonea =$_POST['phone'];
			$depart = $_POST['department'];
			$needa = $_POST['need'];
			$patientnoa=$_POST['patientno'];
			include("Config.php");

			if($conn->connect_errno>0){
				die("connection failed:".$db);
				
			}else{
				$sql = "INSERT INTO tblpatient (FNAME,MNAME,LNAME,IDNUMBER,YOB,LOCATION,GENDER,PHONE,DEPARTMENT,NEED,PATIENTNO) VALUES ('$fnamea','$mnamea','$lnamea','$ida','$yoba','$locationa','$gender','$phonea','$depart','$needa','$patientnoa')";
				if ($conn->query($sql)) {
					# code...
					echo"<script language ='javascript' type='text/javascript'> alert('Registered SUCCESFULY  PATIENT NUMBER IS : ,$patientnoa' ) </script>";
				}else{
					echo"<script language ='javascript' type='text/javascript'> alert('Registeration failed ' ) </script>";
				}

			}
			}


			 ?>

		</form>

	</div>

	<div class="form-popup" id="my-bookings">
	<form class="from-bookingscontainer" method="post">
		<center><label><H1>ENTER PATIENT BOOK NUMBER</H1></label></center>
			<label>BOOK NUMBER :</label>
		<input type="text" name="booknumber" placeholder="Enter book number"><br><br>
		<input type="submit" name="cancelbook" class="btnbookdetailssubmit" value="CANCEL BOOKING">
			<input type="button" name="" class="btnbookdetailsclose" value="CLOSE" onclick="closebookingdetails()">

			<?php 

			if (isset($_POST['cancelbook'])) {
				# code...
				$deletekey = $_POST['booknumber'];
				include("Config.php");
				$sql ="DELETE FROM tblbooking WHERE IDNUMBER = '$deletekey'";
				$resilts = mysqli_query($conn , $sql);
				if ($resilts) {
					# code...
					echo"<script language ='javascript' type='text/javascript'> alert('BOOK CANCELED SUCCESFULY ' ) </script>";

				}
				else{
					echo"<script language ='javascript' type='text/javascript'> alert('BOOKING NOT CANCELED ' ) </script>";
				}
				mysqli_close($conn);
			}

			 ?>

	</form>
</div>
<div class="form-popup" id="my-booking">
	<form class="from-bookingcontainer">
		<center><i><h1>PATIENT BOOKINGS</h1></i></center>
		<center><img src="icons\booking.jpeg" height="65px"></center><br>
		<label>FULL NAME :</label>
		<input type="text" name="" placeholder="first name">
		<input type="text" name="" placeholder="middle name">
		<input type="text" name="" placeholder="last name"><br><br>
		<label>ID NUMBER :</label>
		<input type="text" name="" placeholder="id number"><br><br>
		<label>YEAR OF BIRTH :</label>
		<input type="text" name="" placeholder="year of birth"><br><br>
		<label>PHONE:</label>
		<input type="text" name="" placeholder="phone number"><br><br>
		<label>DEPARTMENT:</label>
		<select>
					<option>DENTAL</option>
				<option>CLINIC</option>
				<option>CHECK UP</option>
				<option>THERAPY</option>
				<option>MATERNITY</option>
				<option>IMUNIZATION</option>
			</select><br><br>
		<label>NEED:</label>
		<select>
					<option>CONSOLTATION</option>
				<option>CLINIC</option>
				<option>TEARTMENT</option><br><br>
			</select><br><br>
			<input type="button" name="" class="btnbooksubmit" value="ADD BOOKING">
			<input type="button" name="" class="btnbookclose" value="CLOSE" onclick="closebooking()">		
	</form>
</div>

</body>
</html>