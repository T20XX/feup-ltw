<div id="content">
	<h1 class="title"> My Restaurants </h1>
	<input id="button_add_restaurant" class="button_1" type="submit" value="Add Restaurant">
	<?php
		$result = getAllRestaurant($db);
		
		foreach($result as $row)
			echo '<a>' . $result['name'] . '</a>';
	?>
</div>
