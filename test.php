<?php
 	
?>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="../style/body.css">
		<style type="text/css">
			
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
				<a href="inbox.php" class = "active">Inbox</a>
				<a href="sent.php">Sent</a>
				<a href="compose.php">Compose</a>
				<a href="trash.php">Trash</a>
				<a href="spam.php">Spam</a>
				<a href="help.php">Help and Feedback</a>
				<a href="logout.php">Logout</a>
			</section>
		</aside>
		<article id = "article">
			<section>
				
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