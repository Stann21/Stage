<?php
	include_once('connect.inc.php');
	
	//Get the things from the url
	$user_id = $_GET['userid'];
	
	//Delete or edit?
	$q = $_GET['q'];
	
	if ($q == 'delete') {
		$message = $_GET['delete'];
				
		if ($message == 'yes') {
			echo '<div class="col-12">';
				echo 'Project is verwijderd';
			echo '</div>';
		}
	}
	
	if ($q == 'delete') {
		echo '<div class="col-12">';
		echo '<form action="includes/projectmodifications.inc.php?userid='; echo $user_id; echo '" method="POST">';
	}

	//Get all the projects
	$sql = "SELECT * FROM projects";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$pro_id = $row["pro_id"];
			$pro_title = $row["pro_title"];
			$pro_subject = $row["pro_subject"];
			$pro_status = $row["pro_status"];
			$pro_werkplaats = $row["pro_werkplaats"];
			$pro_bieb = $row["pro_bieb"];
			$pro_veld = $row["pro_veld"];
			$pro_lab = $row["pro_lab"];
			$pro_showroom = $row["pro_showroom"];
			
			if ($q == 'delete') {
				echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 float-left projectlistbox">';
					//Show the projects in the list
					if ($pro_status == 'Online') {
						echo '<div class="statusball" id="online"></div>';
					}
					if ($pro_status == '<p>Offline</p>') {
						echo '<div class="statusball" id="offline"></div>';
					}
					echo '<p>'; echo $pro_title; echo '</p>';
					echo '<p>'; echo $pro_subject; echo '</p>';
					echo '<p>';
					if (!empty($pro_werkplaats)) {
							echo '<img src="images/cmd/werkplaats.png" class="projectlistimg">';
						}
						if (!empty($pro_bieb)) {
							echo '<img src="images/cmd/bieb.png" class="projectlistimg">';
						}
						if (!empty($pro_veld)) {
							echo '<img src="images/cmd/veld.png" class="projectlistimg">';
						}
						if (!empty($pro_lab)) {
							echo '<img src="images/cmd/lab.png" class="projectlistimg">';
						}
						if (!empty($pro_showroom)) {
							echo '<img src="images/cmd/showroom.png" class="projectlistimg">';
						}
					echo '</p>';
					echo '<input type="radio" name="deleteid" value="'; echo $pro_id; echo '" required />';
					echo '<input name="delete" type="submit" value="Verwijderen" class="btn btn-default pull-right" />';
				echo '</div>';
			}
			
			if ($q == 'edit' || $q == 'imgdelete' || $q == 'imgedit') {
				echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 projectlistbox">';
					switch ($q) {
						case 'edit':
							echo '<a href="editproject.php?add=no&p='; echo $pro_id; echo '&userid='; echo $user_id; echo '">';
							break;
						case 'imgdelete':
							echo '<a href="imgdelete.php?delete=no&p='; echo $pro_id; echo '&userid='; echo $user_id; echo '">';
							break;
						case 'imgedit':
							echo '<a href="imgedit.php?update=no&p='; echo $pro_id; echo '&userid='; echo $user_id; echo '">';
							break;
					}
					//Show the projects in the list
						if ($pro_status == 'Online') {
							echo '<div class="statusball" id="online"></div>';
						}
						if ($pro_status == '<p>Offline</p>') {
							echo '<div class="statusball" id="offline"></div>';
						}
						echo '<p>'; echo $pro_title; echo '</p>';
						echo '<p>'; echo $pro_subject; echo '</p>';
						if (!empty($pro_werkplaats)) {
							echo '<img src="images/cmd/werkplaats.png" class="projectlistimg">';
						}
						if (!empty($pro_bieb)) {
							echo '<img src="images/cmd/bieb.png" class="projectlistimg">';
						}
						if (!empty($pro_veld)) {
							echo '<img src="images/cmd/veld.png" class="projectlistimg">';
						}
						if (!empty($pro_lab)) {
							echo '<img src="images/cmd/lab.png" class="projectlistimg">';
						}
						if (!empty($pro_showroom)) {
							echo '<img src="images/cmd/showroom.png" class="projectlistimg">';
						}
					echo '</a>';
				echo '</div>';
			}
		}
	}
	
	if ($q == 'delete') {
		echo '</form>';	
		echo '</div>';
	}
?>