<?php
	include_once('connect.inc.php');
	
	//Pak semester uit URL
    $semester = $_GET ['s'];
	
	//Title
	echo '<div class="row rowtitle">';
		echo '<div class="col-10">';
			echo '<h1>';
				echo '<p class="codetext inline-block">&#60;h1&#62;</p>';echo 'Semester '; echo $semester;echo '<p class="codetext inline-block">&#60;/h1&#62;</p>';
			echo '</h1>';
		echo '</div>';
		echo '<div class="col-2">';
			echo '<a href="index.php"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
		echo '</div>';
	echo '</div>';
	
	echo '<div class="row justify-content-md-center">';
	echo '<div class="col-12 text-center">';
		echo '<p class="codetext inline-block">&#60;div class="row"&#62;</p>';
	echo '</div>';
	
	echo '<div class="container-fluid field">';
	//Get the subjects
	$sql = "SELECT * FROM subjects WHERE sub_semester=$semester";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$sub_id = $row["sub_id"];
			$subject = $row["sub_name"];
			$ballspeed = $row["sub_ball"];
		
		echo '<div class="col-3 float-left text-center">';
		echo '<p class="codetext inline-block">&#60;div class="col-xs-3"&#62;</p>';
			echo '<a href="categorie.php?subject='; echo $sub_id; echo '&s='; echo $semester; echo '">';
				echo '<div class="ball" id="'; echo $ballspeed; echo '"><p class="cirkeltekst">'; echo $subject; echo '</p></div>';
			echo '</a>';
		echo '</div>';
		}
	}
	echo '</div>';
	
	echo '<div class="container">';
		echo '<div class="col-4 text-center float-left">';
			echo '<p class="codetext inline-block">&#60;/div&#62;</p>';
		echo '</div>';
		
		echo '<div class="col-4 text-center float-left">';
			echo '<p class="codetext inline-block">&#60;/div&#62;</p>';
		echo '</div>';
		
		echo '<div class="col-4 text-center float-left">';
			echo '<p class="codetext inline-block">&#60;/div&#62;</p>';
		echo '</div>';
		
		echo '<div class="col-12 text-center">';
			echo '<p class="codetext inline-block">&#60;/div&#62;</p>';
		echo '</div>';
	echo '</div>';
	
	include_once ('includes/button.inc.php');
?>