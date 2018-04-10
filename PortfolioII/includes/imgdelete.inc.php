<?php
	include_once('connect.inc.php');
	
	// get project id
	$p = $_GET['p'];
	
	//Get the things from the url
	$user_id = $_GET['userid'];
	
	echo '<div class="col-12">';
	echo '<form action="includes/projectmodifications.inc.php?userid='; echo $user_id; echo '" method="POST">';
	
	$sql = "SELECT * FROM images WHERE img_projectid = $p";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$img_id = $row["img_id"];
			$img_name = $row["img_name"];
			$img_path = $row["img_path"];
			$img_projectid = $row["img_projectid"];
			
			echo "<div class='col-12 col-sm-6 col-md-4 col-lg-3 float-left'>";
				echo "<img src='"; echo $img_path; echo "' height='150px' width='150px' />";
				echo "<input type='radio' name='imgid' required value='"; echo $img_id; echo "'>";
			echo "</div>";
		}
	}
	echo "<div class='col-12 float-left'>";
		echo "<input type='radio' name='pid' value='"; echo $img_projectid; echo "' checked>";
		echo '<input name="imgdelete" type="submit" value="Verwijderen" class="btn btn-default pull-right" />';
	echo "</div>";
	echo '</form>';
	echo '</div>';
?>