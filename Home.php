<!DOCTYPE html>
<html>
<head>
	<title>Big Hospital</title>
	<link rel="stylesheet" type="text/css" href="Styles1.css">
	<script type="text/javascript" src="Hospital.js"></script>

</head>
<body>
	<div class="menubar">
		<ul class="menubarsize">
			<li class="active "> <a href="#"> <img src="icons\images (4).png" height="30px">HOME</a></li>
			<li><a href="#">PATIENT</a>
				<div class="sub-menu">	
		   <ul>
			<li class="hover-me"><a href="#">INPATIENT</a>
					<div class="sub-menu2">	
		   <ul>
			<li><a href="#">CONSOLTANCY</a></li>
			<li><a href="#">CHECKUP</a></li>
			</ul>
		</div>
	</li>
			<li class="hover-me"><a href="#">OUTPATIENT</a>
					<div class="sub-menu2">	
		   <ul>
			<li><a href="#">WORD</a></li>
			<li><a href="#">ICU</a></li>
			</ul>
		</div>
	</li>
			</ul>
		</div>

			</li>
			<li><a href="#">DOCTORS</a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#" onclick="openbooking()">BOOK DOCTOR</a></li>
			<li><a href="#">VIEW DOCTORS</a></li>
			<li class="hover-me"><a href="#">DEPARTMENT</a>
						<div class="sub-menu2">	
		   <ul>
			<li><a href="#">DENTAL</a></li>
			<li><a href="#">X-RAY</a></li>
			<li><a href="#">THERAPY</a></li>
			<li><a href="#">CT-SCAN</a></li>
			</ul>
		</div>

			</li>
			<li><a href="#" onclick="openbookingdetails()">EDIT BOOKINGS</a></li>
			</ul>
		</div>

			</li>
			<li><a href="#"><img src="icons\helth.png" height="30px"> MEDICATION</a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#" onclick="openmedication()">PRESCRIPTION</a></li>
			<li><a href="#" onclick="openmedication()">HEALTH RECORDS</a></li>
			</ul>
		</div>
	</li>
			<li><a href="#">BOOKINGS</a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#" onclick="openbookingdetails()">MY BOOKINGS</a></li>
			<li><a href="#" onclick="openbookingdetails()">TIME</a></li>
			<li><a href="#" onclick="openbookingdetails()">CANCEL BOOKINGS</a></li>
			</ul>
		</div>
	</li>
			<li><a href="#">PAYMENTS</a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#">M-PESA</a></li>
			<li><a href="#">CHEQUE</a></li>
			<li><a href="#">ACCOUNT NO</a></li>
			<li><a href="#">VISA CARD</a></li>
			</ul>
		</div>
	</li>
			<li><a href="#">MEDICAL COVER</a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#">NHIF</a></li>
			<li><a href="#">INSURANCE</a></li>
			</ul>
		</div>
	</li>
			<li><a href="#">CONTACT US</a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#"><img src="icons\phone.jpg" height="30px">PHONE</a></li>
			<li><a href="https://mail.google.com/mail"><img src="icons\images (1).png" height="30px"> EMAIL</a></li>
			<li><a href="#"><img src="icons\twitter.png" height="30px"> TWITTER</a></li>
			</ul>
		</div></li>
		<li><a href="#">MATERNITY</a>
					<div class="sub-menu">	
		   <ul>
			
			<li><a href="#" onclick="openmedication()">CHECK UP</a></li>
			<li><a href="#" onclick="openbooking()">BOOK DOCTOR</a></li>
			</ul>
		</div></li>
		<li><a href="#"><img src="icons\emergency.jpg" height="30px"> EMERGENCY</a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#"><img src="icons\ambulance.jpg" height="30px"> AMBULANCE</a></li>
			<li><a href="#" onclick="openbooking()">BOOK DOCTOR</a></li>
			
			</ul>
			<li><a href="#"><img src="icons\images.png" height="30px"></a>
					<div class="sub-menu">	
		   <ul>
			<li><a href="#"  onclick="opensignup()">SIGN UP</a></li>
			<li><a href="#" onclick="openform()"><img src="icons\login.jpg" height="30px"></a></li>
			<li><a href="#" >GUEST</a></li>
			</ul>
		</div>
	</li>

		</ul>

	</div>
	<div style="background-color: oldlace">
	<center><label style="color: green"><h1>BIG HOSPITAL</h1></label></center><br><br>
