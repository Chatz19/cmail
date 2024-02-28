<?php
require_once '../loader.php';

$subject = $_POST['subject'];
$message = $_POST['message'];
$receiver = $_POST['reciever'];

$fileName = $_FILES['file']['name'];
$fileType = $_FILES['file']['type'];
$fileTmp = $_FILES['file']['tmp_name'];
$fileType = substr_replace($fileType, '', strrpos($fileType, '/'));

$sql = "SELECT * FROM user WHERE cmail = '$receiver'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count == 0){
	echo '<script>alert("Account does not exist"); window.location.assign("http:compose.php")</script>';
	die();
}

$sql = "INSERT INTO compose (sender, receiver, subject, message, data, dataType) 
				VALUES ('$cmail', '$receiver', '$subject', '$message', '$fileName', '$fileType')";
$result = mysqli_query($connection, $sql);
if($result){
	move_uploaded_file($fileTmp, '../image/'.$fileName);
	header('location: sent.php');
}
else{
	echo '<script>alert("Operation failed"); location.assign("http:compose.php");</script>';
}
?>