<?php
    require_once ("adminheader.php");
    require_once ('logincheck.php');
    require_once ('connect.php');
?>

<!-- Data update script -->
<?php
if(!empty($_POST)){
    require_once ('../includes/class-insert.php');
    if ($insert->updateimage($_POST)){
        echo'<div class="container"><div class="col-xs-12"><p class="succesvol">Afbeelding is succesvol geüpdatet</p></div></div>';
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
        $image = $row["post_image"];
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
                    <label>Cover afbeelding: <?php echo $image ?></label><br />
                    <input type="file" name="post_image" required/>
                </div>
				
				<div class="col-xs-12 col-sm-6 adminblok">
					<img src="../images/<?php echo $image ?>" class="coveraanpassen" />
                </div>
            </div> <!-- Container -->

            <div class="container">
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
            </script>
        </form>
    </div> <!-- Container -->
</div> <!-- Container-fluid -->
</body>
</html>