	<div id="content">
		<h1> Create Restaurant </h1>
		<div>
			<form action="action_add_restaurant.php" class="big_form" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Opening Hours</legend>
					<p><label>Name: 
						<input type="text" class="max_width" name="name" required="required">
					</label></p>
					<p><label>Address: 
						<input type="text" class="max_width" name="address" required="required">
					</label></p>
					<p><label>Average Price: </label></p>
					<input type="number" value="10" min="1" max="200" step="1" name="avg_price">
					<p><label>Description:</label></p>
					<textarea type="text" class="max_width bit_textArea" name="description" required="required"></textarea>
				</fieldset>

				<fieldset>
					<legend>Opening Hours</legend>
					Hours: <input name="open_time" type="time" value='00:00'> - <input name="close_time" type="time" value = '23:59'><br><br>
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
						<li><input class="select_all" type="checkbox" checked="checked" data-group=".group2">All Checked<br><br></li>
					
					<?php
					include_once getcwd() . "/database/connection.php";
					include_once getcwd() . "/database/search.php";
					
					$result = getAllCategories($db);
					
					foreach( $result as $row) {
						echo '<li><input class="group2" name="categories[]" type="checkbox" checked="checked" value="' . $row['id_category'] . '">' . $row['id_category'] .'<br></li>';
					 }
					?>
					</ul>
				</fieldset>
				<fieldset>
					<legend> Images Upload </legend>
					<input type="file" name="upload[]" multiple>
        		</fieldset>
				<input type="submit" class="button_1 button" value="Create restaurant" />
			</form>
		</div>
	</div>