<?php
	$db = new PDO('sqlite:ltw.db');
	$stmt = $db->prepare('SELECT id_account FROM account WHERE id_account = ?');
	$stmt->execute(array($_POST['username']));
	$result = $stmt->fetchAll();
	if ($result == null){
		$stmt = $db->prepare('INSERT INTO account (id_account, name, pass, type) VALUES (?,?,?,?)');
		$stmt->execute(array($_POST['username'],$_POST['name'],sha1($_POST['password']),$_POST['type'],));
	}else{
		echo 'The user already exists';
	}
?>