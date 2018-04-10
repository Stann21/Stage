<?php
    require_once ('adminheader.php');
?>
				<label for="show" class="pull-right hulpimg"><img src="../images/icon/Hulp.png" height="37.0px" width="29.4px" class="pull-right helpimg" /></label>
				<input type=radio class="inputhide" id="show" name="group">
				
				<span id="content">
					<div class="container">
						<div class="col-xs-9 col-sm-10">
						<?php  
							//Haal paginanaam op en zet deze in een variabel
							$pagename = basename($_SERVER['PHP_SELF']); 
							switch ($pagename) {
								case "adminpagina.php":
									echo "<div class='col-xs-12 col-sm-4'>
												<h3>Algemeen</h3>
												<p>Om terug te gaan naar dit scherm kun je altijd linksboven klikken op de naam 'Stan Gloudemans'.</p>
												<p> Om direct naar de website te gaan kun je rechtsboven op het huisje klikken. </p>
												<p> Om uit te loggen kun je rechtsboven op het loguit knop drukken </p>
											</div>
											
											<div class='col-xs-12 col-sm-4'>
												<h3>Projecten</h3>
												<p>Om een project aan te maken klik je op 'Projecten toevoegen'.</p>
												<p>Om projecten te verwijderen klik je op 'Projecten verwijderen'. </p>
												<p> Om de tekst en de coverafbeeldingen aan te passen klik je op 'Projecten Aanpassen'. </p>
											</div>
											
											<div class='col-xs-12 col-sm-4'>
												<h3>Afbeeldingen</h3>
												<p>Om afbeeldingen te uploaden en toe te wijzen aan een project klik je op 'Afbeeldingen toevoegen'.</p>
												<p> Om afbeeldingen te verwijderen klik je op 'Afbeeldingen verwijderen'.
											</div>";
									break;
									
								case "post-edit.php":
									echo "<div class='col-xs-12 col-sm-6'>
												<h3>Algemeen</h3>
												<p>Hier kun je projecten toe voegen. Het is verplicht om elk veld in te vullen. Elk project die wordt opgeslagen komt direct online te staan. Onderaan de pagina kun je het project Opslaan of terug gaan naar de adminpagina.</p>
											</div>
											
											<div class='col-xs-12 col-sm-6'>
												<h3>Projecten toevoegen</h3>
												<p>Titelproject: Voeg hier de titel van het project in.</p>
												<p>Cover afbeelding: Elk project heeft een cover afbeelding. Klik hier om deze toe te wijzen. Je zult later de cover afbeelding nog wel moeten uploaden via 'Afbeeldingen toevoegen'.</p>
												<p>Grid: Het grid bepaald hoe groot de cover afbeelding op de categorie pagina komt te staan. Er zijn 4 opties met verschillende grootte.</p>
												<p>Categorie: Elk project kan maar 1 categorie hebben. Maak een keuze uit de opgegeven categorieen.</p>
												<p>Tekst: Hier kunt u uw tekst invoeren voor het project. Als je afbeeldingen wilt toevoegen aan het project kun je dat het beste doen via 'Afbeeldingen toevoegen'.</p>
											</div>";
									break;
									
								case "delete.php":
									echo "<div class='col-xs-12 col-sm-12'>
												<h3>Algemeen</h3>
												<p>Om een project te verwijderen klik je op de knop onder die bij het project staat en vervolgens op 'Project verwijderen' onderaan de pagina. Zodra een project is vewijderd is hij definitief verwijderd. Er is geen manier om het terug te krijgen. Om zeker te weten dat je het goede project is verwijderd zijn er ook mogelijkheden om de projecten te sorteren.</p>
											</div>";
									break;
									
								case "projectaanpassen.php":
									echo "<div class='col-xs-12 col-sm-6'>
												<h3>Project aanpassen</h3>
												<p>Om de titel, categorie, grid of de tekst van een project aan te passen klik je op 'Project aanpassen.' wat onder het project staat wat je wilt aanpassen. Er is ook een mogelijkheid om projecten te sorteren zodat je het project wat je zoekt sneller kunt vinden.</p>
											</div>
											
											<div class='col-xs-12 col-sm-6'>
												<h3>Cover afbeelding aanpassen</h3>
												<p>Om de cover afbeeldingen te veranderen van een project klik jeop 'Coverafbeelding aanpassen.' wat onder het project staat wat je wilt aanpassen. Er is ook een mogelijkheid om projecten te sorteren zodat je het project wat je zoekt sneller kunt vinden.</p>
											</div>";
									break;
									
								case "aanpassen.php":
									echo "<div class='col-xs-12 col-sm-6'>
												<h3>Algemeen</h3>
												<p>Alle huidige informatie van het project is ingevuld. Je kunt deze aanpassen waar nodig is. Elk veld moet wel ingevuld zijn als je het project wilt opslaan.</a></p>
											</div>
									
											<div class='col-xs-12 col-sm-6'>
												<h3>Projecten Aanpassen</h3>
												<p>Titelproject: Voeg hier de titel van het project in.</p>
												<p>Grid: Het grid bepaald hoe groot de cover afbeelding op de categorie pagina komt te staan. Er zijn 4 opties met verschillende grootte.</p>
												<p>Categorie: Elk project kan maar 1 categorie hebben. Maak een keuze uit de opgegeven categorieen.</p>
												<p>Tekst: Hier kunt u uw tekst invoeren voor het project. Als je afbeeldingen wilt toevoegen aan het project kun je dat het beste doen via 'Afbeeldingen toevoegen'.</p>
											</div>";
									break;
									
								case "coveraanpassen.php":
									echo "<div class='col-xs-12'>
												<h3>Algemeen</h3>
												<p>Om de cover afbeelding aan te passen klik je op de knop 'Bestand kiezen'. Vervolgens klik je onderaan de pagina op 'Opslaan' knop. Mocht de nieuwe cover afbeelding niet rechts van de pagina staan, dan heb je de afbeelding nog niet geupload. <a href='upload.php'>Klik hier om de afbeelding te uploaden.</a></p>
											</div>";
									break;
									
								case "upload.php":
									echo "<div class='col-xs-12 col-sm-6'>
												<h3>Afbeeldingen uploaden</h3>
												<p>Om afbeeldingen up te loaden klik je op de knop 'Bestanden keizen'. Je kunt meerdere afbeeldingen tegelijk uploaden. De maximale grootte van een afbeelding mag 976kb/1000000b zijn.</p>
											</div>
											
											<div class='col-xs-12 col-sm-6'>
												<h3>Afbeeldingen toevoegen aan projecten</h3>
												<p>Om afbeeldingen toe te veogen aan een project moet je het project ID weten. Rechts staan alle projecten met het project ID. Vul dit nummer en klik vervolgens op de knop 'Upload'.</p>
											</div>";
									break;
									
								case "imgdelete.php":
									echo "<div class='col-xs-12'>
												<h3>Afbeeldingen verwijderen</h3>
												<p>Om een afbeelding te verwijderen klik op het aanvinkvak en vervolgens op verwijderen. Je kunt maar 1 afbeelding per keer verwijderen. Ook is er een mogelijkheid om afbeeldingen te sorteren om zo sneller je afbeelding te vinden.</p>
											</div>";
									break;
									
								case "projectlijst.php":
									echo "<div class='col-xs-12'>
												<h3>Projecten lijst</h3>
												<p>Op deze pagina kun je alle projecten terug vinden die zijn aangemaakt. Dit geld voor zowel de online als offline projecten. De indeling is als volgt: het id van het project, de naam van het project, de categorie van het project, een link om het project te bekijken, en de status van het project.</p>
											</div>";
									break;
								
								default:
									echo "Het spijt ons, er is momenteel geen hulppagina beschikbaar.";
							}
						?>
						</div> <!-- Col-xs-9  col-sm-10 -->						
						<div class="col-xs-1">
							<div class="col-xs-12">
								<label for="hide" class="pull-right"><img src="../images/icon/Kruisje.png" height="37.0px" width="29.4px" class="pull-right helpimg" /></label>    
								<input type=radio class="inputhide" id="hide" name="group">
							</div> <!-- col-xs-12 -->
						</div> <!-- col-xs-1 -->
					</div> <!-- container -->
				</span>