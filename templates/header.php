<!DOCTYPE html>
<html>
	<head>
		<title>Table for Two</title>
		<link rel="stylesheet" href="css/site.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="js/header.js"></script>
		<script src="js/other.js"></script>
		
	</head>
	<body>
		<div id="header">
			
			<h1> Table for Two </h1>
			
			<div id="search_bar">
				<input type="text" name="search">
				<button type="submit"\>
			</div>
			
			<div id="menu">
				<ul>
					<li><a id="go_home" class="header_button"> Home </a></li> 
					<li><a id="go_restaurants" class="header_button"> Restaurants </a> </li>
					<li><a id="go_advanced_search" class="header_button"> Advanced Search </a> </li>
					<li><a id="go_information" class="header_button"> Information </a></li>
					<?php
					if (isset($_SESSION['id_account'])){
						if($_SESSION['type'] == 'owner')
								echo '<li><a id="go_my_restaurants" class="header_button"> My Restaurants </a></li>';
						echo '<li><a id="go_my_account" class="header_button">' . $_SESSION['name'] .'</a></li>';
						echo '<li><a id="do_logout" class="header_button"> Logout </a></li>';
					}
					else{
						echo '<li><a id="do_login" class="header_button"> Login </a></li>';
						echo '<li><a id="do_signup" class="header_button"> SignUp </a></li>';		
					}
					?>
				</ul>
			</div>
			
			<form id="loginform" class="small_form" method="post" action="action_login.php">
				<label for="username">Username</label>
				<input class="insert_info" type="text" name="username" required="required">
				<label for="password">Password</label>
				<input class="insert_info" type="password" name="password" required="required">
				<input id="login_button" class="button_1" type="submit" value="Login">
			</form>
					
		</div>