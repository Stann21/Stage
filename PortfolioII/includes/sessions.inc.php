<?php
	session_start();
	if(empty($_GET['userid'])) {
		$userid = '0';
	}else {
		$userid = $_GET['userid'];
	}
	
	$sessioncheck = $_SESSION['userid'];

	if ($sessioncheck != $userid) {
		session_start();
		session_unset();
		session_destroy();
		header("Location: login.php");
		exit();
	}
?>