</div>
	
		<div class="divleft">
			<h4>About Us :</h4><br>
			<img src="icons\download-1ds.jpg">
		Welcome to <u>BIG HOSPITAL</u> where we value your life and health , With us you be sure of care and observation.<br>with us you get : <br>
		<ul type="i">
			<li>Dental medicatin</li>
			<li>Check up</li>
			<li>Clinical medication</li>
			<li>Surgery</li>
			<li>X-ray</li>
			<li>CT-Scan</li>
			<li>Imunization</li>
		</ul><br><br>
		<u><label><h3>location</h3></label></u><br>
		<label><h4>Contry :<i>Kenya</i> </h4></label>
		<label><h4>Region :<i>Western</i> </h4></label>
		<label><h4>County :<i>Bungoma</i> </h4></label><br>
		<label><h4>Our Health Centers</h4></label>
		<h5>Main center</h5> Bungoma
		
	</div>
	<div class="divcenter">
		<img src="icons\micro-scope.jpg" width="400px"><br>
		<label style="color: deeppink">Mission :</label>
		<p>To be a leading world class health facility that offer global services to the public</p>

		<label style="color: deeppink">Goal :</label>
		<p style="font-family: serif;">To reach a big diversity of population in health and care service</p>	
		<center><label style="color: red">FACILITES :</label></center>
		</center>
		<label>Words</label> our facilities meets the requied standards
		<img src="icons\hospital-facility-6.jpg" height="350px">

	</div>
	<div class="divright">
		<h4>Our Media</h4>
		<p>Follow us o our media platforms form more infor,queries,coments and surgestions</p><br>
		<label>PHONE 1 :</label><a href="">0700273632</a><br>
		<label>PHONE 2 :</label><a href="">0715387694</a><br><br>
		<img src="icons\Whatsapp.png" height="60px" ><br>
		<label>Whatsapp : <a href="">0791958878</a> </label><br>
		<img src="icons\twitter.png" height="60px" ><br>
		<label>Twitter : <a href="">@bighospital</a> </label><br><br><br>
		<img src="icons\images (1).png" height="60px" ><br>
		<label>Email : <a href="https://mail.google.com/mail/u/0/">kirwadan03@gmail.com</a> </label><br><br><br>
		<fieldset><legend>your comment</legend>
			<h5>1. How sertified are you on our service </h5>
			<input type="radio" name="feedback">Good<br>
			<input type="radio" name="feedback">Excellent<br>
			<input type="radio" name="feedback">Not Good<br>
			<label for="message">comments</label>
			<textarea name="comments" cols="30"></textarea>
			<input type="submit" name="" value="send" class="submitcomments"><br>


		</fieldset>
		
	</div>
	<div class="form-popup" id="my-form">
	<form action="" method="post" class="form-container">
		<center><i><h1>login</h1></i></center>
		<center>
		<img src="icons\images (2).png" height="50px"><br><br><br>
		<label for="email"><b> USER </b></label><br>
		<select id="loginuser" name="loginusername">
			<option>DOCTOR</option>
			<option>NURSE</option>
			<option>RECEPTION</option>
			<option>ADMIN</option>
		</select><br><br>
		<label for="email"><b>EMAIL/USERNAME </b></label><br>
		<input type="email" name="emailuser" placeholder="enter email" required=""><br><br>
		<label for="password"><b>PASSWORD </b></label><br>
		<input type="PASSWORD" name="PASSWORDuser" placeholder="enter password" required=""><br><br>
		<input type="Checkbox" name="">Show password<br><br>
		<i ><a href="#">Fogoten password </a></i><br><br>
		</center>
		<button type="submit" class="btn" name="login" ><a href="Reception.php"></a>LOGIN</button>
		<button type="submit" class="btncancel" onclick="closeform()">Close</button>

		<?php
		if(isset($_POST['login']))
	{
		$user = $_POST['emailuser'];
		$pass = $_POST['PASSWORDuser'];
		$useraccount = $_POST['loginusername'];
		$user1 = 'DOCTOR';	
		$user2 = 'RECEPTION';
		$user3 = 'NURSE';
		//$_SESSION['login']=$user;
		//$passmd5 = md5($pass);
		include("Config.php");

		if($conn->connect_error > 0)
		{
			die("Connection Failed: ".$db);
		}
		else
		{
			
			$sql = "SELECT EMAIL, PASSWORD, ACCOUNTTYPE FROM tblsignup WHERE EMAIL = '$user' and PASSWORD = '$pass' and ACCOUNTTYPE = '$useraccount'";
			if(!$result = $conn->query($sql)){
				die("Connection Failed: ".$db);}
			while($row = $result -> fetch_assoc())
				{
					if ($useraccount== $user1) {
						# code...

					
					echo "<script language ='javascript' type='text/javascript'> location.href='Doctor.php' </script>";
					echo 'welcome : $user';
				}elseif ($useraccount== $user2) {
					# code...
					echo "<script language ='javascript' type='text/javascript'> location.href='Reception.php' </script>";
					echo 'welcome : $user';
				}elseif ($useraccount== $user3){
					echo "<script language ='javascript' type='text/javascript'> location.href='Nurse.php' </script>";
					echo 'welcome : $user';

				}else{
					echo "<script language ='javascript' type='text/javascript'> alert ('ACCOUNT NOT DEFINED CONTACT ADMIN')</script>";
				}
				}
				{
					echo "<script language ='javascript' type='text/javascript'> alert('Invalid Username Or Password , $user' ) </script>";
				}
		}
		}
		

		 ?>
	</form>
	
