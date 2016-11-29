<?php
	include_once('database/connection.php');
	$stmt = $db->prepare('SELECT id_account, name, type FROM Account WHERE id_account = ? AND pass = ?');
	$stmt->execute(array($_POST['username'],sha1($_POST['password'])));
	$result = $stmt->fetchAll();
	if ($result != null){
		echo $result[0]['id_account'];
	}else{
		echo 'The user does not exist';
	}
?>