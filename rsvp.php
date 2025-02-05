<?php
include("config.php");
include("inquiry.php");

$name = $_POST['name'];
$email = $_POST['email'];


$sql = "INSERT INTO attenders(name, email) 
VALUES('$name', '$email')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Request Sent!");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Duplicate user!");';
	echo 'window.location="index.php";';
	echo '</script>';
}
?>