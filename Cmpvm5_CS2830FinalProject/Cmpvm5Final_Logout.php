<?php
	/* Created by Professor Wergeles for CS2830 at the University of Missouri --using his code from lecture*/ 
	
	if(!session_start()) {
		header("Location: Cmpvm5Final_Error.php");
		exit;
	}

	$_SESSION = array();

	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', 1,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}
	
	session_destroy();
	
	header("Location: index.php");
	exit;
?>
