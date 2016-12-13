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
		
		echo '<h1 id="title"> Category - ' . $_GET['category'] . '</h1>';
		echo '<div class="display_big_center">';
		
		foreach($restaurants as $restaurant)
		{
			$result=getAllCategories($db,$restaurant['id_restaurant']);
			if(in_array($_GET['category'],$result))
			{
				echo '<a class="item" href="restaurant_item.php?id=' . $restaurant['id_restaurant'] . '">' . $restaurant['name']  .  '</a>';
			}
				
		}
		echo '</div>';
		?>
	</div>
	
<?php  
  include ('templates/footer.php');
?>