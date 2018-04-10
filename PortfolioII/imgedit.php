<?php
	include_once ('header.php');
	include_once('includes/sessions.inc.php');
	
	//Is the image updated?
	$update = $_GET['update']; 
	
	//Get the things from the url
	$user_id = $_GET['userid'];
	
	if ($update == 'yes') {
		echo '<div class="col-12">';
			echo 'Afbeelding is geupdated.';
		echo '</div>';
	}
?>

<div class="container">
	<div class="row">
	<?php
		include_once ('includes/imgedit.inc.php');
	?>
	</div> <!-- End row -->
	<div class="row">
		<div class="col-12">
			<a href="projectlist.php?q=imgedit&userid=<?php echo $user_id; ?>"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>
		</div>
	</div> <!-- End row -->
</div> <!-- End container -->

<?php
	include_once ('footer.php');
?>

