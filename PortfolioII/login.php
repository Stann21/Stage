<?php
	include_once ('header.php');
?>

<div class="container">	
	<div class="row rowtitle">
		<div class="col-10">
			<p class="codetext inline-block">&#60;h1&#62;</p><h1 class="inline-block">Stan CMS</h1><p class="codetext inline-block">&#60;h1&#62;</p>
		</div>
	</div> <!-- End row -->
	
	<div class="row">
		<form action="includes/login.inc.php" method="POST">
			<div class="col-12">
				<label>Gebruikersnaam</label>
				<input type="text" name="username" placeholder="Gebruikersnaam" required >
			</div>
			<div class="col-12">
				<label>Wachtwoord</label>
				<input type="password" name="password" placeholder="Wachtwoord" required >
			</div>
			<div class="col-12">
				<input name="login" type="submit" value="Inloggen" class="btn btn-default pull-right" />
				<a href="index.php"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>
			</div>
		</form>
	</div> <!-- End row -->
</div> <!-- End Container -->

<?php
	include_once ('footer.php');
?>