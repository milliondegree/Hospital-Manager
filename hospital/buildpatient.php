<?php
session_start();
$_SESSION["ID"]=$_POST["ID"];
$_SESSION["name"]=$_POST["name"];
$_SESSION["password"]=$_POST["password"];
$_SESSION["sex"]=$_POST["sex"];
$_SESSION["doctor"]=$_POST["doctor"];
$_SESSION["medicine"]=$_POST["medicine"];
$ID=$_POST["ID"];
$name=$_POST["name"];
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

$sql = "INSERT INTO patient (ID, password, name, sex, doctor, medicine)
VALUES ('$ID', '$password', '$name', '$sex', '$doctor', '$medicine')";

if (mysqli_query($conn, $sql)) {
    echo "<h1> <center><br /><br /><br /><br /><br />Build Success</center></h1>
          <h2><center><a href='commandpatients.php'>Return</a></center></h2>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>