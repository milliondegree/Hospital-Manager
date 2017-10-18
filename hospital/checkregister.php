<?php
session_start();
$name=$_SESSION["username"];
?>
<?php 
echo"Welcome $name"
?>
<?php 
$conn = new mysqli("localhost", "root", "", "hospital");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID,register FROM doctor";
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
$a=$row["register"];
if($a!=""){
echo"<h1> <center><br /><br /><br /><br /><br />Your Next Rsgister Are $a </center></h1>";
echo"<br>";
echo"<h2><center>You can choose the following medicine</center></h2>";

$sql = "SELECT name,ID FROM medicine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
    	$a=$row['ID'];
    	$b=$row['name'];
        echo "<center><form action='givemedicinesuccess.php' method='post'>
        <input type='radio' name='name' value=$b>$a $b <input type='submit' value='submit'></form></center><br>";
    }
} else {
    echo "0 results";
}
}
else{
	echo"<h1> <center><br /><br /><br /><br /><br />You don't have register yet</center></h1><br>
	<h2><center><a href='index2.php'>Return</a></center></h2>";
}
$conn->close();

?>