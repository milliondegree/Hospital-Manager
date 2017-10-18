<?php
session_start();
$ID=$_SESSION["ID"];
$name=$_SESSION["name"];
$_SESSION["password"]=$_POST["password"];
$_SESSION["subject"]=$_POST["subject"];
$_SESSION["register"]=$_POST["register"];
$password=$_POST["password"];
$subject=$_POST["subject"];
$register=$_POST["register"];
?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "hospital");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($password!=''){
mysqli_query($conn,"UPDATE doctor SET password='$password'
WHERE ID='$ID' OR name='$name'");
}

if($subject!=''){
mysqli_query($conn,"UPDATE doctor SET subject='$subject'
WHERE ID='$ID' OR name='$name'");
}

if($register!=''){
mysqli_query($conn,"UPDATE doctor SET register='$register'
WHERE ID='$ID' OR name='$name'");
}


echo "<h1> <center><br /><br /><br /><br /><br />Change Success</center></h1>
          <h2><center><a href='commanddoctors.php'>Return</a></center></h2>";

mysqli_close($conn);
?>