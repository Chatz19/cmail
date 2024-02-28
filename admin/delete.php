<?php
require_once '../loader.php';
$id = $_GET['id'];

$sql = "DELETE FROM compose WHERE message_ID = '$id'";
 	$result = mysqli_query($connection, $sql);
 	if($result){
			echo '<script>alert("Deleted"); location.assign("http:inbox.php")</script>';
		}
		else{
			echo '<script>alert("Failed"); location.assign("http:inbox.php")</script>';
		}
?>