<?php
    require_once ('adminheader.php');
    require_once ('logincheck.php');
    require_once ('connect.php');
?>
<div class="container-fluid">
    <div class="container">
	<!-- Begin Sorteer vak -->
		<div class="col-xs-6 adminblok">
			<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="Input">
				<?php $sorteer = $_GET['sort']; ?>
				<option value="">Sorteer op: <?php echo $sorteer; ?></option>
				<option value="delete.php?delete=0&sort=ID">ID Project</option>
				<option value="delete.php?delete=0&sort=Project">Projectnaam</option>
				<option value="delete.php?delete=0&sort=Categorie">Categorie</option>
			</select>
		</div> <!-- Einde sorteer vak -->
	
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
            $sql = "DELETE FROM posts WHERE ID = $id";

            //Tekst weergeven om te laten zien of het gelukt is
            if ($conn->query($sql) === TRUE && $id == 0) {
                echo "<div class='col-xs-12'><p>Kies een project om te verwijderen.</p></div>";
            } else {
                echo "<div class='col-xs-12'><p class='succesvol'>Project is verwijderd.</p></div>";
            }
            ?>
        </div>
	</div> <!-- Container -->
	
	<div class="container">
                <form method='delete'>
                    <?php
					//Haal de juiste sorteer bij op.				
					$sort = $_GET['sort'];
					switch ($sort) {
						//Als het ID is verander de variabel sort in ID. Variabel is voor in te voeren bij SQL
						case "ID":
							$sort = 'ID';
							break;
						//Als het Project is verander de variabel sort in post_title. Variabel is voor in te voeren bij SQL
						case "Project":
							$sort = "post_title";
							break;
						//Als het Categorie is verander de variabel sort in post_category. Variabel is voor in te voeren bij SQL
						case "Categorie":
							$sort = "post_category";
							break;
							
						default:
						$sort = "ID";
					}

                    $sql = "SELECT ID, post_title, post_category FROM posts  WHERE ID >= 2 ORDER BY $sort";
                    $result = $conn->query($sql);
					
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $ID = $row["ID"];
							$title = $row["post_title"];
							$category = $row["post_category"];
							$sort = $_GET['sort'];

                            echo "<div class='col-xs-6 col-sm-4 col-md-3 adminblok'>";
								echo "<p> $ID </p>";
								echo "<p> $title </p>";
								echo "<p> $category </p>";
								echo "<p> <input type='radio' name='delete' value='$ID' required /> <input type='radio' name='sort' value='ID' checked='checked' class='th0'  required /></p>";
                            echo "</div>";
                        }
                    }
					 echo "<div class='col-xs-12'> <button type='submit' class='btn btn-danger' /> <span class='glyphicon glyphicon-trash' aria-hidden='true'> <p class='buttontekst'>Project verwijderen</p></span></button></div>";
                    ?>
    </div> <!-- Container -->
</div> <!-- Container-fluid -->