<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="styles2.css">
	<link rel="stylesheet" type="text/css" href="Styles1.css">
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
<div class="sidebar">
	<header>MENU</header>
<ul>
	<li class="active"><a href="#">My Profile</a></li>
	<li><a href="Doctor.php">My account</a></li>
	<li><a href="#">My Patient</a></li>
	<li><a href="#">X-ray</a></li>
	<li><a href="#">Therapy</a></li>
	<li><a href="#">CT-Scan</a></li>
	<li><a href="Inpatient.php">Inpatient</a></li>
	<li><a href="#">My Schedule</a></li>
	
	
</ul></div>

<div class="divprofileinfor">
		<center><img src="icons/images.png" height="70px"></center>
		<label><b><i>username :</i></b></label><label>Daniel</label><br><br>
		<label><b><i>position :</i></b></label><label>Doctor</label><br><br>
		<label><b><i>status :</i></b></label><label>active</label><br><br>
		<label><b><i>gender :</i></b></label><label>male</label><br><br>
		<label><b><i>age :</i></b></label><label>35</label><br><br>
		<label><b><i>phone :</i></b></label><label>07xxxxxxx</label><br><br>
		<label><b><i>email :</i></b></label><label>@gmail.com</label><br><br>
		<label><b><i>location :</i></b></label><label>N/A</label><br><br>
		<button id="editprofile">Edit my profile</button>
		
	</div>
	<div class="divprofiledata">
		<center>
		<h1><i><label>loged in as :</label></i></h1><label id="logedas"></label></center>
		<center><h3><u>Your Schedual</u></h3></center><br><br>
		<table border="1">
			<tr>
			<th>TIME</th>

		<th>MONDAY</th>
		<th>TUESDAY</th>
		<th>WEDNESDAY</th>
		<th>THURSDAY</th>
		<th>FRIDAY</th>
		<th>SATURDAY</th>
		<th>SUNDAY</th></tr>
		<tr>
			<td><b>8:00am/1:00pm</b></td>
			<td>active</td>
			<td>active</td>
			<td>off</td>
			<td>active</td>
			<td>active</td>
			<td>off</td>
		</tr>
		<tr>
			<td><b>2:00pm/5:00pm</b></td>
			<td>active</td>
			<td>active</td>
			<td>off</td>
			<td>active</td>
			<td>off</td>
			<td>off</td>
		</tr>
		<tr>
			<td><b>6:00pm/6:00am</b></td>
			<td>off</td>
			<td>off</td>
			<td>off</td>
			<td>off</td>
			<td>off</td>
			<td>off</td>
		</tr>

		</table>
	</div>

</body>
</html>