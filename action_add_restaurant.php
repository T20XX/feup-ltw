<?php
    include ('templates/header.php');    
	include_once('database/connection.php');
	$stmt = $db->prepare('SELECT id_account FROM Account WHERE id_account = ?');
	$stmt->execute(array($_POST['username']));
	$result = $stmt->fetch();
?>
	<div id="content">
<?php
/*
	$stmt = $db->prepare('INSERT INTO Restaurant (id_account, name, pass, gender,age,type) VALUES (?,?,?,?,?,?)');
	$stmt->execute(array($_POST['username'],$_POST['name'],sha1($_POST['password']),$_POST['gender'],$_POST['age'],$_POST['type']));
	
	1º Cria function time
	2º Cria Restaurant associa a owner, functtion time
	3º Cria Restaurant food para associar a Category
	*/
	
?>
	</div>
<?php
	include ('templates/footer.php');
?>