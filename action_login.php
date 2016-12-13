<?php
	include_once('database/connection.php');
    include_once('database/account.php');
	if (($result = userValidLogIn($db, $_POST['username'], $_POST['password'])) != null){
	    session_start();
		$_SESSION['id_account'] = $result['id_account'];
		$_SESSION['name'] = $result['name'];
		$_SESSION['type'] = $result['type'];
		$_SESSION['age'] = $result['age'];
		$_SESSION['gender'] = $result['gender'];
	}else{
		echo "The user doesn't exist or the password entered is wrong";
	}
	header("Location: .");
	exit();
?>