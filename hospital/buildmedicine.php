<?php
session_start();
$_SESSION["ID"]=$_POST["ID"];
$_SESSION["name"]=$_POST["name"];
$_SESSION["qulitity"]=$_POST["qulitity"];
$ID=$_POST["ID"];
$name=$_POST["name"];
$qulitity=$_POST["qulitity"];
?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "hospital");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO medicine (ID, name, qulitity)
VALUES ('$ID', '$name', $qulitity)";

if (mysqli_query($conn, $sql)) {
    echo "<h1> <center><br /><br /><br /><br /><br />Build Success</center></h1>
          <h2><center><a href='commandmedicine.php'>Return</a></center></h2>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>