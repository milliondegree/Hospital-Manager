<?php
session_start();
$name=$_SESSION["username"];
?>
<?php 
echo"Welcome $name"
?>
<?php 
echo"<h1><center><br>Choose the doctor that followed</center></h1>";
$conn = new mysqli("localhost", "root", "", "hospital");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
$sql = "SELECT name,subject FROM doctor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
    	$a=$row['name'];
    	$b=$row['subject'];
        echo "<center><form action='registersuccess.php' method='post'>
        <input type='radio' name='name' value=$a>$a $b <input type='submit' value='submit'></form></center><br>";
    }
} else {
    echo "0 results";
}
}
?>