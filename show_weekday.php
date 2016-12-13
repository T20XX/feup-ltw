<?php
  include ('templates/session_start.php');
  include_once('database/connection.php');
  include_once('database/restaurant.php');
  include ('templates/header.php');
  ?>

  	<div id="content">
		<?php
		
		if($_GET['day'] != 'monday' && $_GET['day'] != 'tuesday' && $_GET['day'] != 'wednesday' && $_GET['day'] != 'thursday' && $_GET['day'] != 'friday' && $_GET['day'] != 'saturday' && $_GET['day'] != 'sunday')
			echo 'Why are you messing with our website? :(';
		else
		{
			$result=getRestaurantDay($db,$_GET['day']);
			foreach($result as $row)
				echo '<a class="item" href="restaurant_item.php?id=' . $row['id_restaurant'] . '">' . $row['name']  .  '</a>';
		}
		?>
	</div>
	
<?php  
  include ('templates/footer.php');
?>