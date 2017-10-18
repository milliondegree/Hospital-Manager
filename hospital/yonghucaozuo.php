<?php
session_start();
$name=$_SESSION["username"];
?>
<?php 
echo"Welcome $name"
?>
<?php 
echo"<h1><center><br>You can choose these options that followed</center></h1>
     <p1><center><a href='register.php'>Register</a></center></p1>
     <p2><center><a href='diagnosis.php'>Check My Diagnosis</a></center></p2>
     <p3><center><a href='index2.php'>Logout</a></center></p3>";
?>