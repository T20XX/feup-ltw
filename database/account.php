<?php
	function getAccountItem($db, $username){
		$stmt = $db->prepare('SELECT id_account, name, age, type FROM Account WHERE id_account = ?');
		$stmt->execute(array($username));
		$result = $stmt->fetch();
		return $result;
	}

	

	function editAccount($db,$username,$name,$password,$age,$gender){
		$pass= sha1('$password');
	$sql="UPDATE Account SET name=?, age=?, gender=? WHERE id_account = '$username'";
	$stmt=$db->prepare($sql);
	$stmt->execute(array($name,$age,$gender));
	}
 ?>