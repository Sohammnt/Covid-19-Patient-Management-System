<?php
if(isset($_POST['name'])){
	
	include('connection.php'); 

	$patientname = $_POST['name'];
	$patientage = $_POST['age'];
	$patientgender = $_POST['gender'];
	$patientmob = $_POST['phone'];
	$facility = $_POST['facility'];
	$symptoms=$_POST['symptoms'];  
	$chk="";  
	foreach($symptoms as $chk1)  
	   {  
	      $chk .= $chk1.",";  
	   }  
	$familyname = $_POST['familyname'];
	$familynumber = $_POST['familyphone'];

    $sql = "INSERT INTO `patient` ( `Name`, `MobileNo`, `Age`, `Gender`, `Facility`, `Symptoms`, `FamName`, `FamNo`, `Date`) VALUES ('$patientname', '$patientmob', '$patientage', '$patientgender', '$facility', '$chk', '$familyname', '$familynumber', current_timestamp());";
	echo nl2br("\n");
    //echo $sql;

	if($con->query($sql) == false)
	{
		echo "Error: $con->error";
	}
	
	$con->close();
}
	?>


<!DOCTYPE html>

<html>

<head>
	<title>Add Patient</title>
	<link rel="icon" href="img/favicon.png" type="image/gif">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500;800&display=swap" rel="stylesheet">

</head>

<body style="">
	<ul>
		<h2 style="float: left;padding: 10px;color: white;">Covid 19 Patient Management</h2>
  		<li><a href="logout.php?logout">Logout</a></li>
  		<li><a href="aboutus.php">About Us</a></li>
  		<li><a href="facilitycheck.php">Patient Summary</a></li>
  		<li><a href="display.php">Display Patients</a></li>
  		<li><a class="active " href="add.php">Add Patient</a></li>
	</ul>
	<center><h3 style="font-family: 'Baloo Bhai 2', cursive;font-size: 50px;margin-top: 100px;margin-bottom: 30px;color:white;">Covid 19 Patient Management</h3></center>
	<div class="container" style=" margin-bottom: 200px;">
		
		<p style="font-family: 'Baloo Bhai 2', cursive;font-size: 35px"> Enter the details of the Patient </p>
		<form action="add.php" method="post">

			<div class="cent">
			<label  for="text">Name</label><br/>
			<input  type="text" name="name" id="name" placeholder="Enter Patients Name" required/><br/>

			<label  for="tel">Mobile Number</label><br/>
			<input  type="tel" name="phone" id="phone" placeholder="Enter Patients Number" required/><br/>

			<label  for="age">Age</label><br/>
			<input  type="age" name="age" id="age"placeholder="Enter Patients age" required/><br/>
			</div>

			<label  for="gender">Gender: </label> <br/> 
            <input type="radio" id="gender" name="gender" value="male"/>&nbsp;&nbsp;&nbsp;&nbsp;Male<br/>  
            <input type="radio" id="gender" name="gender" value="female"/>&nbsp;&nbsp;&nbsp;&nbsp;Female<br/>

            <label  for="Facility">Facility where patient is kept: </label> <br/> 
            <input type="radio" id="facility" name="facility" value="Govt. Hospital"/>&nbsp;&nbsp;&nbsp;&nbsp;Govt. Hospital<br/>
            <input type="radio" id="facility" name="facility" value="Primary School"/>&nbsp;&nbsp;&nbsp;&nbsp;Primary School<br/>
            <input type="radio" id="facility" name="facility" value="Art Hall"/>&nbsp;&nbsp;&nbsp;&nbsp;Art Hall<br/>
            <input type="radio" id="facility" name="facility" value="College Hostel"/>&nbsp;&nbsp;&nbsp;&nbsp;College Hostel<br/>
            <input type="radio" id="facility" name="facility" value="Hotel Paradise"/>&nbsp;&nbsp;&nbsp;&nbsp;Hotel Paradise<br/>

            <label  for="symptoms">Symptoms: </label> <br/>
            <input type="checkbox" name="symptoms[]" value="Fever">&nbsp;&nbsp;&nbsp;&nbsp;FEVER<br/>
            <input type="checkbox" name="symptoms[]" value="Dry Cough">&nbsp;&nbsp;&nbsp;&nbsp;Dry Cough<br/>
            <input type="checkbox" name="symptoms[]" value="Tiredness">&nbsp;&nbsp;&nbsp;&nbsp;Tiredness<br/>
            <input type="checkbox" name="symptoms[]" value="Shortness of Breath">&nbsp;&nbsp;&nbsp;&nbsp;Shortness of Breath<br/>
            <input type="checkbox" name="symptoms[]" value="Soar Throat">&nbsp;&nbsp;&nbsp;&nbsp;Soar Throat<br/>

            <label  for="text">Family Member`s Name</label><br/>
            <input  type="text" name="familyname" id="familyname" placeholder="Family Member`s Name"><br/>

			<label  for="tel">Family Member`s Mobile Number</label><br/>
			<input  type="tel" name="familyphone" id="familyphone" placeholder="Family Member`s Number"><br/>   
			<div> 
			<button class="btn">Submit</button>
			</div>

		</form>
 	</div>
</body>
</html>