<?php
require_once('Iheader.php');
?>

<html>
        <body>
		    <div class="container-fluid">
				<div class="Col-xs-12">
					<h1>Stan 11 - 15 jaar</h1>
					<h2>Acties</h2>
				</div>
				
				<?php 
					$personal = $_GET ['personal']; 
					$sport = $_GET ['sport']; 
					$family = $_GET ['family']; 
					$school = $_GET ['school']; 
					$werk = $_GET ['werk']; 
					$gebeurtenis = $_GET['gebeurtenis'];

					if ($sport == 13) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="sport.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Sport.png" height="150px" width="150px"></a>
						</div>';
					}
					
					if ($sport == 22) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="sport.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Sport.png" height="150px" width="150px"></a>
						</div>';
					}
	
					if ($school == 5) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/School.png" height="150px" width="150px"></a>
						</div>';
					}
					
					if ($werk == 2) {
						if ($school == 9 || $school == 5 || $school == 14) {
							echo '
							<div class="col-xs-6 text-center">
								<a href="werk.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Job.png" height="150px" width="150px"></a>
							</div>
							';
						}
					}
					
					echo '<div class="col-xs-12">';
					echo '<h2>Gebeurtenissen</h2>';
					
					if ($werk == 1) {
						If ($school == 9 || $school == 5 || $school == 14) {
							echo '
							<div class="col-xs-6 text-center">
								<a href="werk.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Job.png" height="150px" width="150px"></a>
							</div>
							';
						}
					}
					
					echo '</div>';
					echo '<div class="col-xs-12">';
					if ($personal >= 6  && $sport >= 23 && $school >= 9 && $family >= 2 && $gebeurtenis >= 2 && $werk >= 8) {
						echo '<div class="col-xs-12 text-center">
								<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo'"><button class="btn btn-default">Ga verder</button></a>
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