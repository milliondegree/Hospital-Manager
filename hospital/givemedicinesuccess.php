<?php
session_start();
$_SESSION["name"]=$_POST["name"];
$b=$_POST["name"];
$c=$_SESSION["username"];
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

$sql = "SELECT name,qulitity FROM medicine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       if($row["name"]==$b){
       	  $d=$row["qulitity"];
       	  break;
       }
    }
} else {
    echo "0 results";
}
if($d>0){
$d=$d-1;
mysqli_query($conn,"UPDATE patient SET medicine='$b'
WHERE name='$a'");
mysqli_query($conn,"UPDATE doctor SET register=''
WHERE ID='$c'");
mysqli_query($conn,"UPDATE medicine SET qulitity=$d
WHERE name='$b'");
echo"<h1> <center><br /><br /><br /><br /><br />Diagnosis Over</center></h1>
     <h2><center><a href='index2.php'>Return</a></center></h2>";
}
else{
	echo"<h1> <center><br /><br /><br /><br /><br />Medicine Have Been Used Up</center></h1>
     <h2><center><a href='yishengcaozuo.php'>Return</a></center></h2>";
}
?>