<?php
	include_once ('header.php');
?>
<body id="body">
<div class="container">
	<div class="row rowtitle">
		<div class="col-10">
			<p class="codetext inline-block">&#60;h1&#62;</p><h1 class="inline-block">Stan Gloudemans Portfolio</h1><p class="codetext inline-block">&#60;h1&#62;</p>
		</div>
	</div> <!-- End row -->
</div> <!-- End container -->

<div class="container">
	<div class="col-12 text-center">
		<p class="codetext inline-block">&#60;div class="row"&#62;</p>
	</div>
			
		<div class="container-fluid field">
			<div class="col-4 float-left text-center">
			<p class="codetext inline-block">&#60;div class="col-xs-2"&#62;</p>
				<a href="home.php?s=3">
					<div class="ball" id="two"><p class="cirkeltekst">S3</p></div>
				</a>
			</div>

				<div class="col-4 float-left text-center">
				<p class="codetext inline-block">&#60;div class="col-xs-2"&#62;</p>
					<a href="home.php?s=4">
						<div class="ball" id="five"><p class="cirkeltekst">S4</p></div>
					</a>
				</div>

				<!-- ToDo: Change to login.php -->
				<div class="col-4 float-left text-center">
				<p class="codetext inline-block">&#60;div class="col-xs-2"&#62;</p>
					<a href="login.php">
						<div class="ball" id="three"><p class="cirkeltekst">Admin</p></div>
					</a>
				</div>
            </div> <!-- Container-fluid veld -->
</div> <!-- End container -->
		
<div class="container">
	<div class="col-4 float-left text-center">
		<p class="codetext inline-block">&#60;/div&#62;</p>
	</div>
				
	<div class="col-4 float-left text-center">
		<p class="codetext inline-block">&#60;/div&#62;</p>
	</div>
				
	<div class="col-4 float-left text-center">
		<p class="codetext inline-block">&#60;/div&#62;</p>
	</div>
	
	<div class="col-12 text-center zindex">
		<p class="codetext inline-block">&#60;/div&#62;</p>
	</div>
	<?php include_once ('includes/button.inc.php'); ?>
</div> <!-- End Container -->

<?php
	include_once ('footer.php');
?>
</body>
