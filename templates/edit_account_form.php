	<div id="content">
			<form action="action_edit_account.php" method="post">
				<p><label>Username: 
					<input type="text" name="username" required="required">
				</label></p>
				<p><label>Name: 
					<input type="text" name="name" required="required">
				</label></p>
				<p><label>Password: 
					<input type="password" name="password" required="required">
				</label></p>
				<p><label>Age: 
					<input type="number" name="age" value="25" min="18" max="90" step="1">
				</label></p>
				<div>
					<input type="radio" name="gender" value="1" 
					<?php
						if($_SESSION['gender'] == 1)
							echo 'checked="checked"';
					?>>Male
					<input type="radio" name="gender" value="2"
					<?php
						if($_SESSION['gender'] == 0)
							echo 'checked="checked"';
					?>>Female
				</div>
				<div>
					<input type="radio" name="type" value="reviewer"
					<?php
						if($_SESSION['type'] == "reviewer")
							echo 'checked="checked"';
					?>>Reviewer
					<input type="radio" name="type" value="owner"
					<?php
						if($_SESSION['type'] == "owner")
							echo 'checked="checked"';
					?>>Owner
				</div>
				<input class="button_1" type="submit" value="Register">
			</form>
	</div>