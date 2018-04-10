<?php
	include_once('connect.inc.php');
	
	$project = $_GET["p"];
	
		//Get the things from the url
		$user_id = $_GET['userid'];
	
	//Get all the projects
	$sql = "SELECT * FROM projects WHERE pro_id=$project";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$pro_id = $row["pro_id"];
			$pro_title = $row["pro_title"];
			$pro_content = $row["pro_content"];
			$pro_subject = $row["pro_subject"];
			$pro_status = $row["pro_status"];
			$pro_order = $row["pro_order"];
			$pro_grid = $row["pro_grid"];
			$pro_method = $row["pro_method"];
			$pro_werkplaats = $row["pro_werkplaats"];
			$pro_bieb = $row["pro_bieb"];
			$pro_veld = $row["pro_veld"];
			$pro_lab = $row["pro_lab"];
			$pro_showroom = $row["pro_showroom"];
		}
	}
?>