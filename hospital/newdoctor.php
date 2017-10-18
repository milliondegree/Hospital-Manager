<?php
echo"
<h1><center>New Doctor</center></h1><br><br><br>
<form action='builddoctor.php' method='post'>
<center>
<fieldset style='width:1000px'>
ID <input type='text' name='ID' style='width:100px'>&nbsp;&nbsp;
name <input type='text' name='name' style='width:100px'>&nbsp;&nbsp;
password <input type='text' name='password' style='width:100px'>&nbsp;&nbsp;<br><br>
subject <input type='text' name='subject' style='width:100px'>&nbsp;&nbsp;
rejester <input type='text' name='register' style='width:100px'>&nbsp;&nbsp;
<input type='submit' name='build' value='build'><br><br>
<a href='commanddoctors.php'>Return</a>
</fieldset>
</center>
</form>";
?>