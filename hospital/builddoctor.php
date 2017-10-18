<?php
session_start();
$_SESSION["ID"]=$_POST["ID"];
$_SESSION["name"]=$_POST["name"];
$_SESSION["password"]=$_POST["password"];
$_SESSION["subject"]=$_POST["subject"];
$_SESSION["register"]=$_POST["register"];
$ID=$_POST["ID"];
$name=$_POST["name"];
$password=$_POST["password"];
$subject=$_POST["subject"];
$register=$_POST["register"];
?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "hospital");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO doctor (ID, password, name, subject, register)
VALUES ('$ID', '$password', '$name', '$subject', '$register')";

if (mysqli_query($conn, $sql)) {
    echo "<h1> <center><br /><br /><br /><br /><br />Build Success</center></h1>
          <h2><center><a href='commanddoctors.php'>Return</a></center></h2>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>