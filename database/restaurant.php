<?php
	function getAllRestaurant($db){
		$stmt = $db->prepare('SELECT * FROM Restaurant');
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
	
	function getRestaurantItem($db, $id){
		$stmt = $db->prepare('SELECT * FROM news WHERE id = ?');
		$stmt->execute($id);
		$result = $stmt->fetch();
		return $result;
	}

 ?>