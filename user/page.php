<?php
 	require_once '../loader.php';
?>
<html>
	<head>
		<title>Mail</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="../style/body.css">
		<style type="text/css">
			.all{width: 100%; height: auto; margin: 10px; display: block; position: relative;}
			.subject{font-weight: bold; font-size: 20px;}
			.check{font-weight: bold; margin-right: 20px;}
			.data *{width: 100%; max-width: 400px; height: auto;}
			.forward{padding: 10px; background-color: #ccc; font-weight: bold; text-decoration: none; right: 100px; position: absolute; color: black;}

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
				<a href="block.php">Users</a>
				<a href="unblock.php">Blocked</a>
				<a href="trash.php">Trash</a>
				<a href="logout.php">Logout</a>
			</section>
		</aside>
		<article id = "article">
			<?php 
			$message = $_GET['id'];
			$sql = "SELECT * FROM compose WHERE message_ID = '$message'";
			$result = mysqli_query($connection, $sql);
			if($h = mysqli_fetch_assoc($result)){
			?>
			<section class = "all">
				<div class = "subject"><?php echo $h['subject']; ?></div><br>
				<div class = "user"><span class = "check"><?php echo $retVal = ($h['sender'] == $cmail) ? $h['receiver'] : $h['sender']; ?></span><?php echo $h['dateSent']; ?></div><br>
				<div class = "content">
					<?php echo $h['message']; ?>
				</div><br><br>
				<div class = "data">
					<?php if($h['dataType'] == "video"){ ?>
					<video src = "../image/<?php echo $h['data']; ?>" controls></video>
					<?php } elseif($h['dataType'] == "audio"){ ?>
					<audio src = "../image/<?php echo $h['data']; ?>" controls></audio>
					<?php } elseif($h['dataType'] == "image"){ ?>
					<img src = "../image/<?php echo $h['data']; ?>">
					<?php } elseif($h['dataType'] == "application"){ ?>
					<iframe src = "../image/<?php echo $r['data']; ?>"></iframe>
					<?php } else{}?>
				</div>
			</section>
			<?php } ?>
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