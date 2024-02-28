<html>
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<style type="text/css">
		body{width: 100%; height: auto; margin: 0; padding: 0; font-family: arial;}
		article{height: auto; width: 100%; max-width: 500px; background-color: rgba(51, 204, 255); margin: 20px auto; padding: 10px 0;}
		header{font-size: 20px; font-weight: bold; color: white; text-align: center; margin: 20px 0;}
		section{margin: auto; width: 90%;}
		input{width: 100%; box-sizing: border-box; padding: 6px; margin: 3px 0; margin-bottom: 15px; border-radius: 10px; outline: none;}
		form{color: white; font-weight: bold;}
		input[type=checkbox]{width: 20px; vertical-align: middle; margin: 0;}
		input[type=submit]{font-weight: bold;}
		span{float: right;}
		span a{text-decoration: none;}
		div{margin: 10px auto; text-align: center;}
		div a{color: black;}
		</style>
	</head>
	<body>
		<article>
			<header>Sign In</header>
				<section>
					<form action = "loginphp.php" method = "post">
						Cmail address:<br>
						<input type = "email" name = "cmail" placeholder = "E.g. damilola@cmail.com" required><br>
						Password:
						<input type = "password" name = "password" placeholder = "********" required><br>
						<input type = "checkbox"> Remember me <span><a href="">Forget Password</a></span><br><br>
						<input type = "submit" value = "Submit">
					</form>
				</section>
		</article>
		<div>Don't have an account? <a href="register.php">Create here.</a></div>
	</body>
</html>