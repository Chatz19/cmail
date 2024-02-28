<?php
require_once '../loader.php';
$block = $_POST['trash'];
$id = $_POST['id'];

$sql = "UPDATE compose SET trash = '$block' WHERE message_ID = '$id'";
 	$result = mysqli_query($connection, $sql);
 	if($result){
			echo '<script>alert("Moved");</script>';
			echo $retVal = ($block == 1) ? header('location: trash.php') : header('location: inbox.php');
		}
		else{
			echo '<script>alert("Failed");</script>';
			echo $retVal = ($block == 1) ? header('location: inbox.php') : header('location: trash.php');
		}
?>