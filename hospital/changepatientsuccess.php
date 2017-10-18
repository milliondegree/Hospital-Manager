<?php
session_start();
$ID=$_SESSION["ID"];
$name=$_SESSION["name"];
$_SESSION["password"]=$_POST["password"];
$_SESSION["sex"]=$_POST["sex"];
$_SESSION["doctor"]=$_POST["doctor"];
$_SESSION["medicine"]=$_POST["medicine"];
$password=$_POST["password"];
$sex=$_POST["sex"];
$doctor=$_POST["doctor"];
$medicine=$_POST["medicine"];
?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "hospital");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($password!=''){
mysqli_query($conn,"UPDATE patient SET password='$password'
WHERE ID='$ID' OR name='$name'");
}

if($sex!=''){
mysqli_query($conn,"UPDATE patient SET sex='$sex'
WHERE ID='$ID' OR name='$name'");
}

if($doctor!=''){
mysqli_query($conn,"UPDATE patient SET doctor='$doctor'
WHERE ID='$ID' OR name='$name'");
}

if($medicine!=''){
mysqli_query($conn,"UPDATE patient SET medicine='$medicine'
WHERE ID='$ID' OR name='$name'");
}

echo "<h1> <center><br /><br /><br /><br /><br />Change Success</center></h1>
          <h2><center><a href='commandpatients.php'>Return</a></center></h2>";

mysqli_close($conn);
?>