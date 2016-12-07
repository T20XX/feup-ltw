<!DOCTYPE html>
<html>
	<head>
		<title>Table for Two</title>
		<link rel="stylesheet" href="css/site.css">
		<link rel="stylesheet" href="css/session.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="js/header.js"></script>
	</head>
	<body>
		<div id="header">
			
			<h1> Table for Two </h1>
			
			<!-- Fazer div para search com label e botão -->
			
			<div id="menu">
				<ul>
					<li><a id="go_home"> Home </a></li> 
					<li><a > Restaurants </a> </li>
					<li><a > Advanced Search </a> </li>
					<li><a > Information </a></li>
					<?php
					if (isset($_SESSION['id_account'])){
						echo '<li><a >' . $_SESSION['name'] .'</a></li>';
						echo '<li><a id="do_logout"> Logout </a></li>';
					}
					else{
						echo '<li><a id="do_login"> Login </a></li>';
						echo '<li><a id="do_signup"> SignUp </a></li>';		
					}
					?>
				</ul>
			</div>
			
			<form id="loginform" method="post" action="action_login.php">
				<label for="username">Username</label>
				<input class="insert_info" type="text" name="username" required="required">
				<label for="password">Password</label>
				<input class="insert_info" type="password" name="password" required="required">
				<input id="login_button" type="submit" value="Login" class="block_button">
			</form>
					
		</div>