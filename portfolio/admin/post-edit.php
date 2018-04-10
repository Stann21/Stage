<?php
    require_once ('adminheader.php');
    require_once ('logincheck.php');
?>


<!-- Data invoeren script -->
<?php
if(!empty($_POST)){
    require_once ('../includes/class-insert.php');;
    if ($insert->post($_POST)){
        echo'<div class="container"><div class="col-xs-12"><p class="succesvol">Data is succesvol ingevoerd</p></div></div>';
    }
}
?>
<!-- HTML voor data invoeren -->
<html>
<body>
<div class="container-fluid">
    <form method="post">
        <div class="container">
            <script src="ckeditor/ckeditor.js"></script>
            <div class="col-xs-12 col-sm-6 adminblok">
                <label>Titel project</label>
                <input type="text" name="post_title" class="Input" required/>
            </div>

            <div class="col-xs-12 col-sm-6 adminblok">
                <label>Cover Afbeelding</label>
                <input type="file" name="post_image" required />
            </div>
        </div> <!-- Container -->

        <div class="container">
            <div class="col-xs-12 col-sm-4 adminblok">
                <label>Grid</label><br />
                <p class="radiolabel">Vak grootte 1, 250px
                    <input type="radio" name="post_grid" value="1" required/>
                </p>

                <p class="radiolabel">Vak grootte 2, 325px
                    <input type="radio" name="post_grid" value="2" />
                </p>

                <p class="radiolabel">Vak grootte 3, 400px
                    <input type="radio" name="post_grid" value="3" />
                </p>

                <p class="radiolabel">Vak grootte 4, 475px
                    <input type="radio" name="post_grid" value="4" />
                </p>
            </div>

            <div class="col-xs-12 col-sm-4 adminblok">
                <label>Categorie</label><br />
                <p class="radiolabel">Intro
                    <input type="radio" name="post_category" value="Intro" required>
                </p>

                <p class="radiolabel">BWV
                    <input type="radio" name="post_category" value="BWV">
                </p>
				
				<p class="radiolabel">Game
                    <input type="radio" name="post_category" value="Game">
                </p>
            </div>
			
			<div class="col-xs-12 col-sm-4 adminblok">
                <label>Status</label><br />
                <p class="radiolabel">Online
                    <input type="radio" name="post_publish" value="Online" required>
                </p>

                <p class="radiolabel">Offline
                    <input type="radio" name="post_publish" value="Offline">
                </p>
            </div>
			
        </div> <!-- Container -->

        <div class="container">
            <div class="col-xs-12 col-sm-12 adminblok">
                <label>Tekst</label>
                <textarea name="post_content" id="editor1" required><p>Wat heb ik gedaan?</p><p>Wat heb ik geleerd?</p><p>Hoe maakt dit mij een betere media designer?</p></textarea>
            </div>

            <div class="col-xs-12 col-sm-6 adminblok">
                <button type="submit" class="btn btn-success" />
					<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"> <p class="buttontekst">Opslaan</p></span>
				</button>
            </div>
			

            <div class="col-xs-12 col-sm-6 adminblok">
				<a href="adminpagina.php">
					<button type="button" class="btn btn-default" />
						<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> <p class="buttontekst">Terug</p></span>
					</button>
				</a>
            </div>
        </div> <!-- Container -->

        <script>
            //Vervang de id="editor1" met de CKEeditor
            CKEDITOR.replace( 'editor1' );
        </script>
    </form>
</div>
</body>
</html>