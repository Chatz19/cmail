<html>
	<head>
		<title>Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.0, user-scalable=yes" />
		<style type="text/css">
		body{width: 100%; height: auto; margin: 0; padding: 0; font-family: arial;}
		article{height: auto; width: 100%; max-width: 500px; background-color: rgba(51, 204, 255); margin: 20px auto; padding: 10px 0;}
		header{font-size: 20px; font-weight: bold; color: white; text-align: center; margin: 20px 0px;}
		section{margin: auto; width: 90%;}
		input{width: 100%; box-sizing: border-box; padding: 6px; margin: 3px 0; margin-bottom: 15px; border-radius: 10px; outline: none;}
		form{color: white; font-weight: bold;}
		input[type=checkbox]{width: 20px; vertical-align: middle; margin: 0;}
		input[type=submit]{font-weight: bold;}
		input[type=text]{width: 40%;}
		input[type=date], input[type=number]{width: 40%;}
		input[type=date]{float: right;}
		input[type=text]:nth-child(even){float: right;}
		span{float: right;}
		span a{text-decoration: none;}
		div{margin: 10px auto; text-align: center;}
		div a{color: black;}
		header span{font-size: 14px; float: none;}
		form a{text-decoration: none;}
		</style>
	</head>
	<body>
		<article>
			<header>Sign Up<br><span>Please fill in this form to create an account!</span></header>
			<hr><br>
				<section>
					<form action = "registerphp.php" method = "post">
						<input type = "text" name = "firstName" placeholder = "First Name" required>
						<input type = "text" name = "lastName" placeholder = "Last Name" required><br>
						<input type = "number" name = "number" placeholder = "Phone Number" required>
						<input type = "date" name = "date" title = "Date of Birth" required><br>
						Cmail address:<br>
						<input type = "email" name = "cmail" placeholder = "E.g. damilola@cmail.com" required><br>
						Password:
						<input type = "password" name = "password" id = "pass" placeholder = "********" required><br>
						Confirm Password:
						<input type = "password" onkeyup = "pass1(this)" placeholder = "********" required><br>
						<input type = "checkbox" onclick = "demo(this)"> I accept the <a href="">terms of use</a> & <a href="">privacy policy</a><br><br>
						<input type = "submit" value = "Submit" id = "submit" disabled>
					</form>
				</section>
		</article>
		<div>Already have an account? <a href="login.php">Login here.</a></div>
		<script type="text/javascript">
		var pass = document.getElementById('pass');
		function pass1 (text) {
			if(text.value != "" && text.value != pass.value){
				text.style.borderColor = "red";
			}
			else{
				text.style.borderColor = "";
			}
		}
		function demo (read) {
			if(read.checked == true){
				document.getElementById('submit').disabled = "";
			}
			else{
				document.getElementById('submit').disabled = "true";
			}
		}
		</script>
	</body>
</html>