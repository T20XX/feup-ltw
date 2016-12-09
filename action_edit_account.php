<?php
	include ('templates/session_start.php');
    include ('templates/header.php');    
	include_once('database/connection.php');
	include_once('database/account.php');

?>
	<div id="content">
<?php
	/*
		Alterar conta na base de dados
		Se o username, name ou pass forem = "" então não serão alterados
	*/
	editAccount($db,$_SESSION['id_account'],$_POST['name'],$_POST['password'],$_POST['age'],$_POST['gender']);
	echo 'Sucessfull account edit!';
?>
	</div>
<?php
	include ('templates/footer.php');
?>