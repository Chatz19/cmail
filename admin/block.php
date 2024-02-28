<?php
 	require_once '../loader.php';
?>
<html>
	<head>
		<title>Users</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<link rel="stylesheet" type="text/css" href="../style/body.css">
		<style type="text/css">
			article section{padding-top: 30px;}
			table{margin: auto; background-color: #ccc;}
			td, th{text-align: center; background-color: white;}
			th{padding: 10px;}
			td:last-child{background-color: blue; color: white; font-weight: bold; padding: 10px; cursor: pointer;}
			tr:nth-child(odd) td:last-child{background-color: darkblue;}
			td img{height: 40px; width: 40px; object-fit: cover;}
			td{text-transform: capitalize;}
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
				<a href="block.php" class = "active">Users</a>
				<a href="unblock.php">Blocked</a>
				<a href="trash.php">Trash</a>
				<a href="logout.php">Logout</a>
			</section>
		</aside>
		<article id = "article">
			<section>
				<table>
					<tr>
						<th title = "Profile Picture">Image</th>
						<th>cmail Address</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Phone Number</th>
						<th>Date of Birth</th>
						<th></th>
					</tr>
					<?php 
					$sql = "SELECT * FROM user WHERE cmail != '$cmail' AND blocked = 0";
					$result = mysqli_query($connection, $sql);
					while($h = mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td><img src="../image/<?php echo $h['image']; ?>"></td>
						<td style = "text-transform: lowercase;"><?php echo $h['cmail']; ?></td>
						<td><?php echo $h['firstName']; ?></td>
						<td><?php echo $h['lastName']; ?></td>
						<td><?php echo $h['phoneNo']; ?></td>
						<td><?php echo $h['date_of_birth']; ?></td>
						<td onclick = "location.assign('http:decide.php?user=<?php echo $h['cmail']; ?>&block=1')">Block</td>
					</tr>
					<?php } ?>
				</table>
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