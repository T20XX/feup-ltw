	<div id="new_restaurant">
		<form action="action_add_restaurant.php" method="post">
			<p><label>Name: 
				<input type="text" name="name" required="required">
			</label></p>
			<p><label>Address: 
				<input type="text" name="address" required="required">
			</label></p>
			<p><label>Description: 
				<textarea type="text" name="description" required="required"></textarea>
			</label></p>

			<fieldset>
    <legend>Opening Hours</legend>
    Hours: <input type="time"> - <input type="time"><br>
    <input type="checkbox" name="opening_days" value="monday">Monday<br>
    <input type="checkbox" name="opening_days" value="tuesday">Tuesday<br>
    <input type="checkbox" name="opening_days" value="wednesday">Wednesday<br>
    <input type="checkbox" name="opening_days" value="thursday">Thursday<br>
    <input type="checkbox" name="opening_days" value="friday">Friday<br>
    <input type="checkbox" name="opening_days" value="saturday">Saturday<br>
    <input type="checkbox" name="opening_days" value="sunday">Sunday<br>
  </fieldset>
			<input type="submit" value="Create restaurant">
		</form>
	</div>