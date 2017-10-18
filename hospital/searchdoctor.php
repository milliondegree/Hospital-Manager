<?php
session_start();
$_SESSION["ID"]=$_POST["ID"];
$_SESSION["name"]=$_POST["name"];
$ID="";
$name="";
$subject="";
$register="";
$a=0;
?>
<?php 
$conn = new mysqli("localhost", "root", "", "hospital");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM doctor";
$result = $conn->query($sql);

if($_POST["ID"]!=""){
       while($row = $result->fetch_assoc()) {
       if($_SESSION["ID"]==$row["ID"]){
       	  $a=$a+1;
       	  $ID=$row["ID"];
       	  $name=$row["name"];
       	  $subject=$row["subject"];
       	  $register=$row["register"];
       	  echo"<br><br><center>ID:$ID Name:$name Subject:$subject Register:$register   <a href='deletedoctor.php'>Delete</a>   <a href=changedoctor.php>Change</a></center>";
       }
    }
    if($a==0)
    {
	    echo"<h1><center><br><br><br><br>We Can not Find This Doctor</center></h1>";
    }
}
else{
	if($_POST["name"]!=""){
	   while($row = $result->fetch_assoc()) {
       if($_SESSION["name"]==$row["name"]){
       	  $a=$a+1;
       	  $ID=$row["ID"];
       	  $name=$row["name"];
       	  $subject=$row["subject"];
       	  $register=$row["register"];
       	  echo"<br><br><center>ID:$ID Name:$name Subject:$subject Register:$register   <a href='deletedoctor.php'>Delete</a>   <a href=changedoctor.php>Change</a></center>";
       }
    }
	if($a==0)
    {
	    echo"<h1><center><br><br><br><br>We Can not Find This Doctor</center></h1>";
    }
	}
	else{
		echo"<h1><center><br><br><br><br>The Key Word Can't Be Null</center></h1>";
	}
}

echo"<h2><center><a href='commanddoctors.php'>Return</a></center></h2>"

?>