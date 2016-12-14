<?php
	session_set_cookie_params(0 , '/' , '.' , true, true);
	session_start();
	
	/*
	Security
	*/
	
	if (!isset($_SESSION['csrf_token'])) {
	    if(isset($_SESSION['id_account'])) {
            $_SESSION['csrf_token'] = md5(uniqid($_SESSION['id_account'], true));
        }
		}

session_regenerate_id(true);
?>