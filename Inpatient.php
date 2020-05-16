<!DOCTYPE html>
<html>
<head>
	<title>Inpatient big hospital</title>
	<link rel="stylesheet" type="text/css" href="styles2.css">

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
	<li class="active"><a href="#">Inpatient</a></li>
	<li><a href="Doctor.php">My account</a></li>
	<li><a href="#">Patient Report</a></li>
	<li><a href="#">Discharge</a></li>
	<li><a href="#">Add Supervision</a></li>
	<li><a href="#" onclick="openformxray()">X-Ray</a></li>
	<li><a href="#" onclick="openformtherapy()">Therapy</a></li>
	<li><a href="#" onclick="openformct()">CT-Scan</a></li>
	<li><a href="Profiled.php">Transfer</a></li>
	
</ul></div>


<section>
	<div> <form method="post">
		<div class="controls">
		<button class="clear">ATTENDANT</button>
		<button class="admit">LIST</button>
		<button class="careunit">CARE UNIT</button>
		
	</div>
	<div class="doctorpatient">
		<center><label><h3><i>Inpatient data</i></h3></label></center><br>
		<label>Patient ID</label><br>
		<input type="" name="searchpatient"><br>
		<input type="submit" name="viewpatient" value="View Patient" id="viewpatient"><br><br>
		<hr>
		<label>PATIENT NO :</label><input type="text" name="" ><br><br>
		<label>NAME :</label><input type="text" name="" ><input type="text" name="" ><input type="text" name="" ><br><br>
		<label>AGE :</label><input type="text" name="" ><br><br>
		<label>GENDER :</label><input type="text" name="" ><br><br>
		<label>LOCATION :</label><input type="text" name="" ><br><br>
		<label>WEIGHT :</label>
		<input type="" name="">kgs<br><br>
		<label>BP:</label>
		<input type="" name="">mmhg<br><br>
		<hr><br><br>
		<label>LAB :</label><br><textarea style="width: 200px; height: 200px" name="labinfor"></textarea>

	</div>
	<div class="doctorreport">
		<table border="1">
			<tr>
			<th style="color: blue">TIME/DAY</th>

		<th style="color: blue">ATTENDANT</th>
		<th style="color: blue">REPORT/FEEDBACK</th>
		<th style="color: blue">ACTION</th>
		</tr>
		<tr>
			<td><b>DAY 1</b></td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
		</tr>
		<tr>
			<td><b>DAY 2</b></td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
		</tr>
		<tr>
			<td><b>DAY 3</b></td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
		</tr>
		<tr>
			<td><b>DAY 4</b></td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
		</tr>
		<tr>
			<td><b>DAY 5</b></td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
		</tr>
		<tr>
			<td><b>DAY 6</b></td>
			<td>N/A</td>
			<td>N/A</td>
			<td>N/A</td>
		</tr>

		</table>
	</div>

	
</form>

		</div>	
</section>

</body>
</html>