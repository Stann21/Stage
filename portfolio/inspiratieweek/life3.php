<?php
require_once('Iheader.php');
?>

<html>
        <body>
		    <div class="container-fluid">
				<div class="Col-xs-12">
					<h1>Stan 16 - 21 jaar</h1>
					<h2>Acties</h2>
				</div>
				
				<?php 
					$personal = $_GET ['personal']; 
					$sport = $_GET ['sport']; 
					$family = $_GET ['family']; 
					$school = $_GET ['school']; 
					$werk = $_GET ['werk']; 
					$gebeurtenis = $_GET['gebeurtenis'];

					if ($sport == 23) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="sport.php?personal=';echo $personal; echo '&sport=26&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Sport.png" height="150px" width="150px"></a>
						</div>';
					}
					
					if ($school == 14) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=16&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/School.png" height="150px" width="150px"></a>
						</div>';
					}
					
					if ($school == 19) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/School.png" height="150px" width="150px"></a>
						</div>';
					}
					
					if ($school == 21) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/School.png" height="150px" width="150px"></a>
						</div>';
					}
					
					if ($school == 13) {
						echo '
						<div class="col-xs-3 text-center">
							<a href="werk.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk=10"><img src="icon/Job.png" height="150px" width="150px"></a>
						</div>';
					}
					
					
					echo '<div class="col-xs-12">';
					echo '<h2>Gebeurtenissen</h2>';
					
					if ($family == 5 || $family == 6 || $family == 7) {
						echo '
						<div class="col-xs-6 text-center">
							<a href="family.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><img src="icon/Family.png" height="150px" width="150px"></a>
						</div>
						';
					}
					
					echo '</div>';
					echo '<div class="col-xs-12">';
					
					if ($personal >= 7  && $sport >= 27 && $school >= 13 && $family == 8 && $gebeurtenis >= 2 && $werk >= 8) {
						echo '<div class="col-xs-12 text-center">
								<p>Je hebt het spel uitgespeeld!</p>
								<a href="../index.php"><button class="btn btn-default">Terug naar home.</button></a>
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