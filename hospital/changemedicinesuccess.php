<?php
session_start();
$ID=$_SESSION["ID"];
$name=$_SESSION["name"];
$_SESSION["qulitity"]=$_POST["qulitity"];

$qulitity=$_POST["qulitity"];

?>
<?php 
$conn = mysqli_connect("localhost", "root", "", "hospital");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM medicine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["ID"]==$ID||$row["name"]==$name){
        	break;
        }
    }
} else {
    echo "0 results";
}

$qulitity=$qulitity+$row["qulitity"];

mysqli_query($conn,"UPDATE medicine SET qulitity=$qulitity
WHERE ID='$ID' OR name='$name'");




echo "<h1> <center><br /><br /><br /><br /><br />Change Success</center></h1>
          <h2><center><a href='commandmedicine.php'>Return</a></center></h2>";

mysqli_close($conn);
?>