<?
	include ('templates/session_start.php');
	include ('templates/header.php');?>
	<div id="signup">
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
<?	include ('templates/side_bar.php');
	include ('templates/footer.php');
?>