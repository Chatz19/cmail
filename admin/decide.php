<?php
require_once '../loader.php';
$user = $_GET['user'];
$block = $_GET['block'];

$sql = "UPDATE user SET blocked = '$block' WHERE cmail = '$user'";
 	$result = mysqli_query($connection, $sql);
 	if($result){
			echo '<script>alert("Updated");</script>';
			echo $retVal = ($block == 1) ? header('location: unblock.php') : header('location: block.php');
		}
		else{
			echo '<script>alert("Failed");</script>';
			echo $retVal = ($block == 1) ? header('location: unblock.php') : header('location: block.php');
		}
?>
?>