<div id="content">
	<ul>
		<?php
			include_once getcwd() . "/database/connection.php";
			$stmt = $db->prepare('SELECT * FROM Restaurant');
			$stmt->execute();
			$result = $stmt->fetchAll();
			
			foreach( $result as $row) {
				echo '<li><a class="feed" href="restaurant_item.php?id=' . $row['id_restaurant'] . '">' . $row['name']  .  '</a></li>';
			 }
		?>
	</ul>
</div>