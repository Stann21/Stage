<div class="row rowtitle">
<?php
	include_once('connect.inc.php');
	
	//Get the subject
    $subject = $_GET ['subject'];
	
	//Get the semester
	$semester = $_GET['s'];
	
	//Get the subject name
	$sql = "SELECT sub_name FROM subjects WHERE sub_id=$subject";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$subjecttitle = $row["sub_name"];
			
			echo '<div class="col-10">';
				echo '<h1>';
					echo '<p class="codetext inline-block">&#60;h1&#62;</p>';echo $subjecttitle;echo '<p class="codetext inline-block">&#60;/h1&#62;</p>';
				echo '</h1>';
			echo '</div>';
			echo '<div class="col-2 text-right">';
			echo '<a href="home.php?s=';echo $semester; echo'"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
			echo '</div>';
		}
	} ?>
</div> <!-- End row -->
<div class="row">
	<div class="col-12 text-center">
		<p class="codetext inline-block">&#60;div class="row"&#62;</p>
	</div>
	<div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
	
	<?php
	//Get the projects, with status online and order by the ordernumbers.
	$sql = "SELECT * FROM projects WHERE pro_subject='$subjecttitle' AND pro_status='Online' ORDER BY pro_order";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$pro_id = $row["pro_id"];
			$pro_title = $row["pro_title"];
			$pro_grid = $row["pro_grid"];
			$pro_img = $row["pro_img"];
			
			//Get script for tiles
			echo '<script src="tiles/masonry.pkgd.js"></script>';
			
            echo '<div class="grid-item grid-item--width'; echo $pro_grid; echo'">';
				echo '<a href="project.php?s='; echo $semester; echo '&p='; echo $pro_id; echo '&subject='; echo $subject; echo '">';
					echo '<ul class="img-list">';
						echo '<li id="categoriebox">';
							echo '<img src="images/'; echo $pro_img; echo'" height="100px" width="100px" id="categorieimg"/>';
							echo '<span class="text-content" id="text-content">';echo $pro_title; echo '</span>';
						echo '</li>';
					echo '</ul>';
				echo '</a>';
			echo '</div>';
		}
	}
?>
	</div> <!-- End grid -->
	<div class="col-12 text-center">
		<p class="codetext inline-block">&#60;/div&#62;</p>
	</div>
</div> <!-- End row -->

<?php include_once ('includes/button.inc.php'); ?>