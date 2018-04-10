<?php
//verbinding maken met server
$servername = "localhost";
$username = "deb102192_stan";
$password = "rhGtt0";
$dbname = "deb102192_database";

// Maak een connectie
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connectie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>