<?php
$connection = mysqli_connect('localhost', 'root', '', 'cmail');
if(!$connection){
	echo "Fail to connect to database";
	die();
}
?>