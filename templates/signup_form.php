
	<div id="content">
		<div>
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
				<input type="radio" name="type" value="reviewer" checked="checked">Reviewer
				<input type="radio" name="type" value="owner">Owner
				<input type="submit" value="Register">
			</form>
		</div>
	</div>