</div>
	<div class="form-popup" id="my-signup">
	<form class="form-signupcontainer" method="post">
		<center><i><h1>signup</h1></i></center>
		<center>
		<img src="icons\images (2).png" height="50px"><br>
		<label for="name"><b>FULL NAME </b></label><br>
		<input type="text" name="fnamesingup" placeholder="enter first name" required="">
		<input type="text" name="mnamesingup" placeholder="enter middle name" >
		<input type="text" name="lnamesingup" placeholder="enter last name" ><br><br>
		<label for="phone"><b>ID Number </b></label><br>
		<input type="phone" name="idnosignup" placeholder="ID number" required=""><br><br>
		<label for="phone"><b>PHONE </b></label><br>
		<input type="phone" name="phonesignup" placeholder="phone number" required=""><br><br>
		<label for="email"><b>EMAIL </b></label><br>
		<input type="email" name="emailsignup" placeholder="enter email" required=""><br><br>
		<label for="account"><b>ACCOUNT</b></label>
		<select name="accountsignup">
			<option>DOCTOR</option>
			<option>NURSE</option>
			<option>SUB-STAFF</option>
			<option>RECEPTION</option>
		</select><br><br>
		<label for="adminpass"><b>ADMI PASSWORD :</b></label><br>
		<input type="text" name="adminpassword" placeholder="enter addmin password" required=""><br><br>
		<label for="password"><b>PASSWORD </b></label><br>
		<input type="password" name="PASSWORD1" placeholder="enter your password" required=""><br><br>
		<label for="password"><b>CONFIRM PASSWORD </b></label><br>
		<input type="password" name="PASSWORD2" placeholder="confirm your password" required=""><br><br>
		<input type="Checkbox" name="Checksignup">Show password<br><br>
		</center>
		<button type="submit" class="btnsignup" name="signupnow">SIGNUP</button>
		<button type="submit" class="btncancelsignup" onclick="closesignup()">Close</button>

		<?php 

		if (isset($_POST['signupnow'])) {
			# code...
			$fnamea=$_POST['fnamesingup'];
			$mnamea=$_POST['mnamesingup'];
			$lnamea=$_POST['lnamesingup'];
			$ida=$_POST['idnosignup'];
			$phonenoa=$_POST['phonesignup'];
			$email= $_POST['emailsignup'];
			$account=$_POST['accountsignup'];
			$adminpass=$_POST['adminpassword'];
			$password1=$_POST['PASSWORD1'];
			$password=$_POST['PASSWORD2'];
			include("Config.php");

			if ($conn->connect_errno>0) {
				# code...
				die("connection failed:".$db);
			}else{

					# code...
					$sql="INSERT INTO tblsignup (FNAME,MNAME,LNAME,IDNUMBER,PHONE,EMAIL,ACCOUNTTYPE,ADMINPASS,PASSWORD) VALUES ('$fnamea','$mnamea','$lnamea','$ida','$phonenoa','$email','$account','$adminpass','$password1')";

					if ($conn->query($sql)) {
						# code...
						echo "<script language ='javascript' type='text/javascript'> location.href='Doctor.php'</script>";
					}else{

						echo 'REGESTRSTION FAILED';
					}

				
			}
	}



	
		 ?>
	</form>
	
