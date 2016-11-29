<!DOCTYPE html>
<html>
	<head>
		<title>TESTE SITE</title>
		<link rel="stylesheet" href="css/site.css">
		<link rel="stylesheet" href="css/session.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="js/loginform.js"></script>
		<script src="js/logout.js"></script>
		<script src="js/signup.js"></script>
	</head>
	<body>
		<div id="header">
		
			<h1> Site Teste</h1>
		
			<div id="session">
			
				<div id="guest">
					<div id="login">
						<input id="do_login" class="session" type="submit" name="Login" value="Login">
						<form id="loginform" method="post" action="action_login.php">
						  <label for="username">Username</label>
						  <input class="insert_info" type="text" name="username" required="required">
						  <label for="password">Password</label>
						  <input class="insert_info" type="password" name="password" required="required">
						  <input id="login_button" type="submit" value="Login" class="block_button">
						</form>						
					</div>
					<div id="do_signup">
						<input id="do_signup" class="session" type="submit" name="SignUp" value="SignUp">
					</div>
				</div>
				
				<div id="account">
					<input id="do_logout" class="session" type="submit" name="Logout" value="Logout">
				</div>
				
			</div>
			
			<div id="menu">
				<ul>
					<li><a href="index.php">Home</a></li> 
					<li><a href=""> Restaurants </a> </li>
					<li><a href=""> Advanced Search </a> </li>
					<li><a href=""> Information </a></li>
					<li><a class="account" href=""> Account </a></li>
				</ul>
			</div>
		</div>