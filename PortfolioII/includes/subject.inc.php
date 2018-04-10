<?php
	include_once('connect.inc.php');
	
	//Delete or edit?
	$q = $_GET['q'];
	
	//Get the things from the url
	$user_id = $_GET['userid'];
	
	//Subject add AND subject edit
	if ($q == "subjectadd" || $q == "subedit") {
		//Check if there is a subject added OR updated
		$add = $_GET['add'];
	
		if ($add == 'yes') {
			if ($q == "subjectadd") {
				echo '<div class="col-12">';
					echo 'Vak is toegevoegd.';
				echo '</div>';			
			}
			if ($q == "subedit") {
				echo '<div class="col-12">';
					echo 'Vak is aangepast.';
				echo '</div>';
			}
		}
		
		//Set variables for subject add
		if ($q == 'subjectadd') {
			$sub_name = 'Titel vak';
			$sub_semester = 'Semester';
		}
		
		//Get variables for subject edit
		if ($q == 'subedit') {
		// Get the subject id
		$s = $_GET['s'];
		
			$sql = "SELECT * FROM subjects WHERE sub_id=$s";
			$result = $conn->query($sql);
			
			if ($result->num_rows>0){
				while($row = $result->fetch_assoc()) {
					$sub_name = $row["sub_name"];
					$sub_semester = $row["sub_semester"];
					$sub_id = $row["sub_id"];
					$sub_ballspeed = $row["sub_ball"];
				}
			}
		}
	
		echo '<div class="col-12 col-md-6">';
			echo '<form action="includes/projectmodifications.inc.php?userid='; echo $user_id; echo '" method="POST">';
				echo '<input name="subjecttitle" type="text" placeholder="'; echo $sub_name; echo '" required />';
				echo '<input name="semester" type="text" placeholder="'; echo $sub_semester; echo '" required />';
				if ($q == 'subjectadd') {
					echo '<div class="col-12">';
						echo '<input name="ballspeed" type="radio" value="one" class="float-left" required  />'; echo '<p>One. Speed: 3s. Delay: 0.8s.</p>';
						echo '<input name="ballspeed" type="radio" value="two" class="float-left" required  />'; echo '<p>Two. Speed: 4s. Delay: 0.3s</p>';
						echo '<input name="ballspeed" type="radio" value="three" class="float-left" required  />'; echo '<p>Three. Speed: 5s. Delay: 0.2s</p>';
						echo '<input name="ballspeed" type="radio" value="four" class="float-left" required  />'; echo '<p>Four. Speed: 6s. Delay: 0.5s</p>';
						echo '<input name="ballspeed" type="radio" value="five" class="float-left" required  />'; echo '<p>Five. Speed: 7s. Delay: 1s</p>';
					echo '</div>';
					echo '<input name="subjectadd" type="submit" value="Vak toevoegen" class="btn btn-default pull-right" />';
				}
				if ($q == 'subedit') {
					echo '<input name="id" type="radio" value="'; echo $sub_id; echo '" required checked />';
					echo '<div class="col-12">';
						echo '<input name="ballspeed" type="radio" value="one" class="float-left"'; if($sub_ballspeed == "one"){ echo'checked'; } echo' required  />'; echo '<p>One. Speed: 3s. Delay: 0.8s.</p>';
						echo '<input name="ballspeed" type="radio" value="two" class="float-left"'; if($sub_ballspeed == "two"){ echo'checked'; } echo' required  />'; echo '<p>Two. Speed: 4s. Delay: 0.3s</p>';
						echo '<input name="ballspeed" type="radio" value="three" class="float-left"'; if($sub_ballspeed == "three"){ echo'checked'; } echo' required  />'; echo '<p>Three. Speed: 5s. Delay: 0.2s</p>';
						echo '<input name="ballspeed" type="radio" value="four" class="float-left"'; if($sub_ballspeed == "four"){ echo'checked'; } echo' required  />'; echo '<p>Four. Speed: 6s. Delay: 0.5s</p>';
						echo '<input name="ballspeed" type="radio" value="five" class="float-left"'; if($sub_ballspeed == "five"){ echo'checked'; } echo' required  />'; echo '<p>Five. Speed: 7s. Delay: 1s</p>';
					echo '</div>';
					echo '<input name="subjectedit" type="submit" value="Vak update" class="btn btn-default pull-right" />';				
				}
			echo '</form>';
		echo '</div>';
		
		echo '<div class="col-12 col-md-6">';
			echo '<table>';
				echo '<tr>';
					echo '<th>'; echo 'Vak naam'; echo '</th>';
					echo '<th>'; echo 'Semester'; echo '</th>';		
					echo '<th>'; echo 'Ball speed'; echo '</th>';						
				echo '<tr>';
				$sql = "SELECT * FROM subjects";
				$result = $conn->query($sql);
					
				if ($result->num_rows>0) {
					while($row = $result->fetch_assoc()) {
						$sub_name = $row["sub_name"];
						$sub_semester = $row["sub_semester"];
						$sub_ballspeed = $row["sub_ball"];
						
						echo '<tr>';
							echo '<td>'; echo $sub_name; echo '</td>';
							echo '<td>'; echo $sub_semester; echo '</td>'; 
							echo '<td>'; echo $sub_ballspeed; echo '</td>'; 
						echo '</tr>';
					}
				}
			echo '</table>';
		echo '</div>';
	}
	 
	 
	 //Subject edit list
	if ($q == "subjectedit") {

		//Set q for a subject edit
		if ($q == "subjectedit") {
			$q = "subedit";
		}
	
		$sql = "SELECT * FROM subjects";
		$result = $conn->query($sql);
		
		if ($result->num_rows>0){
			while($row = $result->fetch_assoc()) {
				$sub_name = $row["sub_name"];
				$sub_semester = $row["sub_semester"];	
				$sub_id = $row["sub_id"];
						
				echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3">';
					echo '<a href="projectlist.php?s='; echo $sub_id; echo '&q='; echo $q; echo'&add=no&userid='; echo $user_id; echo '">';
						echo $sub_name;
						echo $sub_semester;
					echo '</a>';
				echo '</div>';
			}
		}
	}
	
	//Subject delete
	if ($q == "subjectdelete") {
		//Check if there is anything deleted.
		$deletecheck = $_GET['delete'];
		
		if ($deletecheck == 'yes') {
			echo '<div class="col-12">';
				echo 'Vak is verwijderd.';
			echo '</div>';	
		}
		
		$sql = "SELECT * FROM subjects";
		$result = $conn->query($sql);
		
		echo '<div class="col-12">';
			echo '<form action="includes/projectmodifications.inc.php?userid='; echo $user_id; echo '" method="POST">';
				if ($result->num_rows>0) {
					while($row = $result->fetch_assoc()) {
						$sub_name = $row["sub_name"];
						$sub_semester = $row["sub_semester"];	
						$sub_id = $row["sub_id"];
								
						echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 float-left">';
							echo '<p>'; echo $sub_name; echo '</p>';
							echo '<p>'; echo $sub_semester; echo '</p>'; 
							echo '<input type="radio" name="sub_id" value="'; echo $sub_id; echo '" required />';
							echo '<input name="subjectdelete" type="submit" value="Verwijderen" class="btn btn-default pull-right" />';				
						echo '</div>';
					}
				}
			echo '</form>';
		echo '</div>';
	}
?>