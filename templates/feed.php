	<div id="feed">
		<h4> Feed </h4>
			<ul>
				<?php
					include_once getcwd() . "/database/connection.php";
					$stmt = $db->prepare('SELECT * FROM Restaurant');
					$stmt->execute();
					$result = $stmt->fetchAll();
					
					foreach( $result as $row) {
						echo '<li><a class="feed" href="">' . $row['name']  .  '</a></li>';
					 }
				?>
			</ul>
	</div>