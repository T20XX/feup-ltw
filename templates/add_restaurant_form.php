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
					<p><label>Description:</label></p>
					<textarea type="text" class="max_width" name="description" required="required"></textarea>
				</fieldset>

				<fieldset>
					<legend>Opening Hours</legend>
					Hours: <input name="open_time" type="time" value='00:00'> - <input name="close_time" type="time" value = '23:59'><br><br>
					<ul class="simple_list">					
						<li><input class="select_all" type="checkbox" checked="checked" data-group=".group1" value="all_checked">All Checked<br><br></li>
						<li><input class="group1" name="monday" type="checkbox" checked="checked" value="true">Monday</li>
						<li><input class="group1" name="tuesday" type="checkbox" checked="checked" value="true">Tuesday</li>
						<li><input class="group1" name="wednesday" type="checkbox" checked="checked" value="true">Wednesday</li>
						<li><input class="group1" name="thursday" type="checkbox" checked="checked" value="true">Thursday</li>
						<li><input class="group1" name="friday" type="checkbox" checked="checked" value="true">Friday</li>
						<li><input class="group1" name="saturday" type="checkbox" checked="checked" value="true">Saturday</li>
						<li><input class="group1" name="sunday" type="checkbox" checked="checked" value="true">Sunday</li>
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
					<button class="button_1"> Add Category </button>
				</fieldset>
				<fieldset>
					<legend> Images Upload </legend>
					<input type="file" name="upload[]" multiple>
        		</fieldset>
				<button type="submit" class="button_1"> Create restaurant </button>
			</form>
		</div>
	</div>