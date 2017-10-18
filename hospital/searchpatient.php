<?php
session_start();
$_SESSION["ID"]=$_POST["ID"];
$_SESSION["name"]=$_POST["name"];
$ID="";
$name="";
$sex="";
$doctor="";
$medicine="";
$a=0;
?>
<?php 
$conn = new mysqli("localhost", "root", "", "hospital");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM patient";
$result = $conn->query($sql);

if($_POST["ID"]!=""){
       while($row = $result->fetch_assoc()) {
       if($_SESSION["ID"]==$row["ID"]){
       	  $a=$a+1;
       	  $ID=$row["ID"];
       	  $name=$row["name"];
       	  $sex=$row["sex"];
       	  $doctor=$row["doctor"];
       	  $medicine=$row["medicine"];
       	  echo"<br><br><center>ID:$ID Name:$name Sex:$sex Doctor:$doctor Medicine:$medicine   <a href='deletepatient.php'>Delete</a>   <a href=changepatient.php>Change</a></center>";
       }
    }
    if($a==0)
    {
	    echo"<h1><center><br><br><br><br>We Can not Find This Person</center></h1>";
    }
}
else{
	if($_POST["name"]!=""){
	   while($row = $result->fetch_assoc()) {
       if($_SESSION["name"]==$row["name"]){
       	  $a=$a+1;
       	  $ID=$row["ID"];
       	  $name=$row["name"];
       	  $sex=$row["sex"];
       	  $doctor=$row["doctor"];
       	  $medicine=$row["medicine"];
       	  echo"<br><br><center>ID:$ID Name:$name Sex:$sex Doctor:$doctor Medicine:$medicine    <a href='deletepatient.php'>Delete</a>   <a href=changepatient.php>Change</a></center>";
       }
    }
	if($a==0)
    {
	    echo"<h1><center><br><br><br><br>We Can not Find This Person</center></h1>";
    }
	}
	else{
		echo"<h1><center><br><br><br><br>The Key Word Can't Be Null</center></h1>";
	}
}

echo"<h2><center><a href='commandpatients.php'>Return</a></center></h2>"

?>