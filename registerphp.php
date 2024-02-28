<?php
require_once 'config/connect.php';

$cmail = $_POST['cmail'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$number = $_POST['number'];
$date = $_POST['date'];

$sql = "SELECT * FROM user WHERE cmail = '$cmail'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count == 1){
	echo '<script>alert("Account already exist"); window.location.assign("http:register.php")</script>';
}

$sql = "INSERT INTO user (image, cmail, firstName, lastName, password, phoneNo, date_of_birth) 
				VALUES ('default.png', '$cmail', '$firstName', '$lastName', '$password', '$number', '$date')";
$result = mysqli_query($connection, $sql);
if($result){
	header('location: login.php');
}
else{
	header('location: register.php');
}
?>