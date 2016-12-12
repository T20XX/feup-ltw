<div id="content">
		<h1 class="title"> Advanced Search </h1>
		<div>
			<form class="big_form" action="action_search_restaurant.php" method="post">
				<fieldset>
					<legend> General Information </legend>
					<p><label>Restaurant Name: 
						<input type="text" class="max_width" name="restaurant_name" value="">
					</label></p>
					<p><label>Average Price: </label></p>
					<input type="number" value="10" min="1" max="200" step="1" name="avg_price">
					<p><label>Address: 
						<input type="text" class="max_width" name="address_name" value="">
					<p><label></p>
					<p><label>Stars (Minimum) : 0
						<input type="range" value="0" min="0" max="5" step="1" name="stars"> 5
					</label></p>
				</fieldset>

				<fieldset>
				
					<legend> Function Time </legend>
					Hours: <input type="time" value='00:00'> - <input type="time" value = '23:59'><br><br>
					
					<ul class="simple_list">					
						<li><input class="select_all" type="checkbox" checked="checked" data-group=".group1">All Checked<br><br></li>
						<li><input class="group1" name="days[]" type="checkbox" checked="checked" value="monday">Monday</li>
						<li><input class="group1" name="days[]" type="checkbox" checked="checked" value="tuesday">Tuesday</li>
						<li><input class="group1" name="days[]" type="checkbox" checked="checked" value="wednesday">Wednesday</li>
						<li><input class="group1" name="days[]" type="checkbox" checked="checked" value="thursday">Thursday</li>
						<li><input class="group1" name="days[]" type="checkbox" checked="checked" value="friday">Friday</li>
						<li><input class="group1" name="days[]" type="checkbox" checked="checked" value="saturday">Saturday</li>
						<li><input class="group1" name="days[]" type="checkbox" checked="checked" value="sunday">Sunday</li>
					</ul>
				</fieldset>
				
				<fieldset>
					<legend> Categories </legend>
					
					<ul class="simple_list">
						<li><input class="select_all" type="checkbox" checked="checked" data-group=".group2" value="all_checked">All Checked<br><br></li>
					
					<?php
					include_once getcwd() . "/database/connection.php";
					include_once getcwd() . "/database/search.php";
					
					$result = getAllCategories($db);
					
					foreach( $result as $row) {
						echo '<li><input class="group2" name="check[]" type="checkbox" name="categories" checked="checked" value="' . $row['id_category'] . '">' . $row['id_category'] .'<br></li>';
					 }
					?>
					</ul>
				</fieldset>
				
				<input class="button_1 button" type="submit" value="Search Restaurant"/>
				
			</form>
		</div>
</div>