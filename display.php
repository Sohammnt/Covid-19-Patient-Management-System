<!DOCTYPE html>
<html>
<title>Display Patient</title>
<link rel="icon" href="img/favicon.png" type="image/gif">

<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@900&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css">

<style type="text/css">
 table{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

 tr:nth-child(even){background-color: #f2f2f2;}
 tr:nth-child(odd){background-color: #cccccc;}

 tr:hover {background-color: #ddd;}

 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;

}
.diff ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.diff li {
  float: left;
}

.diff li {
  display: block;
  color: #ffff;
  text-align: center;
  padding: 5px;
  text-decoration: none;
</style>

<body>
<ul class="NavBAR">
      <h2 style="float: left;padding: 10px;color: white;">Covid 19 Patient Management</h2>
      <li><a href="logout.php?logout">Logout</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="facilitycheck.php">Patient Summary</a></li>
      <li><a class="active" href="display.php">Display Patients</a></li>
      <li><a href="add.php">Add Patient</a></li>
   </ul>
<center><h1 style="color: #ffff;font-family: 'Cinzel', serif;font-size: 50px;">List of Patients</h1></center>

<h4 style="color: #ffff;font-family: 'Cinzel', serif;font-size: 25px;">Search the Patient Record</h4>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <ul class="diff" style="background-color: rgb(255, 255, 255,0)  ;">
                     <li class="diff"style="margin-top: 14px;font-size: 25px;">Enter Name to Search</li>
                     <li class="diff"><input name = "name" type = "text" id = "name"></li>
                     <li class="diff"><input name = "search" type = "submit" id = "search" value = "Search"></li> 
                   </ul>
               </form>

<?php
         if(isset($_POST['Update'])) {
          include('connection.php'); 
                
            $SrNo = $_POST["SrNo"];
            $caseoutcome = $_POST["caseoutcome"];
            
            $sql = "UPDATE `patient` SET `CaseOutCome` = '$caseoutcome' WHERE `patient`.`SrNo` = $SrNo";

            if ($con->query($sql) === TRUE) {
               header("location:display.php");
            } else {
              echo "Error deleting record: " . $con->error;
            }

            $con->close();

            }
         else {
?>
<div class="Searchbox" style="font-size:24px; ">
<?php
          if(isset($_POST['search'])) {
          include('connection.php'); 
              $name=$_POST['name'];
              $sql = "SELECT SrNo FROM patient WHERE Name='$name'";
              $result = $con->query($sql);

              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                     
                      echo "Name Matched with SrNo. ".  $row["SrNo"]. "<br>"; 
                  }
              } 
              else {
                  echo "0 results";
              }

              $con->close();
              }
            else {

?>
</div>
<?php
         if(isset($_POST['delete'])) {
          include('connection.php'); 
                
            $SrNo = $_POST["SrNo"];
            
            $sql = "DELETE FROM patient WHERE SrNo=$SrNo";

            if ($con->query($sql) === TRUE) {
               header("location:display.php");
            } else {
              echo "Error deleting record: " . $con->error;
            }

            $con->close();

            }
         else {
?> 
<?php
 echo "<table  style='border: solid 1px black;border-collapse: collapse;'>";
 echo "<tr><th>&emsp;SrNo</th><th>&emsp;Name</th><th>&emsp;
 MobileNo</th><th>&emsp;Age</th><th>&emsp;Gender</th><th>&emsp;Facility</th><th>&emsp;Symptoms</th><th>&emsp;
 FamName</th><th>&emsp;FamNo</th><th>&emsp;Case OutCome</th><th>&emsp;Date Admitted</th></tr>";

  class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
  }

  $servername = "localhost";
  $username = "id14438666_username";
  $password = "Nm6~&S[uWn3hL~An";
  $dbname = "id14438666_coviddb";

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT SrNo, Name, MobileNo,Age,Gender,Facility,Symptoms,FamName,FamNo,CaseOutCome,DateAdmitted FROM patient");
      $stmt->execute();

      // set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

      foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
          echo $v;
        }
      }
  catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
      }
  $conn = null;
  echo "</table>";
?>

            <h4 style="color: #ffff;font-family: 'Cinzel', serif;font-size: 25px;">Delete the Patient Record</h4>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <ul class="diff" style="background-color: rgb(255, 255, 255,0)  ;">
                     <li class="diff"style="margin-top: 14px;font-size: 25px;">Enter Serial Number:</li>
                     <li class="diff"><input name = "SrNo" type = "text" id = "SrNo"></li>
                     <li class="diff"><input name = "delete" type = "submit" id = "delete" value = "Delete"></li> 
                   </ul>
               </form>
               <h4 style="color: #ffff;font-family: 'Cinzel', serif;font-size: 25px;">Update the Patient Record</h4>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <ul class="diff" style="background-color: rgb(255, 255, 255,0)  ;">
                     <li class="diff"style="margin-top: 14px;font-size: 25px;">Enter Serial Number:</li>
                     <li class="diff"><input name = "SrNo" type = "text" id = "SrNo"></li>
                     <li class="diff"><p style=" font-size: 25px;color: Black;font-family: 'Cinzel', serif;">Dead</p></li>  
                     <li class="diff"><input style="height:20px; width:20px; vertical-align: middle;" type="radio" id="caseoutcome" name="caseoutcome" value="Dead"/>&nbsp;&nbsp;&nbsp;&nbsp;<div style="font-size: 25px;"></div><br/></li>
                     <li class="diff"><p style=" font-size: 25px;color: Black;font-family: 'Cinzel', serif;">Recovered</p></li> 
                     <li class="diff"><input style="height:20px; width:20px; vertical-align: middle;" type="radio" id="caseoutcome" name="caseoutcome" value="Recovered"/><br/></li>
                     <li class="diff"><input name = "Update" type = "submit" id = "Update" value = "Update"></li> 
               </form>
            <?php
         }
      ?>
      <?php
         }
      ?>
      <?php
         }
      ?>
</body>
</html>