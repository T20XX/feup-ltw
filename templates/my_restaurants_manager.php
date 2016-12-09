<div id="content">
	<h1 class="title"> My Restaurants </h1>
	<input id="button_add_restaurant" class="button_1" type="submit" value="Add Restaurant">
	<?php
		$result = getAllRestaurantsFromOwner($db, $_SESSION['id_account']);
		
		foreach( $result as $row) {
				echo '<li><a class="feed" href="restaurant_item.php?id=' . $row['id_restaurant'] . '">' . $row['name']  .  '</a></li>';
			 }
	?>
</div>
