<?php
    require_once ('adminheader.php');
    require_once ('logincheck.php');
    require_once ('connect.php');
?>
<div class="container-fluid">
    <div class="container">
		<div class="col-xs-6 adminblok">
			<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="Input">
				<?php $sorteer = $_GET['sort']; ?>
				<option value="">Sorteer op: <?php echo $sorteer; ?></option>
				<option value="imgdelete.php?delete=0&sort=ID">Afbeelding ID</option>
				<option value="imgdelete.php?delete=0&sort=Naam">Afbeelding naam</option>
				<option value="imgdelete.php?delete=0&sort=Project">Project</option>
				<option value="imgdelete.php?delete=0&sort=Categorie">Categorie</option>
			</select>
		</div>
	
		<div class="col-xs-6 adminblok">
			<a href="adminpagina.php">
				<button type="button" class="btn btn-default" />
					<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> <p class="buttontekst">Terug</p></span>
				</button>
			</a>
		</div>
		
	    <div class="col-xs-12 text-center">
            <!-- Haal ID op uit de URL -->
            <?php $id = $_GET ['delete'];

            // SQL om een project te verwijderen
            $sql = "DELETE FROM images WHERE ID = $id";

            //Tekst weergeven om te laten zien of het gelukt is
            if ($conn->query($sql) === TRUE && $id == 0) {
                echo "<div class='col-xs-12'><p>Kies een afbeelding om te verwijderen</p></div>";
            } else {
                echo "<div class='col-xs-12'><p class='succesvol'>Afbeelding is verwijderd.</p></div>";
            }
            ?>
        </div>
		
		</div> <!-- Container -->
		
		<div class="container">
			<div class="col-xs-12">
                <form method='delete'>
                    <?php
					//Haal de juiste sorteer bij op.
					if ($_GET['sort'] == 'ID') {
						$sort = 'images.ID';
					}
					elseif ($_GET['sort'] == 'Project') {
						$sort = 'post_title';
					}	
					elseif ($_GET['sort'] == 'Naam') {
						$sort = 'img_name';
					}	

					elseif ($_GET['sort'] == 'Categorie') {
						$sort = 'post_category';
					}		

				//Haal de juiste sorteer bij op.				
				$sort = $_GET['sort'];
				switch ($sort) {
					//Als het ID is verander de variabel sort in images.ID. Variabel is voor in te voeren bij SQL
					case "ID":
						$sort = 'images.ID';
						break;
					//Als het Project is verander de variabel sort in post_title. Variabel is voor in te voeren bij SQL
					case "Project":
						$sort = "post_title";
						break;
					//Als het Naam is verander de variabel sort in img_name. Variabel is voor in te voeren bij SQL
					case "Naam":
						$sort = "img_name";
						break;
					//Als het Categorie is verander de variabel sort in post_category. Variabel is voor in te voeren bij SQL
					case "Categorie":
						$sort = "post_category";
						break;
						
					default:
					$sort = "ID";
				}					

                    $sql = "SELECT posts.ID, images.ID, images.img_name, images.img_path, images.img_projectnaam, posts.post_title, posts.post_category FROM images INNER JOIN posts ON images.img_projectnaam = posts.ID ORDER BY $sort";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $ID = $row["ID"];
                            $title = $row["img_name"];
                            $path = $row["img_path"];
							$projectnaam = $row["post_title"];
							$category = $row["post_category"];
							$sort = $_GET['sort'];

							echo "<div class='col-xs-6 col-sm-4 col-md-3 imgvak'>";
								echo "<p class='tekst'>$title</p> <p class='tekst'>$projectnaam</p> <p class='tekst'>$category</p>";
								echo "<img src='$path' class='thumbnail'>";
								echo "<div class='imgbutton'>";
									echo "<input type='radio' name='delete' value='$ID' required />
										   <input type='radio' name='sort' value='ID' checked='checked' class='th0' required />";
									echo "<button type='submit' class='btn btn-danger' /> <span class='glyphicon glyphicon-trash' aria-hidden='true'> <p class='buttontekst'>Verwijderen</p></span></button>";
								echo "</div>";
							echo "</div>";
                        }
                    }

                echo "</form>";

                    ?>
        </div>
    </div> <!-- Container -->
</div> <!-- Container-fluid -->