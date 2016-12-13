<?php  
	include_once('database/connection.php');
	include_once('database/account.php');
	include('templates/session_start.php');
	$id_account=$_SESSION['id_account'];
	$stmt = $db->prepare('SELECT id_account, name, type, age, gender FROM Account WHERE id_account = ? AND pass = ?');
	$stmt->execute(array($id_account,sha1($_POST['current_password'])));
	$result = $stmt->fetch();
	if ($result != null){
		$stmt = $db->prepare("UPDATE Account SET pass=? WHERE id_account = '$id_account'");
		$stmt->execute(array(sha1($_POST['new_password_1'])));
	}else{
		echo 'The password inserted is wrong';
	}
	
    include ('templates/header.php');  

?>
	<div id="content">
<?php
	/*
		Alterar conta na base de dados
		Se o username, name ou pass forem = "" então não serão alterados
	*/
	echo 'Password changed successfully!';
		
?>
	</div>
<?php
	include ('templates/footer.php');
?>