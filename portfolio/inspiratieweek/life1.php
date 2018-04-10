<?php
require_once('Iheader.php');
?>

<html>
        <body>
		    <div class="container-fluid">
				<div class="Col-xs-12">
					<h1>Stan 0 - 10 jaar</h1>
					<h2>Acties</h2>
				</div>
				
				<?php 
					$personal = $_GET ['personal']; 
					$sport = $_GET ['sport']; 
					$family = $_GET ['family']; 
					$school = $_GET ['school']; 
					$werk = $_GET ['werk']; 
					$gebeurtenis = $_GET['gebeurtenis'];
					
					if ($personal == 1) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="persoonlijk.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Personal.png" height="150px" width="150px"></a>
						</div>';
					}

					if ($sport == 1) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="sport.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Sport.png" height="150px" width="150px"></a>
						</div>';
					}
	
					if ($school == 1) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/School.png" height="150px" width="150px"></a>
						</div>';
					}
					
					if ($family == 1) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="family.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Family.png" height="150px" width="150px"></a>
						</div>';
					}
					
					echo '<div class="col-xs-12">';
					echo '<h2>Gebeurtenissen</h2>';
					
					if ($gebeurtenis == 1) {
						echo '
						<div class="col-xs-6 text-center">
							<a href="gebeurtenissen.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Family.png" height="150px" width="150px"></a>
						</div>
						';
					}
					
					if ($gebeurtenis == 2 && $family >= 2) {
						echo '
						<div class="col-xs-6 text-center">
							<a href="gebeurtenissen.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Family.png" height="150px" width="150px"></a>
						</div>
						';
					}
					
					echo '</div>';
					echo '<div class="col-xs-12">';
					if ($personal >= 3  && $sport >= 3 && $school >= 2 && $family >= 2 && $gebeurtenis >= 3) {
						echo '<div class="col-xs-12 text-center">
								<a href="life2.php?personal=';echo $personal; echo '&sport=13&family='; echo $family; echo '&school=5&gebeurtenis='; echo $gebeurtenis; echo '&werk=1 "><button class="btn btn-default">Ga verder</button></a>
						</div>';
					}
					
				?>
				</div> <!-- Col-xs-12 -->
		    </div> <!-- Container-fluid -->
			
        </body>
</html>

<?php
    require_once ("Ifooter.php");
?>