<?php
echo"
<h1><center>New Medicine</center></h1><br><br><br>
<form action='buildmedicine.php' method='post'>
<center>
<fieldset style='width:1000px'>
ID <input type='text' name='ID' style='width:100px'>&nbsp;&nbsp;
name <input type='text' name='name' style='width:100px'>&nbsp;&nbsp;
qulitity <input type='text' name='qulitity' style='width:100px'>&nbsp;&nbsp;<br><br>
<input type='submit' name='build' value='build'><br><br>
<a href='commandmedicine.php'>Return</a>
</fieldset>
</center>
</form>";
?>