</div>
<div class="form-popup" id="my-booking">
	<form class="from-bookingcontainer" method="post" action="">
		<center><i><h1>YOUR BOOKINGS</h1></i></center>
		<center><img src="icons\booking.jpeg" height="65px"></center><br>
		<label>FULL NAME :</label>
		<input type="text" name="firstname" placeholder="first name" required="">
		<input type="text" name="middlename" placeholder="middle name" >
		<input type="text" name="lastname" placeholder="last name"><br><br>
		<label>ID NUMBER :</label>
		<input type="text" name="idnumber" placeholder="id number" required=""><br><br>
		<label>YEAR OF BIRTH :</label>
		<input type="text" name="yearofbirth" placeholder="year of birth" required=""><br><br>
		<label>PHONE:</label>
		<input type="text" name="phonenumber" placeholder="phone number" required=""><br><br>
		<label>DEPARTMENT:</label>
		<select name="department">
					<option>DENTAL</option>
				<option>CLINIC</option>
				<option>THERAPY</option>
				<option>MATERNITY</option>
				<option>IMUNIZATION</option>
			</select><br><br>
		<label>NEED:</label>
		<select name="need">
					<option>CONSOLTATION</option>
				
				<option>TREATMENT</option>
				<option>CHECK UP</option><br><br>
			</select><br><br>
		<label>DATE:</label>
		<input type="date" name="bookdate" placeholder="pick date" required=""><br><br>
			<input type="submit" name="bookdoctor" class="btnbooksubmit" value="SUBMIT">
			<input type="button" name="" class="btnbookclose" value="CANCEL" onclick="closebooking()">	

			<?php

			if (isset($_POST['bookdoctor'])){
			$fnamea = $_POST['firstname'];
			$mnamea= $_POST['middlename'];
			$lnamea=$_POST['lastname'];
			$ida = $_POST['idnumber'];
			$yoba =$_POST['yearofbirth'];
			$phonenoa = $_POST['phonenumber'];
			$depta =$_POST['department'];
			$needa =$_POST['need'];
			$bdatea = $_POST['bookdate'];
			include("Config.php");
			if($conn->connect_errno>0){
				die("connection failed:".$db);
			}else {
				$sql ="INSERT INTO tblbooking (FNAME,MNAME,LNAME,IDNUMBER,YOB,PHONE,DEPARTMENT,NEED,BOOKDATE) VALUES ('$fnamea','$mnamea','$lnamea','$ida','$yoba','$phonenoa','$depta','$needa','$bdatea')";

				if ($conn->query($sql)) {
					# code...
					//echo 'Patient Registered SUCCESFULY';
					echo"<script language ='javascript' type='text/javascript'> alert('Registered SUCCESFULY ' ) </script>";
				}else{
					//echo "Registraion failed";
					echo"<script language ='javascript' type='text/javascript'> alert('Registraion failed !!! ' ) </script>";
				}
			}
			}
			 ?>

	</form>
</div>
<div class="form-popup" id="my-bookings">
	<form class="from-bookingscontainer" method="post">
		<center><label><H1>YOUR BOOKINGS DETAILS</H1></label></center>
			<label>BOOK NUMBER :</label>
		<input type="text" name="booknumber" placeholder="Enter book number"><br><br>
		<input type="submit" name="cancelbook" class="btnbookdetailssubmit" value="SUBMIT">
			<input type="button" name="" class="btnbookdetailsclose" value="CANCEL" onclick="closebookingdetails()">

			<?php 

			if (isset($_POST['cancelbook'])) {
				# code...
				$deletekey = $_POST['booknumber'];
				include("Config.php");
				$sql ="DELETE FROM tblbooking WHERE IDNUMBER = '$deletekey'";
				$resilts = mysqli_query($conn , $sql);
				if ($resilts) {
					# code...
					echo"<script language ='javascript' type='text/javascript'> alert('CANCELED SUCCESFULY ' ) </script>";

				}
				else{
					echo"<script language ='javascript' type='text/javascript'> alert('BOOKING NOT CANCELED ' ) </script>";
				}
				mysqli_close($conn);
			}

			 ?>
	</form>
</div>
<div class="form-popup" id="my-medication">
	<form class="from-medicationcontainer" method="post">
		<center><label><H1>YOUR MEDICATION DETAILS</H1></label></center>
		<p style="color: green">use your temporary patient number to view your deails</p><br><br>
			<label>PATIENT NUMBER :</label>
		<input type="text" name="" placeholder="Enter book number"><br><br>
		<input type="button" name="" class="btnmedicationview" value="VIEW">
			<input type="button" name="" class="btnmedicationclose" value="CANCEL" onclick="closemedication()">


	</form>
</div>

	
	<div style="background-color: teal">
		<center>&copy;<?php echo date('Y');?> &nbsp;&trade;BigHosp<br>
			<i>thank you for being with us </i>
		</center>
	</div>

</body>
</html>