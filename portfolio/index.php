<?php
require_once('header.php');
require_once('includes/class-query.php');
?>

<html>
    <div class="container-fluid">
        <body id="body">
		<script>
			fbq('track', 'ViewContent');
		</script>
		<script>
  fbq('track', 'Lead');
</script>

        <div class="col-lg-12 text-center" >
			<p class="inline-block codetekst">&#60;h1&#62;</p><h1 class="inline-block">Stan Gloudemans</h1><p class="inline-block codetekst">&#60;/h1&#62;</p>
        </div>
		<p class="text-center codetekst">&#60;div class="container-fluid"&#62;</p>
			<div class="container-fluid veld">
					<div class="col-xs-3">
					<p class="text-center codetekst hidden-xs">&#60;div class="col-xs-2"&#62;</p>
						<a href="categorie.php?id=1">
							<div class="bal" id="ded"><p class="cirkeltekst">Intro</p></div>
						</a>
					</div>

					<div class="col-xs-3">
					<p class="text-center codetekst hidden-xs">&#60;div class="col-xs-2"&#62;</p>
						<a href="categorie.php?id=2">
							<div class="bal" id="sco"><p class="cirkeltekst">BWV</p></div>
						</a>
					</div>

					<div class="col-xs-3">
					<p class="text-center codetekst hidden-xs">&#60;div class="col-xs-2"&#62;</p>
						<a href="categorie.php?id=3">
							<div class="bal" id="uxu"><p class="cirkeltekst">Game</p></div>
						</a>
					</div>
					
					<div class="col-xs-3">
					<p class="text-center codetekst hidden-xs">&#60;div class="col-xs-2"&#62;</p>
						<a href="overmij.php?id=1">
							<div class="bal" id="admin"><p class="cirkeltekst">Stan</p></div>
						</a>
					</div>
            </div> <!-- Container-fluid veld -->
			
			<div class="container-fluid">
				<div class="col-xs-4">
					<p class="text-center codetekst hidden-xs">&#60;/div&#62;</p>
				</div>
				
				<div class="col-xs-4">
					<p class="text-center codetekst hidden-xs">&#60;/div&#62;</p>
				</div>
				
				<div class="col-xs-4">
					<p class="text-center codetekst hidden-xs">&#60;/div&#62;</p>
				</div>
				
				<div class="col-xs-12">
					<p class="text-center codetekst">&#60;/div&#62;</p>
				</div>
				
				<div class="col-xs-12 text-center">
					<p class="text-center codetekst">&#60;div class="col-xs-12"&#62;</p>
					<button onclick="myFunction()" class="btn btn-danger" id="tekst">Klik NIET op deze knop!</button>

					<script>
						function myFunction() {
							document.getElementById("body").style.fontFamily = "Comic Sans MS";
							document.getElementById("tekst").innerHTML='Wat heb je gedaan?';
						}
					</script>
					<p class="text-center codetekst">&#60;/div&#62;</p>
				</div>
			</div> <!-- Container-fluid -->
        </body>
		
    </div> <!-- Container-fluid -->
</html>

<?php
    require_once ("footer.php");
?>