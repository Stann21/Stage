<?php

//verbinding maken met server(Offline database)
/*
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "portfolio";*/

//Verbinding maken met server(Online database)

$dbServername = "localhost";
$dbUsername = "deb102192_stan";
$dbPassword = "rhGtt0";
$dbName = "deb102192_portfolio"; 

// Maak een connectie
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
?>