<div id="content">
	<h1 class="title"> Home </h1>
	<div class="display_big_center">
		<?php
			$result = getAllRestaurant($db);
			
			foreach( $result as $row) {
				echo '<a class="item" href="restaurant_item.php?id=' . $row['id_restaurant'] . '">' . $row['name']  .  '</a>';
			 }
		?>
	</div>
</div>