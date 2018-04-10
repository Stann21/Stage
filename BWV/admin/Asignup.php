<?php
	include_once ('../header.php');
	
	$signup = $_GET["signup"];
	$user = $_GET["user"];
?>

<html>
	<body>
		<div class="container">
			<div class="col-xs-12">
			<?php 
				switch ($signup) {
					case 'normal':
						echo "<p>Signup formulier.</p>";
						break;
					
					case 'empty':
						echo "<p>Een van de velden is leeg.</p>";
						break;
					
					case 'invalid':
						echo "<p>Bepaalde characters zijn niet toegestaan.</p>";
						break;
					
					case 'email':
						echo "<p>Dit email adres is niet toegestaan.</p>";
						break;
					
					case 'usertaken':
						echo "<p>De gebruikersnaam is bezet.</p>";
						break;
						
					case 'success':
						echo "<p>De gebruiker is succesvol geregistreerd.</p>";
						break;
				}
			?>
			</div>
		
			<div class="col-xs-12">
					<form action="../includes/signup.inc.php" method="POST">
						<p>
							<label class="inloglabel">Voornaam</label>
							<input type="text" name="first" class="Input" placeholder="Firstname" />
						</p>
							
						<p>
							<label class="inloglabel">Achternaam</label>
							<input type="text" name="last"  class="Input" placeholder="Lastname" />
						</p>
						
						<p>
							<label class="inloglabel">E-mail</label>
							<input type="text" name="email"  class="Input" placeholder="E-mail" />
						</p>
						
						<p>
							<label class="inloglabel">Bedrijfsnaam</label>
							<input type="text" name="company" class="input" placeholder="Company" />
						</p>
						
						<p>
							<label class="inloglabel">Wachtwoord</label>
							<input type="password" name="pwd"  class="Input" placeholder="Password" />
						</p>

						<p>
							<input name="submit" type="Submit" value="Sign up" class="btn btn-default" />
							<a href="Adashboard.php?user=1"><p>Klik hier om terug te gaan</p></a>
						</p>
					</form>
			</div> <!-- Div xs12 -->
		</div> <!-- Container -->
	</body>
</html>

<?php
	include_once ('../footer.php');
?>