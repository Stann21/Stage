<!-- Login/loguit php script -->
<?php
session_start();

if(!isset($_SESSION['UserData']['naam'])){
    header("location:login.php");
    exit;
}
?>