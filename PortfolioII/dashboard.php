<?php
	include_once ('header.php');
	include_once('includes/sessions.inc.php');
	
	//Get the things from the url
	$user_id = $_GET['userid'];
?>

<div class="container">
	<div class="row rowtitle">
		<div class="col-10">
			<h1>Dashboard</h1>
		</div>
		
		<div class="col-2">
			<a href="includes/logout.inc.php"><p>Logout</p></a>
		</div>
	</div> <!-- End row -->

	<div class="row adminrow">
		<div class ="col-12 col-md-4 adminbox">
			<a href="addproject.php?add=no&userid=<?php echo $user_id; ?>">
				<img src="images/icon/Projectplus.png" height="150px" />
				<p class="adminboxp">Project toevoegen</p>
			</a>
		</div>
		
		<div class ="col-12 col-md-4 adminbox">
			<a href="projectlist.php?q=edit&userid=<?php echo $user_id; ?>">
				<img src="images/icon/Projectedit.png" height="150px" />
				<p class="adminboxp">Project aanpassen</p>
			</a>
		</div>
		
		<div class ="col-12 col-md-4 adminbox">
			<a href="projectlist.php?q=delete&delete=no&userid=<?php echo $user_id; ?>">
				<img src="images/icon/Projectmin.png" height="150px" />
				<p class="adminboxp">Project verwijderen</p>
			</a>
		</div>
	</div> <!-- End row -->
	
	<div class="row adminrow">
		<div class ="col-12 col-md-4 adminbox">
			<a href="imgupload.php?userid=<?php echo $user_id; ?>">
				<img src="images/icon/Imgplus.png" height="150px" />
				<p class="adminboxp">Afbeelding toevoegen</p>
			</a>
		</div>
		
		<div class ="col-12 col-md-4 adminbox">
			<a href="projectlist.php?q=imgdelete&userid=<?php echo $user_id; ?>">
				<img src="images/icon/Imgmin.png" height="150px" />
				<p class="adminboxp">Afbeelding verwijderen</p>
			</a>
		</div>
		
		<div class ="col-12 col-md-4 adminbox">		
			<a href="projectlist.php?q=imgedit&userid=<?php echo $user_id; ?>">
				<img src="images/icon/Imgedit.png" height="150px" />
				<p class="adminboxp">Afbeelding aanpassen</p>
			</a>
		</div>
	</div> <!-- End row -->
	
	<div class="row adminrow">
		<div class="col12 col-md-4 adminbox">
			<a href="projectlist.php?q=subjectadd&add=no&userid=<?php echo $user_id; ?>">
				<img src="images/icon/Subjectplus.png" height="150px" />
				<p class="adminboxp">Vak toevoegen</p>
			</a>
		</div>
		
		<div class="col12 col-md-4 adminbox">
			<a href="projectlist.php?q=subjectedit&userid=<?php echo $user_id; ?>">
				<img src="images/icon/Subjectedit.png" height="150px" />
				<p class="adminboxp">Vak aanpassen</p>
			</a>
		</div>
		
		<div class="col12 col-md-4 adminbox">
			<a href="projectlist.php?q=subjectdelete&delete=no&userid=<?php echo $user_id; ?>">
				<img src="images/icon/Subjectmin.png" height="150px" />
				<p class="adminboxp">Vak verwijderen</p>
			</a>
		</div>
	</div> <!-- End row -->
</div> <!-- End container -->

<?php
	include_once ('footer.php');
?>