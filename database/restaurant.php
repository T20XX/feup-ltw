<?php
	function getAllRestaurant($db){
		$stmt = $db->prepare('SELECT * FROM Restaurant');
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
	
	function getRestaurantItem($db, $id){
		$stmt = $db->prepare('SELECT * FROM Restaurant WHERE id_restaurant = ?');
		$stmt->execute($id);
		$result = $stmt->fetch();
		return $result;
	}

	function addRestaurant($db, $id){
		$stmt = $db->prepare('INSERT INTO FunctionTime (id_functionTime ,open_time,	close_time,	monday,	tuesday, wednesday,	thursday, friday, saturday,	sunday) VALUES (?,?,?,?,?,?,?,?,?,?)');

		$stmt = $db->prepare('INSERT INTO Account (id_account, name, pass, type) VALUES (?,?,?,?)');
		$stmt->execute(array($_POST['username'],$_POST['name'],sha1($_POST['password']),$_POST['type'],));
	}

 ?>