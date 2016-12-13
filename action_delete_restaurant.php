<?php
	include_once('database/connection.php');
	include_once('database/restaurant.php');
	session_start();
	deleteRestaurant($db,$_POST['id']);

	header('Location: my_restaurants.php');
?>