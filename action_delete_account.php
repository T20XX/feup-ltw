<?php  
	include_once('database/connection.php');
	include_once('database/account.php');
	include_once('database/restaurant.php');
	include ('templates/session_start.php');
	
	/*Security*/
  
	if ($_SESSION['csrf_token'] != $_POST['csrf']) {
		header('Location: error.php');
	}
	else{
		deleteRestaurants($db,$_SESSION['id_account']);
		deleteAccount($db,$_SESSION['id_account']);
		session_destroy();
		header('Location: index.php');
	}
?>
	