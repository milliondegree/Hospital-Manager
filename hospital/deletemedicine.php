<?php
session_start();
$ID=$_SESSION["ID"];
$name=$_SESSION["name"];
?>
<?php 
$con=mysqli_connect("localhost","root","","hospital");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM medicine WHERE ID='$ID'");

mysqli_close($con);
echo"<h1> <center><br /><br /><br /><br /><br />Delete Success</center></h1>
          <h2><center><a href='commandmedicine.php'>Return</a></center></h2>";
?>