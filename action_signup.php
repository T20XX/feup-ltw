<?php
	include_once('database/connection.php');
	$stmt = $db->prepare('SELECT id_account FROM Account WHERE id_account = ?');
	$stmt->execute(array($_POST['username']));
	$result = $stmt->fetchAll();
	if ($result == null){
		$stmt = $db->prepare('INSERT INTO Account (id_account, name, pass, type) VALUES (?,?,?,?)');
		$stmt->execute(array($_POST['username'],$_POST['name'],sha1($_POST['password']),$_POST['type'],));
		echo 'The user was created sucessfully';
	}else{
		echo 'The user already exists';
	}
?>