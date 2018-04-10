<?php
require_once('Iheader.php');
?>

<html>
        <body>
		    <div class="container-fluid">
				<div class="Col-xs-12">
					<h1>Stan Life Simulator</h1>
					<p>Welkom bij de Stan Life Simulator. Met deze simulator stap je in het leven van Stan Gloudemans. Stan heeft tijdens zijn leven enkele beslissingen genomen en gebeurtenissen meegemaakt. Nu kun jij je eigen beslissingen nemen en kijken waar jij terecht komt! Klik hieronder om de simulatie te beginnen!</p>
				</div>
				
				<div class="col-xs-12 text-center">
					<button class="btn btn-default" onclick="window.location.href='life1.php?personal=1&sport=1&family=1&school=1&gebeurtenis=1&werk=1'">Start</button>
				</div>
		    </div> <!-- Container-fluid -->
        </body>
</html>

<?php
    require_once ("Ifooter.php");
?>