<?php
	//session_set_cookie_params(0 , '/' , '.' , false, false);
	session_start();
	if (!isset($_SESSION['csrf_token'])) {
		  $_SESSION['csrf_token'] = md5(uniqid($_SESSION['id_account'], true));
		}
?>