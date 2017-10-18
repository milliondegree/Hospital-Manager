<?php
session_start();
?>
<?php 
$conn = new mysqli("localhost", "root", "", "hospital");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID,doctor,medicine FROM patient";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       if($_SESSION["username"]==$row["ID"]){
       	  break;
       }
    }
} else {
    echo "0 results";
}
$a=$row["medicine"];
$c=$row["doctor"];
if($a!=""){
echo"<h1> <center><br /><br /><br /><br /><br />Doctor $c give you $a </center></h1>";
echo"<br>";
echo"<h2><center><a href='index2.php'>Return</a></center></h2>";
}else{
	echo"<h1> <center><br /><br /><br /><br /><br />You have not registered yet</center></h1>
	<h2><center><a href='index2.php'>Return</a></center></h2>";
}
?>