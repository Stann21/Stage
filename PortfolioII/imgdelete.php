<?php
	include_once ('header.php');
	include_once('includes/sessions.inc.php');
	
	//Is the image deleted?
	$delete = $_GET['delete']; 
	
	//Get the things from the url
	$user_id = $_GET['userid'];
	
	if ($delete == 'yes') {
		echo '<div class="col-12">';
			echo 'Afbeelding is verwijderd.';
		echo '</div>';
	}
?>

<div class="container">
	<div class="col-12">
		<h1>Afbeeldingen verwijderen</h1>
	</div>
	<div class="row">
	<?php
		include_once ('includes/imgdelete.inc.php');
	?>
	</div> <!-- End row -->
	<div class="row">
		<a href="projectlist.php?q=imgdelete&userid=<?php echo $user_id ?>"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>
	</div> <!-- End row -->
</div> <!-- End container -->

<?php
	include_once ('footer.php');
?>

