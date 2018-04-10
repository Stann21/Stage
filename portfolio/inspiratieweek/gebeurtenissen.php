<?php
require_once('Iheader.php');
?>

<html>
        <body>
		    <div class="container-fluid">
				<div class="Col-xs-12">
					<h1>Gebeurtenis</h1>
				</div>
					<div class="col-xs-6">
						<?php 
						$personal = $_GET ['personal']; 
						$sport = $_GET ['sport']; 
						$family = $_GET ['family']; 
						$school = $_GET ['school']; 
						$werk = $_GET ['werk']; 
						$gebeurtenis = $_GET['gebeurtenis'];
						
						switch($gebeurtenis){
							 case $gebeurtenis == 1:
								echo $Persoonlijktekst =  '<p>Je krijgt een bericht van je peetoom en peettante. Je krijgt een nichtje erbij! En niet zomaar een nichtje, ze wordt geadopteerd uit Colombia. Samen met je familie ga je ze ophalen met je nieuwe Nichtje; Rosa! Eenmaal thuis krijg je ook nog twee mooie cadeaus van Colombia. Een nationaal Colombia voetbalshirt me je eigen naam erop en een Hard Rock Cafe Bogota shirt!</p></div>
								<div class="col-xs-6 text-center">
									<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis=2&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
								</div>';
								break;
								
								case $gebeurtenis == 2:
									switch ($family){
										case $family == 5:
											echo $Persoonlijktekst =  '<p>Je bent nog vrij jong als je moeder een kijkoperatie krijgt aan haar knie. De volgende dag na de kijkoperatie blijkt er iets niet goed te zijn. De dokteren constateren dat je moeder dystonie heeft opgelopen. Hierdoor zal ze nooit meer normaal kunnen lopen. Ook zal ze regelmatig naar het ziekenhuis moeten gaan samen je vader.</p>
											<p>Je vader en moeder komen terug van het ziekenhuis. Net op optijd, want de zoveelste ruzie stond op het punt om plaats te vinden voor vandaag. Als ze binnen komen blijken er totaal geen klusjes te zijn gedaan. Je vader en moeder zijn teleurgesteld in jullie.</p></div>
											<div class="col-xs-6 text-center">
												<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis=3&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
											</div>';
											break;
											
										case $family == 6:
											echo $Persoonlijktekst =  '<p>Je bent nog vrij jong als je moeder een kijkoperatie krijgt aan haar knie. De volgende dag na de kijkoperatie blijkt er iets niet goed te zijn. De dokteren constateren dat je moeder dystonie heeft opgelopen. Hierdoor zal ze nooit meer normaal kunnen lopen. Ook zal ze regelmatig naar het ziekenhuis moeten gaan samen je vader.</p>
											<p>Je vader en moeder komen terug van het ziekenhuis. Jij en Ilse hebben allebei een aantal klusjes gedaan, maar niet allemaal. Je vader is een beetje chagrijnig dat jullie niet alles gedaan hebben. Zonde!</p></div>
											<div class="col-xs-6 text-center">
												<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis=3&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
											</div>';
											break;
											
										case $family == 7:
											echo $Persoonlijktekst =  '<p>Je bent nog vrij jong als je moeder een kijkoperatie krijgt aan haar knie. De volgende dag na de kijkoperatie blijkt er iets niet goed te zijn. De dokteren constateren dat je moeder dystonie heeft opgelopen. Hierdoor zal ze nooit meer normaal kunnen lopen. Ook zal ze regelmatig naar het ziekenhuis moeten gaan samen je vader.</p>
											<p>Je vader en moeder komen terug van het ziekenhuis. Ze zijn gelukkig een beetje optijd want het eten is net klaar. Ze kunnen direct aan tafel om te gaan eten. Je ouders zijn trots op jouw en je Ilse. Teamwork!</p></div>
											<div class="col-xs-6 text-center">
												<a href="life1.php?personal=';echo $personal; echo '&sport='; echo $sport; echo '&family='; echo $family; echo '&school='; echo $school; echo '&gebeurtenis=3&werk='; echo $werk; echo '"><button class="btn btn-default">Volgende</button></a>
											</div>';
											break;
									}
									break;
							}
					?>
		    </div> <!-- Container-fluid -->
        </body>
</html>

<?php
    require_once ("Ifooter.php");
?>