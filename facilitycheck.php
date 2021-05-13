<html>  
   <head>
      <title>Patient Summary</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="icon" href="img/favicon.png" type="image/gif">
      <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
      <style type="text/css">
         .box{
            margin-top: 235px;
            margin-left: 279px;
            margin-right: 200px;
            font-size: 25px;
            font-family: 'Anton', sans-serif;
            border-style: solid;
            border-width: 5px;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            background-color: white;
         }
         hr{
            border-top: 1px dashed red;
            margin:2px; 
         }
      </style>
   </head>
   
   <body>
      <ul class="NavBAR">
      <h2 style="float: left;padding: 10px;color: white;">Covid 19 Patient Management</h2>
      <li><a href="logout.php?logout">Logout</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a class="active" href="facilitycheck.php">Patient Summary</a></li>
      <li><a  href="display.php">Display Patients</a></li>
      <li><a href="add.php">Add Patient</a></li>
   </ul>
   <div class="box">
      <?php
         include('connection.php');
         $query2 = "SELECT COUNT(Name) FROM patient"; 
    
         $result = mysqli_query($con,$query2) or die(mysqli_error($con));

         while($row = mysqli_fetch_array($result)){
            echo "There are total ". $row['COUNT(Name)'] ." patients affected by Covid-19.";
            echo "<hr />";   
         }

			$query = "SELECT Facility, COUNT(Name) FROM patient GROUP BY Facility"; 
    
         $result = mysqli_query($con,$query) or die(mysqli_error($con));

         while($row = mysqli_fetch_array($result)){
            echo " ". $row['COUNT(Name)'] ." patients are admitted in ". $row['Facility'] ." Facility.";
            echo "<hr />";}
      
         $query1 = "SELECT CaseOutCome, COUNT(Name) FROM patient GROUP BY CaseOutCome"; 
    
         $result = mysqli_query($con,$query1) or die(mysqli_error($con));

         while($row = mysqli_fetch_array($result)){
            echo " ". $row['COUNT(Name)'] ." patients are ". $row['CaseOutCome'] .".";
            echo "<hr />";}

      ?>
   </div>

   </body>
</html>