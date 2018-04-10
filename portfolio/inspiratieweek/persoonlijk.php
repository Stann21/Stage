<?php
require_once('Iheader.php');
?>

<html>
        <body>
		    <div class="container-fluid">
				<div class="Col-xs-12">
					<h1>Persoonlijk</h1>
				</div>
					<div class="col-xs-6">
						<?php 
						$personal = $_GET ['personal']; 
						$sport = $_GET ['sport']; 
						$family = $_GET ['family']; 
						$school = $_GET ['school']; 
						$werk = $_GET ['werk']; 
						$gebeurtenis = $_GET['gebeurtenis'];
						
						switch($personal){
							 case $personal == 1:
								echo '<p>Je bent net uit van school en opzoek naar je moeder om naar huis te gaan. Je kan er zo snel niet vinden, wat ga je doen?</p>
								<form>
									<input type="radio" name="personal" value="2" required ><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Roepen naar je moeder. <br>
									<input type="radio" name="personal" value="3"> Op een muurtje gaan staan.  <br>
									<input type="radio" name="personal" value="4"> Je doet niks en wacht af.  <br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $personal == 2:
								echo '<p>Een aantal klasgenoten kijken je raar aan. Gelukkig vindt je wel je moeder snel.</p></div>
								<div class="col-xs-6 text-center">
									<a href="persoonlijk.php?personal=5&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $personal == 3:
								echo '<p>Je rent naar de het muurtje toe om erop te staan. Je stapt erop en zoekt naar je moeder, net wanneer je haar vindt, verlies je je evenwicht, en val je op een stuk glas. Vanaf nu draag je een litteken op je linkerhand. </p></div>
								<div class="col-xs-6 text-center">
									<a href="persoonlijk.php?personal=5&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $personal == 4:
								echo '<p>Na enkele minuten geduldig wachten zie je dan eindelijk je moeder. Je loopt naar haar toe en gaat naar huis.</p></div>
								<div class="col-xs-6 text-center">
									<a href="persoonlijk.php?personal=5&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
						}
						
						switch($personal){
							 case $personal == 5:
								echo '<p>Als een klein kind vindt je het geweldig om rond te rennen. Je vader roept dat je niet zo hard door het huis moet heen rennen</p>
								<form>
									<input type="radio" name="personal" value="6" required><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" class="hide" name="gebeurtenis" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Negeer hem, en ren lekker door. <br>
									<input type="radio" name="personal" value="7">Luister naar je vader. Je stopt met rennen en gaat tv kijken. <br>
									<input type="radio" name="personal" value="8">Je rent naar buiten en gaat rondjes rennen in de tuin. <br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $personal == 6:
								echo '<p>BOEM! Je huilt en voelt aan je hoofd. Je bent met je hoofd tegen de tafel aan gelopen. Je hebt nu een litteken op je hoofd.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $personal == 7:
								echo '<p>Je wordt erg geïnteresseerd in de tv. Dit kan in de toekomst slecht zijn voor je sociale leven. </p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $personal == 8:
								echo '<p>Buiten zijn is geweldig vindt je geweldig, je rent een paar rondjes om je energie kwijt te raken en gaat daarna rustig weer naar binnen.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
						}
					?>
		    </div> <!-- Container-fluid -->
        </body>
</html>

<?php
    require_once ("Ifooter.php");
?>