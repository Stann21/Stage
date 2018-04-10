<?php
	include_once('connect.inc.php');
	
	//Get the post items
	$username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
	
	//Get the information from the database that is being requested.
	$sql = "SELECT * from users WHERE user_name = '$username'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
		$user_id = $row["user_id"];
		$user_name = $row["user_name"];
		$user_pwd = $row["user_pwd"];
		
		if ($username == $user_name && $password == $user_pwd) {
			//Start the session
			session_start();
			//Log the user in
            $_SESSION['username'] = $row['user_name'];
			$_SESSION['password'] = $row['user_pwd'];
			$_SESSION['userid'] = $row['user_id'];
			header("Location: ../dashboard.php?userid=$user_id");
		}else {
			//Fail message & send back
		}
		}
	}
?>