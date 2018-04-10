<?php
require_once('Iheader.php');
?>

<html>
        <body>
		    <div class="container-fluid">
				<div class="Col-xs-12">
					<h1>Familie</h1>
				</div>
					<div class="col-xs-6">
						<?php 
						$personal = $_GET ['personal']; 
						$sport = $_GET ['sport']; 
						$family = $_GET ['family']; 
						$school = $_GET ['school']; 
						$werk = $_GET ['werk']; 
						$gebeurtenis = $_GET['gebeurtenis'];
						
						switch($family){
							 case $family == 1:
								echo '<p>Niet lang na je geboorte maak je kennis met je zus, Ilse! Ze is een paar jaar ouder dan jouw. Nu kun je je keuze maken hoe je in de toekomst tegen haar gaat gedragen.</p>
								<form>
									<input type="radio" name="family" value="2" required ><input type="radio" name="personal" class="hide" value="'; echo $personal; echo '"checked><input type="radio" name="school" class="hide" value="'; echo $school; echo '"checked><input type="radio" name="sport" class="hide" value="'; echo $sport; echo '"checked><input type="radio" name="gebeurtenis" class="hide" value="'; echo $gebeurtenis; echo '"checked><input type="radio" name="werk" class="hide" value="'; echo $werk; echo '"checked>Je kan het niet goed maar haar vinden, je maakt vaak ruzie.<br>
									<input type="radio" name="family" value="3">Je loopt elkaar niet in de weg. Jij doet jouw ding, zij doet jouw ding.<br>
									<input type="radio" name="family" value="4">Je kan het goed met elkaar vinden, je maakt weinig ruzie en helpen elkaar regelmatig.<br>
									<input type="submit" value="Submit">
								</form>
								</div>';
								break;
								
							case $family == 2:
								echo $Persoonlijktekst =  '<p>Een zus die je niet echt mag is nooit heel fijn. Je maakt ook regelmatig ruzie wat niet helpt. Dit kan later nog vervelend worden.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family=5&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $family == 3:
								echo $Persoonlijktekst = '<p>Het positieve is dat je tenminste geen ruzie maakt. Maar je zult elkaar ook nooit gaan helpen. Als het echt moet, kunnen jullie wel samenwerken.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family=6&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $family == 4:
								echo $Persoonlijktekst = '<p>Jij Ilse doen redelijk veel samen. Je helpt elkaar en kan met elkaar praten als dat nodig is. Je hebt een goede band en jullie kunnen niet echt zonder elkaar. Wat schattig!</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family=7&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							//Life 3
							case $family == 5:
								echo $Persoonlijktekst = '<p>Je zus praat er al een tijdje over met je. Ze wil naar Australie toe gaan. Je helpt haar zo nu en dan en voor de rest zie je het wel gebeuren. Uiteindelijk vertrekt ze op 10 maart 2017, je zult haar wel soort van gaan missen.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family=8&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							 case $family == 6:
								echo $Persoonlijktekst = '<p>Je zus praat er al een tijdje over met je. Je helpt haar zo nu en dan en voor de rest zie je het wel gebeuren. Uiteindelijk vertrekt ze op 10 maart 2017, je zult haar wel soort van gaan missen.</p></div>
								<div class="col-xs-6 text-center">
									<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family=8&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
							case $family == 7:
								echo $Persoonlijktekst = '<p>Je zus praat er al langer over, ze wil voor een jaar naar Australië. Je helpt haar veel waar dat nodig is, want het is niet niks een jaar lang naar Australie. 10 Maart 2017 vertrekt ze uiteindelijk, voor een jaar. Hoewel je haar ontzettend gaat missen, wens je haar wel het beste toe! </p></div>
								<div class="col-xs-6 text-center">
									<a href="life3.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family=8&school='; echo $school; echo '&gebeurtenis='; echo $gebeurtenis; echo '&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
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