<?php
require_once('Iheader.php');
?>

<html>
        <body>
		    <div class="container-fluid">
				<div class="Col-xs-12">
					<h1>School</h1>
				</div>
					<div class="col-xs-6">
						<?php 
						$personal = $_GET ['personal']; 
						$sport = $_GET ['sport']; 
						$family = $_GET ['family']; 
						$school = $_GET ['school']; 
						$gebeurtenis = $_GET['gebeurtenis'];	
						$werk = $_GET ['werk']; 						
						
						switch($school){
						//Life 1 //
							 case $school == 1:
								echo '<p>Je ouders hebben een basisschool uitgekozen waar je de komende jaren naar school gaat om te leren. Op de eerste dag maak je al veel vrienden, maar uiteindelijk zal je toch wat moeten doen voor school.</p>
								<form>
									<input type="radio" name="school" value="2" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Je gaat niet veel doen voor school, maar veel met vrienden spelen.<br>
									<input type="radio" name="school" value="3">Je gaat je volledig focussen op school, maar niet al te veel met je vrienden spelen.<br>
									<input type="radio" name="school" value="4">Je probeert een combinatie te vinden tussen leren en met vrienden spelen.<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $school == 2:
								echo '<p>Veel mensen mogen je en je maakt snel vrienden. Toch loopt het op school niet heel soepel, je hebt het vrij veel moeite om het niveau bij te houden.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $school == 3:
								echo '<p>Op school gaat het ontzettend goed. Je bent een van de betere van de klas, maar je hebt niet heel veel vrienden om mee te spelen.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $school == 4:
								echo '<p>Je hebt een paar goede vrienden waar je goed mee kunt opschieten en op school gaat het niet heel slecht.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							// Life 2
							//Middelbare school keuze 
							case $school == 5:
								echo '<p>Nadat je klaar bent op de basis school moet je een keuze gaan maken voor de middelbare school. Je ouders hebben je duidelijk gemaakt dat dit een hele belangrijke keuze is. Je hebt 3 keuzes:</p>
								<form>
									<input type="radio" name="school" value="6" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Elde College, een school waar een aantal mensen van de basisschool ook gaat, en de afstand is goed te doen met de fiets<br>
									<input type="radio" name="school" value="7">Bernrode, een school waar veel vrienden van jouw heen gaan, alleen is het de vraag of je wordt aangenomen. <br>
									<input type="radio" name="school" value="8">Sint Janslyceum, niet veel mensen gaan hierheen, maar de school is tenminste wel dichtbij. <br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							 case $school == 6:
								echo '<p>Je kiest voor het Elde College. Een goede keuze, je trekt al gauw op met mensen die van de basisschool hier ook naar toe gaan. Het fietsen vindt je niet heel erg, en de school is nog niet zo slecht als je denkt. </p></div>
								<div class="col-xs-6 text-center">
									<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=12&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							case $school == 7:
								echo '<p>Je wordt wel aangenomen, maar al gauw is het niveau te zwaar voor je. Je valt al snel af en je moet een jaar wachten voordat je weer kan instromen bij de volgende lichting, op een nieuwe school </p></div>
								<div class="col-xs-6 text-center">
									<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=9&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $school == 8:
								echo '<p>Het is een beetje een nieuwe start, je kent nagenoeg niemand die op deze school maar het is een uitstekende school. En bovendien je hoeft helemaal niet lang te fietsen!</p></div>
								<div class="col-xs-6 text-center">
									<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=15&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
								//Elde college
							case $school == 12:
								echo '<p>Nadat je de eerste twee jaar hebt doorgebracht op school is het tijd om een keuze voor een richting te maken. Je hebt verschillende keuzes, maar uiteindelijk blijven er twee keuzes over:</p>
								<form>
									<input type="radio" name="school" value="13" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Elektrotechniek <br>
									<input type="radio" name="school" value="14">Technology & Dienstverlening<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							 case $school == 13:
								echo '<p>Hoewel het je in eerste instantie niet helemaal leuk lijkt, vindt je het uiteindelijk wel leuk. Nadat je twee jaar hebt doorgebracht en je opleiding hebt afgerond ga je direct aan de slag bij je stagebedrijf!</p></div>
								<div class="col-xs-6 text-center">
									<a href="life2.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk=8"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							case $school == 14:
								echo '<p>Het is allemaal vrij nieuw, en hierdoor vrij chaotisch, maar je vindt het wel geweldig. Het is helemaal jouw ding. Nadat je twee jaar hebt afgerond wil je eigenlijk direct door naar een MBO school.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life2.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
								// Opnieuw beginnen
							case $school == 9:
								echo '<p>Na je mislukte avontuur bij Bernrode heb je opnieuw een keuze. Je wilt een goede keuze maken dus kies je de twee scholen waar je al een kijkje hebt genomen.</p>
								<form>
									<input type="radio" name="school" value="10" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Elde College, een school waar een aantal mensen van de basisschool ook gaat, en de afstand is goed te doen met de fiets<br>
									<input type="radio" name="school" value="11">Sint Janslyceum, niet veel mensen gaan hierheen, maar de school is tenminste wel dichtbij. <br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							 case $school == 10:
								echo '<p>Je kiest voor het Elde College. Een goede keuze. Je legt snel contact met mensen van de basisschool zodat je tenminste niet alleen hoeft te fietsen. Ook de school is niet zo slecht als je in eerste instantie dacht.</p></div>
								<div class="col-xs-6 text-center">
									<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=12&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $school == 11:
								echo '<p>Je kiest voor het Sint Janslyceum. Een uitstekende keuze, volgens je ouders tenminste. Er zijn niet veel mensen die je kent en je fietst regelmatig alleen. Je maakt gelukkig al wel wat vrienden op school.</p></div>
								<div class="col-xs-6 text-center">
									<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=15&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							// Sint Janslyceum
							case $school == 15:
								echo '<p>Nadat je de eerste twee jaar hebt doorgebracht op school is het tijd om een keuze voor een richting te maken. Je hebt verschillende keuzes, maar uiteindelijk blijven er twee keuzes over:</p>
								<form>
									<input type="radio" name="school" value="13" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Elektrotechniek <br>
									<input type="radio" name="school" value="13">Metaaltechniek<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							// MBO school
							case $school == 16:
								echo '<p>Je hebt besloten om naar een MBO school te gaan. Je gaat naar open dagen en zoekt veel informatie. Je gaat jezelf ook afvragen wat je nu precies wilt gaan doen. Na lang overwegen en nadenken kun je nu kiezen uit twee scholen:</p>
								<form>
									<input type="radio" name="school" value="17" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Koning Willem I College: Je wilt hier een opleiding volgen die heet mediavormgeving. De opleiding bevind zich in ’s-Hertogenbosch, wat redelijk dichtbij huis is.<br>
									<input type="radio" name="school" value="18">De Eindhovense School: Je wilt hier een opleiding volgen die heet gamedesign. De opleiding bevind zich in Eindhoven, wat iets verder van huis is.<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $school == 17:
							echo '<p>Je volgt de intake en je wordt direct aangenomen! Volgend jaar ga je naar het Koning Willem I College!</p></div>
								<div class="col-xs-6 text-center">
									<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=19&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							case $school == 18:
								echo '<p>Je volgt de intake maar je wordt niet aangenomen. Je besluit daarom om je tweede keus te pakken, het Koning Willem I College. Hier volg je ook de intake en je wordt hier wel aangenomen!</p></div>
								<div class="col-xs-6 text-center">
									<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=19&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
						
							// Bosnie
							case $school == 19:
								echo '<p>In je tweede jaar op de opleiding heb je de keuze om naar Bosnië te gaan, voor een goed doel. Je gaat hier een basisschool opknappen en zult uiteindelijk een week weg blijven. Het kost €500,- euro, maar je kunt dit ook inzamelen via sponsoren.</p>
								<form>
									<input type="radio" name="school" value="20" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Natuurlijk ga je mee!<br>
									<input type="radio" name="school" value="21">Je gaat niet mee.<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $school == 20:
								echo '<p>Je gaat met een hele groep van ongeveer 20 man. Zodra je landt in Bosnië volgt een indrukwekkende busreis naar je hotel. Je beleeft hier een hele bijzondere week die zeer zeker invloed op je heeft. De mensen daar zijn heel erg blij met het eindresultaat. Dit was absoluut de moeite waard.</p></div>
								<div class="col-xs-6 text-center">
									<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=22&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							case $school == 21:
								echo '<p>Een aantal andere klasgenoten gaan wel. Als ze terugkomen zie je het resultaat en baal je er wel van dat je niet bent mee gegaan.</p></div>
								<div class="col-xs-6 text-center">
									<a href="school.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=22&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							case $school == 22:
								echo '<p>Nadat je MBO opleiding hebt afgerond komt de vraag wat je wilt gaan doen. Ga je werken of ga je nog een opleiding volgen? Voor je gevoel ben je nog niet helemaal klaar met leren maar je hebt wel al flink wat stage ervaring.</p>
								<form>
									<input type="radio" name="school" value="23" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="family" class="hide" value="'; echo $family; echo '"checked><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Je gaat proberen om aan een baan te komen. <br>
									<input type="radio" name="school" value="24">Je gaat verder leren.<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $school == 23:
								echo '<p>Je probeert aan een baan te komen, maar dit blijkt moeilijker dan gedacht. Je bezit vaak de skills niet die je nodig hebt. Gelukkig kun je wel wat meer werken bij je huidige bijbaan.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=25&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							case $school == 24:
								echo '<p>Na een aantal open dagen te hebben bezocht besluit om je een opleiding te volgen op het Fontys, HBO-ICT. Deze opleiding past precies bij jouw, en je leert ontzettend veel. Een uitstekende keuze!</p></div>
								<div class="col-xs-6 text-center">
									<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school=25&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
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