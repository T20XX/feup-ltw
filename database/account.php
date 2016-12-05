<?php
	function getAccountItem($db, $username){
		$stmt = $db->prepare('SELECT id_account, name, type FROM Account WHERE id_account = ?');
		$stmt->execute(array($username));
		$result = $stmt->fetch();
		return $result;
	}

 ?>