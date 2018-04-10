<?php
	include_once ('../header.php');
	include_once('../includes/dbh.inc.php');
	session_start();
	
	$user = $_GET["user"];
?>

<html>
	<body>
		<?php
			$sql = "SELECT * FROM users";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
				$user_id = $row["user_id"];
				$user_first = $row["user_first"];
				$user_last = $row["user_last"];
				$user_email = $row["user_email"];
				$user_company = $row["user_company"];
				$user_uid = $row["user_uid"];
				$groups = $row["groups"];
				
				echo $user_id;
				echo $user_first;
				echo $user_last;
				echo $user_email;
				echo $user_company;
				echo $user_uid;
				echo $groups;
				}
			}
		?>
	</body>
</html>

<?php
	include_once ('../footer.php');
?>