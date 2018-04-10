<?php
	include_once('connect.inc.php');
	
	//Get project id
	$p = $_GET['p'];
	
	//Get the things from the url
	$user_id = $_GET['userid'];
	
	$sql = "SELECT pro_id, pro_img FROM projects WHERE pro_id = $p";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$pro_id = $row["pro_id"];
			$pro_img = $row["pro_img"];
			
			echo "<div class='col-6'>";
				echo "<img src='images/"; echo $pro_img; echo "' height='150px' width='150px' />";
			echo "</div>";
		}
	}
		echo '<div class="col-6">';
		echo '<form action="includes/projectmodifications.inc.php?userid='; echo $user_id; echo '" method="POST">';
			echo '<div class="col-6">';
				echo '<label>Cover afbeelding</label>';
				echo '<input type="file" name="coverimage" required>';
				echo '<input type="radio" name="pid" value="'; echo $pro_id; echo '" required checked>';
			echo '</div>';
			echo '<div class="col-6">';
				echo '<input name="imgedit" type="submit" value="Upload" class="btn btn-default pull-right" />';
			echo '</div>';
	echo '<form>';
	echo '</div>';
		
?>