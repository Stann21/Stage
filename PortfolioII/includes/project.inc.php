<div class="row rowtitle">
<?php
	include_once('connect.inc.php');
	
	//Get the right project
    $project = $_GET ['p'];
	
	//Get the subject
	$subject = $_GET['subject'];
	
	//Get semester
	$semester = $_GET['s'];
	
	//Get subject name
	$sql = "SELECT * FROM subjects WHERE sub_id = $subject";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$sub_name = $row["sub_name"];
		}
	}
	
	//Get the max order number
		$sql = "SELECT * FROM projects WHERE pro_subject = '$sub_name' ORDER BY pro_order DESC LIMIT 1";
		$result = $conn->query($sql);
			
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$maxorder = $row["pro_order"];
			}
		}

	//Get the projects
	$sql = "SELECT * FROM projects WHERE pro_id=$project";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$pro_title = $row["pro_title"];
			$pro_content = $row["pro_content"];
			$pro_order = $row["pro_order"];
			$pro_img = $row["pro_img"];
			$pro_method = $row["pro_method"];
			$pro_werkplaats = $row["pro_werkplaats"];
			$pro_bieb = $row["pro_bieb"];
			$pro_veld = $row["pro_veld"];
			$pro_lab = $row["pro_lab"];
			$pro_showroom = $row["pro_showroom"];
			
			echo '<div class="col-10">';
				echo '<h1>';
					echo '<p class="codetext inline-block">&#60;h1&#62;</p>';echo $pro_title;echo '<p class="codetext inline-block">&#60;/h1&#62;</p>';
				echo '</h1>';
			echo '</div>';
			
			echo '<div class="col-2 text-right">';
				echo '<a href="categorie.php?s='; echo $semester; echo '&subject='; echo $subject; echo '"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
			echo '</div>';
		echo '</div>'; // End row

		//Add the research framework
		echo '<div class="row">';
			echo '<div class="col-12 text-center">';
				echo '<p class="codetext inline-block">&#60;div class="row"&#62;</p>';
			echo '</div>';
			echo '<div class="col-12">';
					if (!empty($pro_werkplaats)) {
						echo '<div class="col-12 cmddiv">';
							echo '<img src="images/cmd/werkplaats.png" class="cmdimg">';	
							echo '<span class="cmdblock">';echo $pro_werkplaats; echo '</span>';
						echo '</div>';
					}
					
					if (!empty($pro_bieb)) {
						echo '<div class="col-12 cmddiv">';
							echo '<img src="images/cmd/bieb.png" class="cmdimg">';	
							echo '<span class="cmdblock">';echo $pro_bieb; echo '</span>';
						echo '</div>';
					}
					
					if (!empty($pro_veld)) {
						echo '<div class="col-12 cmddiv">';
							echo '<img src="images/cmd/veld.png" class="cmdimg">';
							echo '<span class="cmdblock">';echo $pro_veld; echo '</span>';
						echo '</div>';
					}
				
					if (!empty($pro_lab)) {
						echo '<div class="col-12 cmddiv">';
							echo '<img src="images/cmd/lab.png" class="cmdimg">';	
							echo '<span class="cmdblock">';echo $pro_lab; echo '</span>';
						echo '</div>';
					}
					
					if (!empty($pro_showroom)) {
						echo '<div class="col-12 cmddiv">';
							echo '<img src="images/cmd/showroom.png" class="cmdimg">';	
							echo '<span class="cmdblock">';echo $pro_showroom; echo '</span>';
						echo '</div>';
					}
			echo '</div>';
			echo '<div class="col-12 text-center">';
				echo '<p class="codetext inline-block">&#60;/div"&#62;</p>';
			echo '</div>';
		echo '</div>'; //End row
		
		echo '<div class="row rowcontent">';
		echo '</div>';
		
		//Add the content
		echo '<div class="row">';
			echo '<div class="col-12 text-center">';
				echo '<p class="codetext inline-block">&#60;div class="row"&#62;</p>';
			echo '</div>';
			echo '<div class="col-12">';
				echo $pro_content;
			echo '</div>';
			echo '<div class="col-12">';
				//Button next
				if ($pro_order < $maxorder) {
					//Set order for the next one
					$pro_order ++;
					
					//Get the next project from the order
					$sql = "SELECT * FROM projects WHERE pro_subject = '$sub_name' AND pro_order = $pro_order";
					$result = $conn->query($sql);
					
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
							$proid = $row["pro_id"];
						}
					}
					echo '<a href="project.php?s='; echo $semester; echo '&p='; echo $proid; echo '&subject='; echo $subject; echo '">';
					echo '<input name="next" type="button" value="Volgend projects" class="btn btn-default pull-right" />';
					echo '</a>';
				}
			echo '</div>';
			echo '<div class="col-12 text-center">';
				echo '<p class="codetext inline-block">&#60;/div"&#62;</p>';
			echo '</div>';

		echo '</div>'; //End row
		}
	}

	echo '<div class="row rowcontent">';
	echo '</div>';
	
	echo '<div class="row">';
		echo '<div class="col-12 text-center">';
			echo '<p class="codetext inline-block">&#60;div class="row"&#62;</p>';
		echo '</div>';
		echo '<div class="col-12">';
		//Get the images from the project
		$sql = "SELECT * FROM images WHERE img_projectid = $project";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$img_path = $row["img_path"];
				$img_name = $row["img_name"];
				$img_title = $row["img_title"];
				echo '<div class="float-left image">';
					echo '<div>';
						echo '<a href="images/'; echo $img_name; echo '" target="_blank">';
						echo '<img src="images/'; echo $img_name; echo '" class="projectimg" />';
					echo '</div>';
					echo '<div>';
						echo '<span>'; echo $img_title; echo '</span>';
					echo '</div>';
						echo '</a>';
				echo '</div>';
			}
		}
	echo '</div>'; // End col
	echo '<div class="col-12 text-center">';
		echo '<p class="codetext inline-block">&#60;/div"&#62;</p>';
	echo '</div>';
?>
</div> <!-- End row -->

<?php include_once ('includes/button.inc.php'); ?>