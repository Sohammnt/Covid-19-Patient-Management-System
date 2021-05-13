<!DOCTYPE html>
<html>
<title>About Us</title>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" href="img/favicon.png" type="image/gif">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<style>
.container {
	margin-top: 30px;
	position: relative;
    width: 240px;
    float: left;
    height: 278px;
    padding: 15px;
}

.image {
  display: block;
  
  width: 100%;
  height: 100%;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: rgb(204, 204, 204,0.8);
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: #ffff;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.box{
			margin-left: 100px;
			margin-right: 100px;
			margin-top: 10px;
            font-size: 25px;
            font-family: 'Anton', sans-serif;
            border-style: solid;
            border-width: 5px;
            padding: 10px;
            border-radius: 10px;
            text-align: left;
            background-color: white;
         }
</style>


<body>
<ul class="NavBAR">
      <h2 style="float: left;padding: 10px;color: white;">Covid 19 Patient Management</h2>
      <li><a href="logout.php?logout">Logout</a></li>
      <li><a class="active" href="aboutus.php">About Us</a></li>
      <li><a href="facilitycheck.php">Patient Summary</a></li>
      <li><a href="display.php">Display Patients</a></li>
      <li><a href="add.php">Add Patient</a></li>
   </ul>
<center><h1 style="color: #ffff;font-family: 'Cinzel', serif;font-size: 50px;">About Us</h1></center>
<h4 style="color: #fff;font-family: 'Cinzel', serif;font-size: 30px;margin-left: 100px;margin-top: 20px;">Our Team :</h4>
<div class="container" style="margin-left: 100px">
  <img src="img/Soham.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Soham Munot</div>

  </div>
</div>
<div class="container" style="margin-left: 10px">
  <img src="img/vaishnavi.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Vaishnavi Yanpallewar</div>
  </div>
</div>
<div class="container" style="margin-left: 10px">
  <img src="img/Ankit.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Ankit Khairnar</div>
  </div>
</div>
<div class="container" style="margin-left: 10px">
  <img src="img/Sandip.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Sandip Kolpe</div>
  </div>
</div>
</br>

<div style="float: left;">	
<h4 style="color: #fff;font-family: 'Cinzel', serif;font-size: 30px;margin-left: 100px;margin-top: 30px;">Our Project :</h4>
</div>

<div class="box" style="float: left;"><p style="padding: 20px;">The problem we saw was maintaining data of patients affected with Covid-19 in the rural areas. The different facilities to keep the patients was creating a mess in maintaining data for the local authorities.So we built a solution to over come all the seen problems and to make sure that the data is stored and displayed in easy, user-friendly and secured manner.
</div>