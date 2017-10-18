<!doctype html>
<html>

<head>
<meta content="text/html; charset=UTF-8">
<title> 用户界面 </title>
</head>

<body>
<?php
session_start();
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
?>
<?php
if($_POST["username"]==""){
?>
<h1> <center><br /><br /><br /><br /><br />Username can't be null </center></h1>
<h2><center><a href='index2.php'>Return</a></center></h2>
<?php 
}else if($_POST["password"]==""){
?>
<h1> <center><br /><br /><br /><br /><br />Password can't be null </center></h1>
<h2><center><a href='index2.php'>Return</a></center></h2>
<?php 
}else{

$conn = new mysqli("localhost", "root", "", "hospital");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	$sql = "SELECT ID, password FROM patient";
	$result = $conn->query($sql);
	$a=0;
	if($result->num_rows>0)
	{
	    while($row = $result->fetch_assoc()) {
            if($_POST["username"]==$row["ID"]){
            	if($_POST["password"]==$row["password"]){
                    echo"<h1> <center><br /><br /><br /><br /><br />Login success </center></h1>
                        <h2><center><a href='yonghucaozuo.php'>Go on</a></center></h2>";
                    $a=1;
            	}
            	else{
            		$a=1;
            		echo"<h1> <center><br /><br /><br /><br /><br />Password is wrong </center></h1>
                         <h2><center><a href='index2.php'>Return</a></center></h2>";
            	}
            }
        }
        if($a==0){
        	echo"<h1> <center><br /><br /><br /><br /><br />Patient do not exist </center></h1>
                        <h2><center><a href='index2.php'>Return</a></center></h2>";
        }
    }
	else{
		echo "0 results";
	}
}
}
?>

</body>
</html>