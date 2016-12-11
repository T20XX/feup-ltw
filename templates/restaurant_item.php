<div id="content">
	
	<div>
		<?php
			$result = getRestaurantItem($db, array($_GET['id']));
			if($result['id_owner'] == $_SESSION['id_account']){
				?>
				<input action="edit_restaurant.php" class="button_1 button" type="submit" value="Edit Restaurant">
				<input action="action_delete_restaurant.php" class="button_1 button" type="submit" value="Delete Restaurant">
				<?php
			}
			
			echo '<h1>' . $result['name'] . '</h1>';
			echo '<h3> Rating : ' . $result['stars'] . '</h3>';
			echo '<h4> Address : ' . $result['address'] . '</h4>';
			echo '<p> Description </p>';
			echo '<p>' . $result['description'] . '</p>';
			echo '<img src="images/'. $result['name'] . '_0" alt="Image" width="500px">'
		?>
	</div>
	<div>
		<h2 class="subtitle"> Comments </h2>
		
		<?php
		
			if($_SESSION['type'] == "reviewer"){ ?>
				 <form action="action_add_review.php" class = "big_form" method="post">
					<fieldset>
						<legend> Add Review </legend>
						
						<?php 
							echo '<input type="hidden" name="id_restaurant" value="' . $_GET['id'] . '">'; 
						?>
						
						<div>
							<label> Score </label>
							<input type="radio" name="score" value="1" checked="checked">
							<input type="radio" name="score" value="2">
							<input type="radio" name="score" value="3">
							<input type="radio" name="score" value="4">
							<input type="radio" name="score" value="5">
						</div>
						<p><label>Comment: 
							<textArea type="text" class="max_width big_textArea" name="comment" required="required"></textArea>
						</label></p>
						<input class="button_1 button" type="submit" value="Add Review">
					</fieldset>
					
				</form>
			<?php
			}
			
			$reviews = getAllReviews($db, $_GET['id']);
			
			foreach($reviews as $review){
				echo '<div class="review">';
					echo '<p>' . $review['id_reviewer'] . '</p>';
					echo '<p>Stars: ' . $review['score'] . '</p>';
					echo '<p>' . $review['comment'] . '</p>';
				echo '</div>';
			}
		?>
	</div>
	
</div>