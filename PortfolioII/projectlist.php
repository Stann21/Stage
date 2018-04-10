<?php
	include_once ('header.php');
	include_once('includes/sessions.inc.php');
	
	//Delete or Edit?
	$q = $_GET['q'];
	
	//Get user_id
	$user_id = $_GET['userid'];
?>

<div class="container">
	<div class="row rowtitle">
	<?php
		echo '<div class="col-10">';
		switch ($q) {
			case 'edit':
				echo '<h1>'; echo 'Project aanpassen'; echo '</h1>';
				echo '</div>';
				echo '<div class="col-2">';
					echo '<a href="dashboard.php?userid='; echo $user_id; echo'"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
				echo '</div>';
				echo '</div>';
				echo '<div class="row">';
				include_once('includes/projectlist.inc.php');
				break;
			case 'delete':
				echo '<h1>'; echo 'Project verwijderen'; echo '</h1>';
				echo '</div>';
				echo '<div class="col-2">';
					echo '<a href="dashboard.php?userid='; echo $user_id; echo'"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
				echo '</div>';		
				echo '</div>';
				echo '<div class="row">';				
				include_once('includes/projectlist.inc.php');
				break;
			case 'imgdelete':
				echo '<h1>'; echo 'Afbeelding verwijderen'; echo '</h1>';
				echo '</div>';
				echo '<div class="col-2">';
					echo '<a href="dashboard.php?userid='; echo $user_id; echo'"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
				echo '</div>';
				echo '</div>';
				echo '<div class="row">';
				include_once('includes/projectlist.inc.php');
				break;
			case 'imgedit':
				echo '<h1>'; echo 'Cover afbeelding aanpassen'; echo '</h1>';
				echo '</div>';
				echo '<div class="col-2">';
					echo '<a href="dashboard.php?userid='; echo $user_id; echo'"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
				echo '</div>';
				echo '</div>';
				echo '<div class="row">';
				include_once('includes/projectlist.inc.php');
				break;
			case 'subjectadd':
				echo '<h1>'; echo 'Vak toevoegen'; echo '</h1>';
				echo '</div>';
				echo '<div class="col-2">';
					echo '<a href="dashboard.php?userid='; echo $user_id; echo'"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
				echo '</div>';
				echo '</div>';
				echo '<div class="row">';
				include_once('includes/subject.inc.php');
				break;
			case 'subedit':
				echo '<h1>'; echo 'Vak aanpassen'; echo '</h1>';
				echo '</div>';
				echo '<div class="col-2">';
					echo '<a href="dashboard.php?userid='; echo $user_id; echo'"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
				echo '</div>';
				echo '</div>';
				echo '<div class="row">';
				include_once('includes/subject.inc.php');
				break;
			case 'subjectedit':
				echo '<h1>'; echo 'Vak aanpassen'; echo '</h1>';
				echo '</div>';
				echo '<div class="col-2">';
					echo '<a href="dashboard.php?userid='; echo $user_id; echo'"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
				echo '</div>';
				echo '</div>';
				echo '<div class="row">';
				include_once('includes/subject.inc.php');
				break;
			case 'subjectdelete':
				echo '<h1>'; echo 'Vak verwijderen'; echo '</h1>';
				echo '</div>';
				echo '<div class="col-2">';
					echo '<a href="dashboard.php?userid='; echo $user_id; echo'"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>';
				echo '</div>';
				echo '</div>';
				echo '<div class="row">';
				include_once('includes/subject.inc.php');
				break;
		}
	?>
	</div> <!-- End row -->
	
	<div class="row">
		<div class="col-12">
			<a href="dashboard.php?userid=<?php echo $user_id; ?>"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>
		</div>
	</div> <!-- End row -->
</div> <!-- End container -->

<?php
	include_once ('footer.php');
?>