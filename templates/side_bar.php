			<div id="side_bar">
				<!-- search -->
				<div id = "categories">
					<h4> Categories </h4>
					
					<?php
					include_once getcwd() . "/database/connection.php";
					$stmt = $db->prepare('SELECT * FROM Category');
					$stmt->execute();
					$result = $stmt->fetchAll();
					
					foreach( $result as $row) {
						echo '<a class="category" href="">' . $row['id_category'] . '</a>';
					 }
					?>
					
				</div>
				<div id = "top_10">
					<h4> Top 10 </h4>
					<!-- javascript para fazer o display do top 10 restaurantes em que cada um é seleccionavel -->
				</div>
			</div>
		</div>