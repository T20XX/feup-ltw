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
	
	function getRestaurantId($db, $name, $owner){
		$stmt = $db->prepare('SELECT id_restaurant FROM Restaurant WHERE name = ? AND id_owner = ?');
		$stmt->execute(array($name,$owner));
		$result = $stmt->fetch()[0];
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
	
	function addCategoriesRestaurant($db,$name,$owner,$categories){
		$id_restaurant = getRestaurantId($db,$name,$owner);
		
		if(is_array($categories)){
			foreach($categories as $category){
				$exec = $db->prepare('INSERT INTO RestaurantFood (id_restaurant,id_category) VALUES (?,?)');
				$exec->execute(array($id_restaurant,$category));
			}			
		}
		else
		{
			$category = $categories;
			$exec = $db->prepare('INSERT INTO RestaurantFood (id_restaurant,id_category) VALUES (?,?)');
			$exec->execute(array($id_restaurant,$category));
		}
	}

	
	function deleteRestaurants($db,$username){
		$stmt = $db->prepare('DELETE FROM Restaurant WHERE id_owner = ?');
		$stmt->execute(array($username));
	}
 ?>