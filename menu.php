<!DOCTYPE html>
<html>
<head>
    <title>Mainmenu</title>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    
    <link rel="icon" href="img/favicon.png" type="image/gif">
    <style type="text/css">
    
body {
  background-image: url(img/bg3.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  text-align: center;
  padding: 60px;
  font-family: sans-serif;
}

.button {
  text-decoration: none;
  color:rgb(145, 92, 182);
  background: white;
  padding: 15px 40px;
  border-radius: 20px;
  font-weight: bold;
  text-transform: uppercase;
  transition: all 0.2s ease-in-out;
}
.flex{
    display: flex;
    flex-direction: column;
    max-width: 200px;
    margin: 20px;

}

.glow-button:hover {
  color: rgb(145, 92, 182);
  box-shadow: 0 5px 15px rgba(145, 92, 182, .4);
}</style>

</head>
<body style="margin-left: 450px;margin-bottom: 0px;margin-top: 0px;padding:20px">
<center><h1 style="color:rgb(145, 92, 182);font-family:'Staatliches', cursive;font-size: 70px;margin-right: 550px;margin-bottom: 10px;">Mainmenu</br><span style="font-size: 30px;padding-top: 10px;">Welcome Admin</span></h1></center>
<div>
<a href="add.php" class="button glow-button flex" target="_blank">Add Patient</a>
<a href="display.php" class="button glow-button flex" target="_blank">Display Patients</a>
<a href="facilitycheck.php" class="button glow-button flex" target="_blank">Patient Summary</a>
<a href="aboutus.php" class="button glow-button flex" target="_blank">About Us</a>
<a href="logout.php?logout" class="button glow-button flex" target="_blank">Logout</a>
</div>
</body>
</html>