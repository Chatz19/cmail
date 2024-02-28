<?php
	require_once '../loader.php'; 


$name = $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$tmp_name = $_FILES['image']['tmp_name'];
$extension = substr($name, strpos($name, '.') + 1);
$fileType = substr_replace($fileType, '', strrpos($fileType, '/'));

if(isset($name)){
	if(!empty($name)){
			

		if($fileType == "image"){
	 $location = '../image/';
	 	$date = date('Ymdhis');
		$name = rand().$date.".".$extension;
		if(move_uploaded_file($tmp_name, $location.$name)){
				

		$sql = "UPDATE user SET image ='$name' WHERE cmail = '$cmail'";
	
$result = mysqli_query($connection, $sql);
					if($result){

				$invalid = '<script>window.location.assign("http:detail.php");</script>';
				echo $invalid;
				
				}else{
					$fmsg = '<script>alert("Operation Failed"); window.location.assign("http:detail.php"); </script>';
					echo "$fmsg";
					
				}

		}
		else{
			$dmsg = '<script>alert("Failed to upload"); window.location.assign("http:detail.php"); </script>';
					echo "$dmsg";
		}
	}
	else{
		$gmsg = '<script>alert("Only image files are allowed); window.location.assign("http:detail.php"); </script>';
					echo "$gmsg";
					
				}
	}

	else{
		$mmsg = '<script>alert("choose a file"); window.location.assign("http:detail.php"); </script>';
					echo "$mmsg";
		
	}
}




		?>