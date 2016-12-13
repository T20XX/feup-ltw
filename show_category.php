<?php
  include ('templates/session_start.php');
  include_once('database/connection.php');
  include_once('database/restaurant.php');
  include_once('database/restaurant_food.php');
  include ('templates/header.php');
  ?>

  	<div id="content">
		<?php
		$restaurants=getAllRestaurant($db);
		
		foreach($restaurants as $restaurant)
		{
			$result=getAllCategories($db,$restaurant['id_restaurant']);
			if(in_array($_GET['category'],$result))
				echo '<a class="item" href="restaurant_item.php?id=' . $restaurant['id_restaurant'] . '">' . $restaurant['name']  .  '</a>';
		}
		?>
	</div>
	
<?php  
  include ('templates/footer.php');
?>