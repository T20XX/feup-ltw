<div id="content">
	<div id="restaurant information">	
		<?php
			$result = getRestaurantItem($db, array($_GET['id']));
			$categories = getRestaurantFood($db,$_GET['id']);
			if($result['id_owner'] == $_SESSION['id_account']){
				?>
				<input action="edit_restaurant.php" class="button_1 button" type="submit" value="Edit Restaurant">
				<input action="action_delete_restaurant.php" class="button_1 button" type="submit" value="Delete Restaurant">
				<?php
			}
			
			echo '<h1>' . $result['name'] . '</h1>';
			echo '<h3> Rating : ' . $result['stars'] . '</h3>';
			echo '<h3 id="address"> Address : ' . $result['address'] . '</h3>';
			echo '<h3> Description :</h3>';
			echo '<p>' . $result['description'] . '</p>';
			
			echo '<h3> Average Price : ' . $result['avg_price'] . '</h3>';
			
			echo '<p> Function Time : from ' . $result['open_time'] . ' to ' . $result['close_time'];
			if($result['monday']) echo ', Monday';
			if($result['tuesday']) echo ', Tuesday';
			if($result['wednesday']) echo ', Wednesday';
			if($result['thursday']) echo ', Thursday';
			if($result['friday']) echo ', Friday';
			if($result['saturday']) echo ', Saturday';
			if($result['sunday']) echo ', Sunday';
			echo '</p>';
			
			
			echo '<p> Categories : ';
			foreach($categories as $category)
				echo $category['id_category'] . '  ';
			echo '</p>';
				
			echo '<img src="images/'. $result['name'] . '_0" alt="Image" width="500px">'
		?>

	</div>
	<div id="map"></div>
	
	<h2 class="subtitle"> Comments </h2>
		
		<?php
		if($_SESSION['type'] == "reviewer" && $reviewByUserToRestaurant == NULL){
				include('review_form.php');
			}
		?>
	
	<input id="button_comments" class="button_1 button" type="submit" value="Show Comments" >
	
	<div id="comments">
		
		<?php
		
			$reviewByUserToRestaurant = getReviewByUserToRestarurant($db,$_GET['id'], $_SESSION['id_account']);

			
			
			$reviews = getAllReviews($db, $_GET['id']);
			
			foreach($reviews as $review){
				echo '<div class="review">';
					echo '<p>From: ' . $review['id_reviewer'] . '</p>';
					echo '<p>Score: ' . $review['score'] . '</p>';
					echo '<p>Comment: ' . $review['comment'] . '</p>';
					
					$replies = getReply($db,$review['id_review']);
					
					if(sizeof($replies) != 0){
						echo '<input id="button_reply" class="button_1 button" type="submit" value="Show Replies" >';
						echo '<div id="replies">';
						foreach($replies as $reply){
							echo '<div class="review">';
								echo '<p>From: ' . $reply['id_replyer'] . '</p>';
								echo '<p>Reply: ' . $reply['comment'] . '</p>';
							echo '</div>';
						}
						echo '</div>';
					}
					
					if($_SESSION['id_account'] == $result['id_owner'] || $_SESSION['id_account'] == $review['id_reviewer']){ ?>
						<input id="button_do_reply" class="button_1 button" type="submit" value="Reply" >
						<form id="reply" action="action_add_reply.php" class = "big_form" method="post">
							<fieldset>
								<legend> Reply </legend>
								
								<?php 
									echo '<input type="hidden" name="id_restaurant" value="' . $review['id_restaurant'] . '">';
									echo '<input type="hidden" name="id_review" value="' . $review['id_review'] . '">';
								?>
								<textArea type="text" class="max_width small_textArea" name="comment"></textArea>
								<input class="button_1 button" type="submit" value="Send" >
							</fieldset>
						</form>
					<?php
					}						
					
				echo '</div>';
			}
		?>
	</div>
	
</div>
<script>
      function initMap() {

        var geocoder = new google.maps.Geocoder();
        var restaurant = {lat: -25.363, lng: 131.044};
         var address = document.getElementById('address').innerHTML;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            var map = new google.maps.Map(document.getElementById('map'), {
          		zoom: 15,
          		center: results[0].geometry.location
          		});
            var marker = new google.maps.Marker({
              map: map,
              position: results[0].geometry.location
            });
          } else {
            //alert('Geocode was not successful for the following reason: ' + status);
          }
        
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtWK2oxBU_WhzpUnS6uhHsJoylnJz-Kvc&callback=initMap">
    </script>