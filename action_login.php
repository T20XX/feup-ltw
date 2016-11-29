<?php
	include_once('database/connection.php');
	$stmt = $db->prepare('SELECT id_account, name, type FROM Account WHERE id_account = ? AND pass = ?');
	$stmt->execute(array($_POST['username'],sha1($_POST['password'])));
	$result = $stmt->fetch();
	if ($result != null){
		echo $result['id_account'] . '<br>';
		echo $result['name']. '<br>';
		echo $result['type']. '<br>';
		session_start();
		$_SESSION['id_account'] = $result['id_account'];
		$_SESSION['name'] = $result['name'];
		$_SESSION['type'] = $result['type'];
		echo $_SESSION['id_account'] . '<br>';
		echo $_SESSION['name'] . '<br>';
		echo $_SESSION['type'] . '<br>';
	}else{
		echo 'The user does not exist';
	}
	header("Location: .");
	exit();
?>