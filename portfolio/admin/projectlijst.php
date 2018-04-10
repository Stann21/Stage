<?php
    require_once ("adminheader.php");
    require_once ('logincheck.php');
    require_once ('connect.php');
?>
<div class="container-fluid">
    <div class="container">
		<div class="col-xs-6 adminblok">
			<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" class="Input">
				<?php $sorteer = $_GET['sort']; ?>
				<option value="">Sorteer op: <?php echo $sorteer; ?></option>
				<option value="projectaanpassen.php?sort=ID">ID Project</option>
				<option value="projectaanpassen.php?sort=Project">Projectnaam</option>
				<option value="projectaanpassen.php?sort=Categorie">Categorie</option>
			</select>
		</div>
		
		<div class="col-xs-6 adminblok">
			<a href="adminpagina.php">
				<button type="button" class="btn btn-default" />
					<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> <p class="buttontekst">Terug</p></span>
				</button>
			</a>
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
			
			$sql = "SELECT ID, post_title, post_category, post_image, post_publish FROM posts WHERE ID >= 2 ORDER BY $sort";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					$id = $row["ID"];
					$title = $row["post_title"];
					$category = $row["post_category"];
					$image = $row["post_image"];
					$publish = $row["post_publish"];
					
					echo "<div class='col-xs-12 col-sm-6 adminblok editblok'>";
						echo "<div class='col-xs-6'>";
							echo "<p>$id </p>";
							echo "<p>$title </p>";
							echo "<p>$category </p>";
							echo "<a href='../project.php?p=$id' target='_blank'"; 
							echo "'<p>Bekijk project</p></a>";		
							echo "<p>Het project staat: "; echo $publish; "</p>";							
						echo "</div>";
						
						echo "<div class='col-xs-6'>";
							echo "<img class='thumbnail' src=../images/"; echo $image; echo">";
						echo "</div>";
					echo "</div>";
				}
			}
			?>
		</form>
    </div> <!-- Container -->
</div> <!-- Container-fluid -->