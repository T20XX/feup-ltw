<?php
	session_set_cookie_params(0 , '/' , '.' , true, true);
	session_start();
	
	/*
	Security
	*/
	
	if (!isset($_SESSION['csrf_token'])) {
		  $_SESSION['csrf_token'] = md5(uniqid($_SESSION['id_account'], true));
		}
?>