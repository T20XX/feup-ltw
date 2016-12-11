<div id="content">
	
	<div id="item">
		<?php
			$result = getRestaurantItem($db, array($_GET['id']));
			if($result['id_owner'] == $_SESSION['id_account']){
				?>
				<input id="button" action="action_edit_restaurant.php" class="button_1 button" type="submit" value="Edit Restaurant">
				<input id="button" action="action_delete_restaurant.php" class="button_1 button" type="submit" value="Delete Restaurant">
				<?php
			}
			
			echo '<h1>' . $result['name'] . '</h1>';
			echo '<p>' . $result['address'] . '</p>';
			echo '<p>' . $result['description'] . '</p>';
			echo '<p>' . $result['stars'] . '</p>';
			echo '<img src="images/'. $result['name'] . '_0" alt="Image" width="500px">'
		?>
	</div>
</div>