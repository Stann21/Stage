<?php
    require_once ("adminheader.php");
    require_once ('logincheck.php');
    require_once ('connect.php');
?>

<!-- Data update script -->
<?php
if(!empty($_POST)){
    require_once ('../includes/class-insert.php');
    if ($insert->update($_POST)){
        echo'<div class="container"><div class="col-xs-12"><p class="succesvol">Data is succesvol upgedated</p></div></div>';
    }
}
?>

<?php
//ID Ophalen uit URL
$id = $_GET ['id'];

$sql = "SELECT * FROM posts WHERE ID = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $row["ID"];
        $title = $row["post_title"];
        $content = $row["post_content"];
        $category = $row["post_category"];
        $grid = $row["post_grid"];
		$publish = $row["post_publish"];
    }
}

?>

<!-- HTML voor data invoeren -->
<html>
<body>
<div class="Container-fluid">
    <div class="container">
        <form method="post">
            <div class="container">
                <script src="ckeditor/ckeditor.js"></script>
                <div class="col-xs-12 col-sm-6 adminblok">
                    <label>Titel project</label>
                    <input type="text" name="post_title" class="Input" value="<?php echo $title ?>" required />
                </div>
            </div> <!-- Container -->

            <div class="container">
                <div class="col-xs-12 col-sm-4 adminblok">
					<?php
					// Kijken welk grid nummer wordt opgegeven. Vervolgens het juiste grid nummer actief maken, de andere grid nummers leeg laten voor voorkomen van foutmeldingen.
						switch ($grid) {
							case $grid == 1:
								$grid1 = "checked";
								$grid2 = '';
								$grid3 = '';
								$grid4 = '';
								break;
								
							case $grid == 2:
								$grid1 = '';
								$grid2 = "checked";
								$grid3 = '';
								$grid4 = '';
								break;
								
							case $grid == 3:
								$grid1 = '';
								$grid2 = '';
								$grid3 = "checked";
								$grid4 = '';
								break;
								
							case $grid == 4:
								$grid1 = '';
								$grid2 = '';
								$grid3 = '';
								$grid4 = "checked";
								break;
						}
						?>
						
					<?php 
						if ($_GET['id'] >= '2') {
						echo '<label>Grid</label><br />';
						
							echo '<p class="radiolabel">Vak grootte 1, 250px
							<input type="radio" name="post_grid" value="1"';
							echo $grid1;
							echo '/> </p>';
							
							echo '<p class="radiolabel">Vak grootte 2, 325px
							<input type="radio" name="post_grid" value="2"';
							echo $grid2;
							echo '/></p>';
							
							echo '<p class="radiolabel">Vak grootte 3, 400px
							<input type="radio" name="post_grid" value="3"';
							echo $grid3; 
							echo '/></p>';
							
							echo '<p class="radiolabel">Vak grootte 4, 475px
							<input type="radio" name="post_grid" value="4"';
							echo $grid4;
							echo '/></p>';
						}
					?>
                </div>


                <div class="col-xs-12 col-sm-4 adminblok">
					<?php
						// Kijken welk categorie wordt opgegeven. Vervolgens het juiste categorie variabel actief maken, de andere categorie variabelen leeg laten voor voorkomen van foutmeldingen.
						switch ($category) {
							case $category == 'Intro':
								$Intro = 'checked';
								$BWV = '';
								$Game = '';
								break;
								
							case $category == 'BWV':
								$Intro = '';
								$BWV = 'checked';
								$Game = '';
								break;
								
							case $category == 'Game';
								$Intro = '';
								$BWV = '';
								$Game = 'checked';
						}
					?>
						
					<?php 
						if ($_GET['id'] >= '2') {
						echo '<label>Categorie</label><br />';
							echo '<p class="radiolabel">Intro
							<input type="radio" name="post_category" value="Intro"';
							echo $Intro;
							echo '/> </p>';
							
							echo '<p class="radiolabel">BWV
							<input type="radio" name="post_category" value="BWV"';
							echo $BWV;
							echo '/> </p>';	
							
							echo '<p class="radiolabel">Game
							<input type="radio" name="post_category" value="Game"';
							echo $Game;
							echo '/> </p>';
						}
					?>
                </div>
				
				<div class="col-xs-12 col-sm-4 adminblok">
					<?php 
						if ($publish == "Online") {
							$statusOn = 'checked';
							$statusOff = '';
						}
						if ($publish == "Offline") {
							$statusOn = '';
							$statusOff = 'checked';
						}
						if ($publish == "") {
							$statusOn = '';
							$statusOff = '';
						}
					
						if ($_GET['id'] >= '2') {
						echo '<label>Status</label><br />';
						
							echo '<p class="radiolabel">Online
							<input type="radio" name="post_publish" value="Online"';
							echo $statusOn;
							echo '/> </p>';
							
							echo '<p class="radiolabel">Offline
							<input type="radio" name="post_publish" value="Offline"';
							echo $statusOff;
							echo '/></p>';
						}
					?>
				</div>
            </div> <!-- Container -->

			<?php 
				echo '<div class="container">';
						if ($_GET['id'] >= '2') {
							echo '<div class="col-xs-12 col-sm-12 adminblok">';
								echo '<label>Tekst</label>';
								echo '<textarea name="post_content" id="editor1" required>';
								echo $content;
								echo '</textarea>';
							echo '</div>';
						}
						else {
							echo '<div class="col-xs-12 adminblok">';
								echo '<label>Persoonlijke tekst</label>';
								echo '<textarea name="post_content" id="editor1" required>';
								echo $content;
								echo '</textarea>';
							echo '</div>';
							
							echo '<div class="col-xs-12 col-sm-12 adminblok">';
								echo '<label>Quote</label>';
								echo '<textarea name="post_category" id="editor2" required>';
								echo $category;
								echo '</textarea>';
							echo '</div>';
						}
					?>
					
                <div class="col-xs-12 col-sm-6 adminblok">
					<button type="submit" class="btn btn-success" />
						<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> <p class="buttontekst">Opslaan</p></span>
					</button>
                </div>

                <div class="col-xs-12 col-sm-6 adminblok">
					<a href="projectaanpassen.php?sort=ID">
						<button type="button" class="btn btn-default" />
							<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> <p class="buttontekst">Terug</p></span>
						</button>
					</a>
                </div>
            </div> <!-- Container -->

            <script>
                //Vervang de id="editor1" met de CKEeditor
                CKEDITOR.replace( 'editor1' );
				
				CKEDITOR.replace( 'editor2' );
            </script>
        </form>
    </div> <!-- Container -->
</div> <!-- Container-fluid -->
</body>
</html>