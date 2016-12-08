	<div id="content">
			<form action="action_signup.php" method="post">
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
					<input type="number" name="age" value=25 min=18 max=90 step=1>
				</label></p>
				<div>
					<input type="radio" name="gender" value=1 checked="checked">Male
					<input type="radio" name="gender" value=2>Female
				</div>
				<div>
					<input type="radio" name="type" value="reviewer" checked="checked">Reviewer
					<input type="radio" name="type" value="owner">Owner
				</div>
				<input class= "button_1" type="submit" value="Register">
			</form>
	</div>