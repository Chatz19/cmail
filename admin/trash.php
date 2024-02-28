<?php
 	require_once '../loader.php';
?>
<html>
	<head>
		<title>Trash</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="../style/body.css">
		<style type="text/css">
		.inbox{padding: 4px 10px; box-sizing: box-border; width: 100%; border-bottom: 1px solid #ccc; display: flex; flex-direction: row; 
				align-items: center;}
		.profile{padding: 4px 10px; box-sizing: box-border; width: 100%; border-bottom: 1px solid #ccc; display: inline-block;}
		input[type=checkbox]{margin: 8px 0px; margin-right: 10px; vertical-align: middle; outline: none;}
		.inbox div div span{font-weight: bold;}
		.inbox img{height: 30px; width: 30px; object-fit: cover; border-radius: 100%; vertical-align: middle;}
		.inbox .div{margin-left: 10px; text-decoration: none; color: black; display: flex; flex-direction: row; cursor: pointer;}
		.profile .profileImage{all: initial; float: right; margin-right: 30px; width: 40px; height: 40px; object-fit: cover; border-radius: 100%;}
		#hideProfile{display: none; height: 40px;}
		.span{margin: 0px 20px; font-weight: bold; width: 15%; display: inline-block;}
		.message{margin-left: 0%; width: 80%;}
		.profile button{padding: 8px 10px; background-color: #ccc; color: black; font-weight: bold; margin: 3px 10px; outline: none;}
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
				<a href="trash.php" class = "active">Trash</a>
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
				<div class = "profile" id = "profile"><button type = "submit" onclick = "location.assign('http:detail.php')">Manage Account</button><img src="../image/<?php echo $r['image']; ?>" class = "profileImage"></div>
				<div class = "profile" id = "hideProfile">
					<form action = "message1.php" method = "post" style = "display:inline-block">
						<input type = "hidden" name = "id" id = "id">
						<input type = "hidden" name = "trash" value = "0">
						<button type = "submit">Move to inbox</button>
					</form>

					<form action = "delete.php" style = "display:inline-block">
						<input type = "hidden" name = "id" id = "delete">
					<button>Delete</button>
					</form>

					<img src="../image/<?php echo $r['image']; ?>" class = "profileImage">
				</div>
				<?php 
					$sql = "SELECT * FROM compose WHERE receiver = '$cmail' AND trash = 1 ORDER BY message_ID DESC";
					$result = mysqli_query($connection, $sql);
					while($h = mysqli_fetch_assoc($result)){
						$name = $h['receiver'];
				?>
				<div class = "inbox">
					<input type = "checkbox" onclick = "show1(this)" value = "<?php echo $h['message_ID']; ?>" name = "name">
					<?php $sql = "SELECT * FROM user WHERE cmail = '$name'";
					$result = mysqli_query($connection, $sql);
					if($j = mysqli_fetch_assoc($result)){
						?>
					<img src="../image/<?php echo $j['image']; ?>" onclick = "location.assign('http:page.php?id=<?php echo $h['message_ID']; ?>')">
					<?php } ?>
					<div class = "div" onclick = "location.assign('http:page.php?id=<?php echo $h['message_ID']; ?>')">
						<div class = "span">To: <?php echo $h['receiver']; ?></div>
						<div class = "message"><span><?php echo $h['subject']; ?> - </span> <?php echo $h['message']; ?></div>
					</div> 
				</div>
				<?php } ?>
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

	function show1 (arg) {
		var profile = document.getElementById('profile');
		var hideProfile = document.getElementById('hideProfile');
		if(arg.checked == true){
			profile.style.display = "none";
			hideProfile.style.display = "block";
			document.getElementById('id').value = arg.value;
			document.getElementById('delete').value = arg.value;
			document.getElementById('forward').value = arg.value;
		}
		else{
			profile.style.display = "inline-block";
			hideProfile.style.display = "none";
			document.getElementById('id').value = '';
			document.getElementById('delete').value = '';
			document.getElementById('forward').value = '';
		}
	}
	</script>
</html>