<?php
echo"
<h1><center>New Patient</center></h1><br><br><br>
<form action='buildpatient.php' method='post'>
<center>
<fieldset style='width:1000px'>
ID <input type='text' name='ID' style='width:100px'>&nbsp;&nbsp;
name <input type='text' name='name' style='width:100px'>&nbsp;&nbsp;
password <input type='text' name='password' style='width:100px'>&nbsp;&nbsp;
sex <input type='text' name='sex' style='width:100px'>&nbsp;&nbsp;<br><br>
doctor <input type='text' name='doctor' style='width:100px'>&nbsp;&nbsp;
medicine <input type='text' name='medicine' style='width:100px'>&nbsp;&nbsp;<br><br>
<input type='submit' name='build' value='build'><br><br>
<a href='commandpatients.php'>Return</a>
</fieldset>
</center>
</form>";
?>