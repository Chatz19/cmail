<?php
 	require_once '../loader.php';
?>
<html>
	<head>
		<title>Personal Details</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="../style/body.css">
		<style type="text/css">
			.lock{width: auto; display: inline-block; margin-top: 40px; text-align: left; border-left: 2px dashed #ccc; padding-left: 15px;}
			.article1{width: 28vw; height: 28vw; object-fit: cover; border-radius: 100%; display: inline-block; margin-right: 30px; 
						min-width: 300px; vertical-align: top;}
			.fork{width: auto; display: inline-block; margin-top: 20px;}
			.nature{color: red; font-weight: 800; font-size: 20px; font-family: arial; margin-bottom: 10px;}
			.less span{font-weight: bold; font-family: arial;}
			.less{font-family: arial;  font-size: 15px; padding-bottom: 20px; display: flex; flex-direction: column;}
			@media screen and (max-width: 800px) and (orientation:portrait){
				.article1{margin-right: 0;}
			}
			form{margin: auto; width: 100%; position: fixed; bottom: 50px; left: 0;}
		</style>
	</head>
	<body id = "body">
		<header>
			<span onclick = "aside1()">&#9776</span>
			<div class = "cmail">Cmail</div>
			<input type = "search" placeholder = "Search...">
		</header>
		<div>
		<aside id = "aside">
			<div class = "cmail1">Cmail</div>
			<section>
				<a href="inbox.php">Inbox</a>
				<a href="sent.php">Sent</a>
				<a href="compose.php">Compose</a>
				<a href="trash.php">Trash</a>
				<a href="logout.php">Logout</a>
			</section>
		</aside>
		<article id = "article">
			<section>
				<?php
				$sql = "SELECT * FROM user WHERE cmail = '$cmail'";
				$result = mysqli_query($connection, $sql);
				if($r = mysqli_fetch_assoc($result)){
				?>
				<center>
				<div class = "fork">
				<img src="../image/<?php echo $r['image']; ?>" class = "article1">
				<div class = "lock">
				<div class = "nature">Personal Details</div>
				<div class = "less">
				<span>Cmail Address</span><?php echo $r['cmail']; ?><br><br>
				<span>Full Name</span><?php echo $r['firstName']; ?> <?php echo $r['lastName']; ?><br><br>
				<span>Phone No </span><?php echo $r['phoneNo']; ?><br><br>
				<span>Date of Birth</span><?php echo $r['date_of_birth']; ?>
				</div>
				</div>
				</div>
				</center>
				<?php } ?>
				<form action = "update.php" method = "post" enctype = "multipart/form-data">
					<center>
						<input type = "file" name = "image" accept = "image/*" required>
						<input type = "submit" value = "Submit" title = "Change profile picture">
					</center>
				</form>
			</section>
		</article>
		</div>
	</body>
	<script type="text/javascript">
	//1100
	article = document.getElementById('article');
	aside = document.getElementById('aside');
	body = document.getElementById('body');
	function aside1(){
		aside.classList.toggle("aside");
		article.classList.toggle("article");
		body.classList.toggle("body");
	}
	</script>
</html>