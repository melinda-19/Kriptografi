<?php
	include('login.php');
 
	if(isset($_SESSION['login_user'])){
		header("location: user/index.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Login Form</title>
		
		<!--CSS-->
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="wrapper">
			<form  action="" method="post" name="login-form" class="login-form">
				<div class="header">
					<center><h1>Aplikasi Kriptografi</h1></center>
					<center><H3>AES 256</H3></center>
				</div>
				
				<div class="content">
					<input name="nip" id="nip" type="text" class="input nip" placeholder="NIP" onfocus="this.value=''" />
					<input name="password" id="password" type="password" class="input password" placeholder="Password" onfocus="this.value=''" />
				</div>
				
				<div class="footer">
					<input type="submit" name="submit" value="Login" class="button" />
				</div>
			</form>
		</div>

	</body>
</html>