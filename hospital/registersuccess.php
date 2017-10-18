<?php
session_start();
$_SESSION["name"]=$_POST["name"];
?>
<?php 
$conn = new mysqli("localhost", "root", "", "hospital");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$b=$_POST["name"];
$sql = "SELECT ID, password,name FROM patient";
	$result = $conn->query($sql);
	$a="";
	if($result->num_rows>0)
	{
	    while($row = $result->fetch_assoc()) {
            if($_SESSION["username"]==$row["ID"]){
            	$a=$row["name"];
            	break;
            	}
        }
	}
	else{
		echo "0 results";
	}

mysqli_query($conn,"UPDATE doctor SET register='$a'
WHERE name='$b'");
mysqli_query($conn,"UPDATE patient SET doctor='$b'
WHERE name='$a'");


$conn->close();
echo"<h1> <center><br /><br /><br /><br /><br />Register Success </center></h1>
     <h2><center><a href='index2.php'>Return</a></center></h2>";
?>