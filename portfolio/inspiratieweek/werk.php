<?php
require_once('Iheader.php');
?>

<html>
        <body>
		    <div class="container-fluid">
				<div class="Col-xs-12">
					<h1>Werk</h1>
				</div>
					<div class="col-xs-6">
						<?php 
						$personal = $_GET ['personal']; 
						$sport = $_GET ['sport']; 
						$family = $_GET ['family']; 
						$school = $_GET ['school']; 
						$werk = $_GET ['werk']; 
						$gebeurtenis = $_GET['gebeurtenis'];
						
						switch($werk){
						// Life2
							case $werk == 1:
							echo '<p>Je ouders willen je wat bij brengen over geld. Daarom vinden zij het noodzakelijk dat jij een bijbaan neemt. Om te beginnen vinden zij het ideaal dat je de folders wijk overneemt van je zus, Ilse. Je neemt deze over en zo verdien je toch al wat geld op jonge leeftijd!</p></div>
								<div class="col-xs-6 text-center">
									<a href="life2.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis=2&werk=2'; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							//Baan keuze I	
							case $werk == 2:
								echo '<p>In je woonplaats Berlicum opent binnenkort een nieuwe winkel; Een Jumbo. Hiervoor zoeken ze nog nieuwe mensen. Je hebt de mogelijkheid om te stoppen met je oude baan en bij de Jumbo te gaan werken. Je zal dezelfde uren maken en iets mee verdienen.</p>
								<form>
									<input type="radio" name="werk" value="3" required><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked>Jumbo<br>
									<input type="radio" name="werk" value="4">Folders wijk<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $werk == 3:
							echo '<p>Je besluit om de ‘saaie’ folder wijk baan te laten vallen en bij de Jumbo te gaan werken. Je maakt hier meer uren, en daarmee is het ook gezegd. Je staat in je eentje vakken bij te vullen en er zijn niet echt doorgroei mogelijkheden. Het enige positieve is dat je meer verdiend.</p></div>
								<div class="col-xs-6 text-center">
									<a href="werk.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk=5'; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							case $werk == 4:
							echo '<p>Je besluit om toch gewoon je folders wijk te houden. Je vindt dit fijner dan in een supermarkt te werken, en dit blijkt achteraf misschien wel de betere keuze te zijn.</p></div>
								<div class="col-xs-6 text-center">
									<a href="werk.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk=5'; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
							
								case $werk == 5:
								echo '<p>Nadat je klaar bent met de middelbare school heb je de mogelijkheid om van bijbaan te veranderen. Je kunt namelijk bij Danny’s Eeterij gaan werken. Je kunt hier veel meer uren maken dan bij je andere baan en er zijn ook doorgroei mogelijkheden. Waar ga je werken?</p>
								<form>
									<input type="radio" name="werk" value="6" required><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked>Bij je huidige baan blijven.<br>
									<input type="radio" name="werk" value="7">Bij Danny’s Eeterij gaan werken <br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $werk == 6:
							echo '<p>Je besluit om er niet op in te gaan. Je gaat verder met je huidige baan. Na een aantal maanden begon je toch te twijfelen. Heb ik de juiste keuze gemaakt?</p></div>
								<div class="col-xs-6 text-center">
									<a href="life2.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk=9'; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							case $werk == 7:
							echo '<p>Een uitstekende keuze! Je zult hier nog lang blijven werken. Na een half jaar in de afwas te hebben gestaan wordt je doorgeschoven naar de keuken en daar blijft het niet bij. Je hebt krijgt verschillende verantwoordelijkheden, zo heb je op zondag de verantwoordelijkheid van een van de twee keukens.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life2.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk=8'; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							// Life3	
							case $werk == 10:
								echo '<p>Nadat je wat werk ervaring hebt opgedaan bij je stagebedrijf krijg je de kans om ergens anders te werken, en niet zomaar ergens anders. Je oom en peetoom hebben allebei een eigen zaak in de bouw. Je peetoom werkt als zzp’er en je oom heeft een groter bedrijf. Ze bieden jouw allebei een baan aan, evenveel salaris en werkuren dan je huidige baan.</p>
								<form>
									<input type="radio" name="werk" value="11" required><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked>Je blijft je huidige baan werken.<br>
									<input type="radio" name="werk" value="12">Je gaat werken bij je peetoom.<br>
									<input type="radio" name="werk" value="13">Je gaat werken bij je oom.<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
						case $werk == 11:
							echo '<p>Ze weten dat je twee banen hebt aangeboden gekregen maar dat je ze allebei hebt afgewezen. Omdat je ze trouw blijft besluiten ze om je een salarisverhoging te geven. Netjes!</p></div>
								<div class="col-xs-6 text-center">
									<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk=14'; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
						case $werk == 12:
							echo '<p>Een uitstekende keuze, je vindt het fijn om in een klein bedrijf te werken en je kan vaak werken met je peetoom, waar je uitstekend mee kunt opschieten!</p></div>
								<div class="col-xs-6 text-center">
									<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk=14'; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
						case $werk == 13:
							echo '<p> Een keuze die okay is. Het is een groot bedrijf, iets wat je niet heel fijn vindt. Aangezien je oom directeur is zie je hem ook niet vaak. Wat wel positief is dat je wel veel werk hebt!</p></div>
								<div class="col-xs-6 text-center">
									<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk=14'; echo '"><button class="btn btn-default">Volgende</button></a>
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