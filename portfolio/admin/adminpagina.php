<?php
    require_once ('adminheader.php');
    require_once ('logincheck.php');
?>

<html>
	<body>
		<div class="container admincontainer">
			<a href="projectlijst.php?sort=ID">
				<div class="col-xs-12 col-sm-3 col-sm-offset-1 vak">
					<img src="../images/icon/Project.png" height="127.0px" width="109.4px"  />
					<p class="titeltekst">Projecten lijst</p>
				</div>
			</a>
		
			<a href="post-edit.php">
				<div class="col-xs-12 col-sm-3 col-sm-offset-1 vak">
					<img src="../images/icon/Projectplus.png" height="127.0px" width="109.4px"  />
					<p class="titeltekst">Projecten toevoegen</p>
				</div>
			</a>
			
			<a href="delete.php?delete=0&sort=ID">
				<div class="col-xs-12 col-sm-3 col-sm-offset-1 vak">
					<img src="../images/icon/Projectmin.png" height="127.0px" width="109.4px"  />
					<p class="titeltekst">Projecten verwijderen</p>
				</div>
			</a>
		</div> <!--Container -->
		
		<div class="container admincontainer">
			<a href="projectaanpassen.php?sort=ID">
				<div class="col-xs-12 col-sm-3 col-sm-offset-1 vak">
					<img src="../images/icon/Projectedit.png" height="127.0px" width="109.4px"  />
					<p class="titeltekst">Projecten aanpassen</p>
				</div>
			</a>
		
			<a href="upload.php">
				<div class="col-xs-12 col-sm-3 col-sm-offset-1 vak">
					<img src="../images/icon/Imgplus.png" height="127.0px" width="109.4px"  />
					<p class="titeltekst">Afbeeldingen toevoegen</p>
				</div>
			</a>
			
			<a href="imgdelete.php?delete=0&sort=ID">
				<div class="col-xs-12 col-sm-3 col-sm-offset-1 vak">
					<img src="../images/icon/Imgmin.png" height="127.0px" width="109.4px"  />
					<p class="titeltekst">Afbeeldingen verwijderen</p>
				</div>
			</a>
		</div> <!--Container -->
	</body>
</html>