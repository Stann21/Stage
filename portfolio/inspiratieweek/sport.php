<?php
require_once('Iheader.php');
?>

<html>
        <body>
		    <div class="container-fluid">
				<div class="Col-xs-12">
					<h1>Sport</h1>
				</div>
					<div class="col-xs-6">
						<?php 
						$personal = $_GET ['personal']; 
						$sport = $_GET ['sport']; 
						$family = $_GET ['family']; 
						$school = $_GET ['school']; 
						$werk = $_GET ['werk']; 
						$gebeurtenis = $_GET['gebeurtenis'];
						
						switch($sport){
							 case $sport == 1:
								echo '<p>Een aantal vrienden zijn net gaan voetballen bij de lokale voetbalclub in je dorp. Ze hebben het ontzettend naar hun zin daar en vragen of jij ook zin hebt om samen met hun te gaan voetballen.</p>
								<form>
									<input type="radio" name="sport" value="2" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Na er even over nagedacht te hebben ga je niet onder voetbal.<br>
									<input type="radio" name="sport" value="3">Je reageert enthousiast en gaat direct naar je ouders.<br>
									<input type="radio" name="sport" value="4">Je negeert ze en loopt weg.<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $sport == 2:
								echo '<p>Na er even over nagedacht te hebben ga je niet onder voetbal. Je ouders vinden het niet erg maar willen wel dat je onder een andere sport gaat. Je krijgt nog wel een paar dagen bedenk tijd.</p></div>
								<div class="col-xs-6 text-center">
									<a href="sport.php?personal='; echo $personal; echo '&sport=9&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $sport == 3:
								echo '<p>Ook je ouders vinden dit een geweldig idee! De volgende dag nog krijg je te horen dat je bent ingeschreven bij de lokale voetbalclub.</p></div>
								<div class="col-xs-6 text-center">
									<a href="sport.php?personal='; echo $personal; echo '&sport=5&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $sport == 4:
								echo '<p>Je vrienden kijken je raar aan. Ze gaan vervolgens hun eigen weg. Dit kan in de toekomst invloed hebben op je sociale leven. Je ouders vinden het niet erg maar willen wel dat je onder een andere sport gaat. Je krijgt nog wel een paar dagen bedenk tijd.</p></div>
								<div class="col-xs-6 text-center">
									<a href="sport.php?personal='; echo $personal; echo '&sport=9&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
						}
						
						switch($sport){
							 case $sport == 5:
								echo '<p>Op de voetbaltraining zie je aantal mensen rondlopen in shirts van hun favoriete club. Op het moment draag jij nog geen shirt van een bestaande voetbalclub. Een van jouw teamgenoten komt naar jouw toe en vraagt voor welke voetbalclub jij bent.</p>
								<form>
									<input type="radio" name="sport" value="6" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" class="hide" name="family" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>FC Den Bosch<br>
									<input type="radio" name="sport" value="7">Ajax<br>
									<input type="radio" name="sport" value="8">PSV<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $sport == 6:
								echo '<p>Je kiest voor een lokale voetbalclub die op redelijk hoog niveau speelt. Wie kan het daar nou niet mee eens zijn? Je zal in de toekomst ook regelmatig naar wedstrijden van FC Den Bosch gaan.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport=13&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $sport == 7:
								echo '<p>Je kiest een van de beste voetbalclubs op het moment, met een rijke geschiedenis. Veel vrienden van jouw zijn ook Ajacied. Alleen jouw familie is het niet eens met jouw keuze, hun zijn namelijk voor PSV.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport=13&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $sport == 8:
								echo '<p>Een uitstekende keuze, tenminste volgens jouw familie. Bijna iedereen die om voetbal geeft is ook voor PSV. Je vrienden zijn er iets minder blij mee, hun zijn juist weer voor Ajax.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport=13&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
						}
						
						switch($sport){
							 case $sport == 9:
								echo '<p>Na een paar dagen komen je ouders naar je toe. Ze verplichten je om op een sport. Je ouders leggen je de volgende keuzes voor:</p>
								<form>
									<input type="radio" name="sport" value="10" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school"  class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis"  class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Basketbal.<br>
									<input type="radio" name="sport" value="11">Handbal.<br>
									<input type="radio" name="sport" value="12">Tennis.<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $sport == 10:
								echo '<p>De volgende dag gaat je vader naar de plaatselijke Basketball verenging om je te laten inschrijven! Je kunt volgende week al gelijk mee trainen.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport=14&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $sport == 11:
								echo '<p>De volgende dag gaat je vader naar een handbal verenging in de buurt om je te laten inschrijven! Je kunt volgende week al gelijk mee trainen.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport=15&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $sport == 12:
								echo '<p>De volgende dag gaat je vader naar de plaatselijke tennis verenging om je te laten inschrijven! Je kunt volgende week al gelijk meegaan.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport=16&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
						}
						
						
						//Life 2
						switch($sport){
							case $sport == 13:
								echo '<p>Auw. Je krijgt een blessure terwijl je bezig bent met sporten. Je knieschijf gaat uit de kom. Je moet naar het ziekenhuis en krijgt een brace om. Je mag een week lang niks doen om vervolgens 4 tot 6 weken je brace om te laten en 6 tot 8 weken op krukken te lopen. Daarna ga je revalideren. Het gaat steeds beter en je mag snel weer sporten. De vraag is of je weer verder gaat met sporten.</p>
								<form>
									<input type="radio" name="sport" value="14" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Doorgaan<br>
									<input type="radio" name="sport" value="15">Stoppen<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
								case $sport == 14:
									echo '<p>Omdat je er al zo lang mee bezig bent betekent dit veel voor je. Het is daarom ook een makkelijke keuze om door te gaan je staat ontzettend snel weer op het trainingsveld.</p></div>
									<div class="col-xs-6 text-center">
										<a href="sport.php?personal=';echo $personal; echo '&sport=16&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
									</div>';
									break;
									
								case $sport == 15:
									echo '<p>Een wijs besluit om te stoppen. Het is een blessure die nog wel eens kan terug komen later en je wilt niet nog eens dit meemaken. </p></div>
									<div class="col-xs-6 text-center">
										<a href="life2.php?personal=';echo $personal; echo '&sport=22&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
									</div>';
									break;
						}
						
						switch($sport){
							case $sport == 16:
								echo '<p>Een blessure kan nog wel eens terug komen. Nadat je weer bent gaan sporten keert je oude blessure terug, je knieschijf gaat weer uit de kom. Het is dit keer je andere knie, waarschijnlijk door overbelasting. Je moet het hele traject opnieuw doorlopen; een week lang niks doen, 4 tot 6 weken een brace om, 6 tot 8 weken op krukken lopen en tot slot weer gaan revalideren. Nadat je dit allemaal weer gedaan hebt mag je weer gaan sporten, maar ga je door?.</p>
								<form>
									<input type="radio" name="sport" value="17" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Doorgaan<br>
									<input type="radio" name="sport" value="18">Stoppen<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
								case $sport == 17:
									echo '<p>Je besluit om gewoon door te gaan. Je bent er al sinds je vijfde mee bezig en je wilt het niet zo makkelijk opgeven. Nadat je klaar bent met revalideren sta je weer snel op het traningsveld! </p></div>
									<div class="col-xs-6 text-center">
										<a href="sport.php?personal=';echo $personal; echo '&sport=19&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
									</div>';
									break;
									
								case $sport == 18:
									echo '<p>Twee keer een sport blessure krijgen is niet fijn. Je besluit daarom om te gaan stoppen, ook al doe je het sinds je vijfde. Je bent wel bereid om snel weer een nieuwe sport te gaan zoeken. </p></div>
									<div class="col-xs-6 text-center">
										<a href="life2.php?personal=';echo $personal; echo '&sport=22&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
									</div>';
									break;
						}
						
						switch($sport){
							case $sport == 19:
								echo '<p>Het is nog geen jaar geleden sinds je knieschijf voor de eerste keer uit de kom is gegaan. Maar het gebeurt weer, een derde keer. Je ligt huilend op de grond en zweert om nooit meer te gaan sporten. Nadat je weer het zelfde traject hebt doorgelopen, 1 week lang niks doen, 4 tot 6 weken een brace om, 6 tot 8 weken op krukken lopen en vervolgens gaan revalideren, krijg je weer de keuze om door te gaan.</p>
								<form>
									<input type="radio" name="sport" value="20" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Doorgaan<br>
									<input type="radio" name="sport" value="21">Stoppen<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
								case $sport == 20:
									echo '<p>Je wilt doorgaan, zodra je wilt weer gaan beginnen komen je ouders naar je toe. Zij zeggen dat het beter is om te gaan stoppen. Na een lang gesprek besluit je dan ook om te gaan stoppen. Het is mooi geweest en niet meer verantwoordelijk om te doen</p></div>
									<div class="col-xs-6 text-center">
										<a href="life2.php?personal=';echo $personal; echo '&sport=22&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
									</div>';
									break;
									
								case $sport == 21:
									echo '<p>Drie keer is genoeg. Het is mooi geweest. Het is klaar. Je besluit om te stoppen, dat is de beste keuze die er momenteel is.</p></div>
									<div class="col-xs-6 text-center">
										<a href="life2.php?personal=';echo $personal; echo '&sport=22&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
									</div>';
									break;
						}
						
						switch($sport){
							case $sport == 22:
								echo '<p>Nadat je gestopt bent met je eerste sport ga je een nieuwe sport kiezen. Omdat je niet alle sporten meer mag kiezen omdat dit niet verantwoordelijk is, is je keuze vrij beperkt. Ook wil je nog de sport leuk vinden, waardoor de keuze niet makkelijker wordt.</p>
								<form>
									<input type="radio" name="sport" value="23" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Wielrennen<br>
									<input type="radio" name="sport" value="24">Handbal<br>
									<input type="radio" name="sport" value="25">Zwemmen<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
								case $sport == 23:
									echo '<p>Wielrennen heeft je de laatste jaren aangetrokken. De eerste keer dat je ervan hoorde was in 2007, toen Rasmussen namens de Rabobank ploeg in de gele trui reed in de Tour de France. Vervolgens ben je het een beetje gaan volgen. Wielrennen, een uitstekende keuze dus!</p></div>
									<div class="col-xs-6 text-center">
										<a href="life2.php?personal=';echo $personal; echo '&sport=23&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
									</div>';
									break;
									
								case $sport == 24:
									echo '<p>Handbal is een sport waar je weinig van af weet, maar volgens jouw er wel leuk uit ziet om te doen. Het lijkt wel een beetje op voetbal maar is toch net anders, je wilt het daarom wel gaan proberen.</p></div>
									<div class="col-xs-6 text-center">
										<a href="life2.php?personal=';echo $personal; echo '&sport=24&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
									</div>';
									break;
									
								case $sport == 25:
									echo '<p>Misschien niet echt om wedstrijden te gaan zwemmen, maar wel om fit te blijven wil je gaan zwemmen. Een sport die ook uitstekend werkt met je knieën.</p></div>
									<div class="col-xs-6 text-center">
										<a href="life2.php?personal=';echo $personal; echo '&sport=24&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
									</div>';
									break;
						}
						
						//Life 3
						switch($sport){
							case $sport == 26:
								echo '<p>Nadat je een jaar aan het wielrennen bent gaat je vader ook wielrennen. Uiteindelijk komt de vraag of je met een aantal vrienden van hem en van jouw naar Frankrijk wil gaan om de Alp Duez te gaan fietsen.</p>
								<form>
									<input type="radio" name="sport" value="27" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Ja natuurlijk!<br>
									<input type="radio" name="sport" value="28">Nee, absoluut niet.<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
								case $sport == 27:
									echo '<p>Je gaat naar Frankrijk om de Alp Duez te fietsen. In de komende jaren ga je nog een aantal keer terug, je zult de Alp Duez uiteindelijk 3x fietsen. De eerste keer in 68 minuten, tweede keer in 81 minuten en de derde keer in 78 minuten. Je zult in Frankrijk niet alleen de Alp Duez fietsen maar ook de Col D’Ornon en de Col du Galibier.</p></div>
									<div class="col-xs-6 text-center">
										<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
									</div>';
									break;
									
								case $sport == 28:
									echo '<p>Je gaat niet naar Frankrijk, maar je vader wel. Hij heeft een hele ervaring en je hebt achteraf spijt dat je het niet gedaan hebt. Je zult uiteindelijk ook niet terug gaan naar Frankrijk om het te gaan fietsen.</p></div>
									<div class="col-xs-6 text-center">
										<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
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