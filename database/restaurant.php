<?php
	function getAllRestaurant($db){
		$stmt = $db->prepare('SELECT * FROM Restaurant');
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	function getAllRestaurantsFromOwner($db, $owner){
		$stmt = $db->prepare('SELECT * FROM Restaurant WHERE id_owner = ?');
		$stmt->execute(array($owner));
		$result = $stmt->fetchAll();
		return $result;
	}
	
	function getRestaurantItem($db, $id){
		$stmt = $db->prepare('SELECT * FROM Restaurant WHERE id_restaurant = ?');
		$stmt->execute($id);
		$result = $stmt->fetch();
		return $result;
	}

	function addRestaurant($db, $name, $owner, $address, $description, $open_time, $close_time, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday, $photos){
		$stmt = $db->prepare('INSERT INTO Restaurant (id_owner, id_category, name, address, description, open_time, close_time, monday, tuesday, wednesday, thursday, friday, saturday, sunday) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
		$stmt->execute(array($owner, NULL, $name, $address, $description, $open_time, $close_time, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday));
	}

	
	function deleteRestaurants($db,$username){
		$stmt = $db->prepare('DELETE FROM Restaurant WHERE id_owner = ?');
		$stmt->execute(array($username));
	}
 ?>