<?php
	function getAccountItem($db, $username){
		$stmt = $db->prepare('SELECT id_account, name, age, type FROM Account WHERE id_account = ?');
		$stmt->execute(array($username));
		$result = $stmt->fetch();
		return $result;
	}
	
	function editAccount($db,$username,$name,$age,$gender){
	$sql="UPDATE Account SET name=?, age=?, gender=? WHERE id_account = '$username'";
	$stmt=$db->prepare($sql);
	$stmt->execute(array($name,$age,$gender));
	}

	function deleteAccount($db,$username){
	$stmt = $db->prepare("DELETE FROM Account WHERE id_account=?");
	$stmt->execute(array($username));
	}
	
	function getFavoriteRestaurants($db, $username){
		$stmt = $db->prepare('SELECT * FROM Restaurant WHERE id_restaurant IN (SELECT id_restaurant FROM Review WHERE id_reviewer = ? ORDER BY score DESC)');
		$stmt->execute(array($username));
		$result = $stmt->fetchAll();
		return $result;
	}
	?>
 
 
 