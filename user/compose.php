<?php
 	require_once '../loader.php'
?>
<html>
	<head>
		<title>Compose</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="../style/body.css">
		<style type="text/css">
			form{width: 90%; height: auto; margin: auto; display: flex; flex-direction: column; align-content: space-around;}
			label{width: 100%; height: auto; display: block; margin: 20px 0px; display: flex; flex-direction: row; justify-content: space-between;
					color: rgba(0, 0, 0, 0.6); font-size: 20px;}
			label input{float: right; width: 90%; padding: 4px 10px; box-sizing: border-box; outline: none; border: none; border-bottom: 1px solid #ccc;}
			textarea{outline: none; width: 100%; border: none; border-bottom: 1px solid #ccc;}
			textarea::placeholder{font-size: 16px; font-family: arial;}
			.messageBody{width: 100%; display: flex; flex-direction: column; flex: 1 0 auto;}
			.bottom{width: 100%; height: 50px; display: flex; flex-direction: row; justify-content: space-between; margin-top: 10px;}
			input[type=submit]{all: unset; background-color: #ccc; height: 20px; padding: 5px 10px; cursor: pointer;}
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
				<a href="compose.php" class = "active">Compose</a>
				<a href="trash.php">Trash</a>
				<a href="logout.php">Logout</a>
			</section>
		</aside>
		<?php 
			$sql = "SELECT * FROM user WHERE cmail = '$cmail' AND password = '$password'";
			$result = mysqli_query($connection, $sql);
			if($r = mysqli_fetch_assoc($result)){

			}
		?>
		<article id = "article">
			<section>
				<form action = "composephp.php" method = "post" enctype = "multipart/form-data">
				<div class = "messageBody">
					<label>From<input type = "email" name = "sender" value = "<?php echo $r['cmail']; ?>" readonly></label>
					<label>To<input type = "email" name = "reciever" required></label>
					<label><textarea placeholder="Subject" rows = "3" name = "subject"></textarea></label>
					<textarea style = "border:none;" rows = "20" name = "message"></textarea>
				</div>
					<div class = "bottom">
						<input type = "file" name = "file">
						<input type = "submit" value = "Send">
					</div>
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