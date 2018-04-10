<?php session_start(); /* Start de sessie */
session_destroy(); /* Vernietig de gestarte sessie */
header("location:login.php");  /* Stuur door naar login pagina */
exit;
?>