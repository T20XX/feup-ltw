<?php
    include ('templates/header.php');    
	include_once('database/connection.php');
	$stmt = $db->prepare('SELECT id_account FROM Account WHERE id_account = ?');
	$stmt->execute(array($_POST['username']));
	$result = $stmt->fetchAll();
?>
	<div id="content">
<?php
	if ($result == null){
		$stmt = $db->prepare('INSERT INTO Account (id_account, name, pass, gender,age,type) VALUES (?,?,?,?,?,?)');
		$stmt->execute(array($_POST['username'],$_POST['name'],sha1($_POST['password']),$_POST['gender'],$_POST['age'],$_POST['type']));
		echo '<p>The user was created sucessfully!</p>';
	}else{
		echo '<p>Could not sign up because the user already exists!</p>';
	}
?>
	</div>
<?php
	include ('templates/footer.php');
?>
	