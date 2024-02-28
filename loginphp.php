<?php
require_once 'config/connect.php';
session_start();
$cmail = $_POST['cmail'];
$password = $_POST['password'];
$check = substr($cmail, -9);
$check = trim(substr_replace($check, '', -4));
$sql = "SELECT * FROM user WHERE cmail = '$cmail' AND password = '$password'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count == 1){

	$_SESSION['cmail'] = $cmail;
	$_SESSION['password'] = $password;

	if($check == "admin"){

		header('location: admin/inbox.php');

	}
	else{

		header('location: user/inbox.php');
	}

}
else{
	echo '<script>alert("Invalid login parameter"); window.location.assign("http:login.php")</script>';
}
?>