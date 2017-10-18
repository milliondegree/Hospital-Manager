<?php
session_start();
$ID=$_SESSION["ID"];
$name=$_SESSION["name"];
?>
<?php
echo"
<h1><center>Change the Patient $ID</center></h1><br><br><br>
<form action='changepatientsuccess.php' method='post'>
<center>
<fieldset style='width:1000px'>
password <input type='text' name='password' style='width:100px'>&nbsp;&nbsp;
sex <input type='text' name='sex' style='width:100px'>&nbsp;&nbsp;<br><br>
doctor <input type='text' name='doctor' style='width:100px'>&nbsp;&nbsp;
medicine <input type='text' name='medicine' style='width:100px'>&nbsp;&nbsp;<br><br>
<input type='submit' name='change' value='change'><br><br>
<a href='commandpatients.php'>Return</a>
</fieldset>
</center>
</form>";
?>