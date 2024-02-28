<?php
	require_once '../config/connect.php';
 	session_start();
 	$cmail = $_SESSION['cmail'];
 	$password = $_SESSION['password'];

 	if((!isset($email) && !isset($password)) || (empty($email) && empty($password))){
 		header('location: ../login.php');
 	}
 ?>