<?php
session_start();
$ID=$_SESSION["ID"];
$name=$_SESSION["name"];
?>
<?php
echo"
<h1><center>Change the Doctor $ID</center></h1><br><br><br>
<form action='changedoctorsuccess.php' method='post'>
<center>
<fieldset style='width:1000px'>
password <input type='text' name='password' style='width:100px'>&nbsp;&nbsp;
subject <input type='text' name='subject' style='width:100px'>&nbsp;&nbsp;<br><br>
register <input type='text' name='register' style='width:100px'>&nbsp;&nbsp;
<input type='submit' name='change' value='change'><br><br>
<a href='commanddoctors.php'>Return</a>
</fieldset>
</center>
</form>";
?>