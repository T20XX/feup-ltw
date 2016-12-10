<?php  
	include_once('database/connection.php');
	include_once('database/account.php');
	include_once('database/restaurant.php');
	session_start();
	deleteRestaurants($db,$_SESSION['id_account']);
	deleteAccount($db,$_SESSION['id_account']);
	session_destroy();
    include ('templates/header.php');  

?>
	<div id="content">
<?php
	echo 'Account succesfully deleted!';
		
?>
	</div>
<?php
	include ('templates/footer.php');
?>