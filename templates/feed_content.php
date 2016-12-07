<div id="content">
	<ul>
		<?php
			include_once getcwd() . "/database/connection.php";
			include_once getcwd() . "/database/restaurant.php";
			$result = getAllRestaurant($db);
			
			foreach( $result as $row) {
				echo '<li><a class="feed" href="restaurant_item.php?id=' . $row['id_restaurant'] . '">' . $row['name']  .  '</a></li>';
			 }
		?>
	</ul>
</div>