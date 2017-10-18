<?php
session_start();
$ID=$_SESSION["ID"];
$name=$_SESSION["name"];
?>
<?php
echo"
<h1><center>Change the Qulitity of Medicine $ID</center></h1>
<p1><center>Positive number means input, negative number means output.</center></p1><br><br><br>
<form action='changemedicinesuccess.php' method='post'>
<center>
<fieldset style='width:1000px'>
qulitity <input type='text' name='qulitity' style='width:100px'>&nbsp;&nbsp;
<input type='submit' name='change' value='change'><br><br>
<a href='commandmedicine.php'>Return</a>
</fieldset>
</center>
</form>";
?>