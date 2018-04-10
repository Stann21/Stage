<?php
	include_once ('header.php');
	include_once ('includes/connect.inc.php');
	include_once('includes/sessions.inc.php');
	
	//Get the things from the url
	$user_id = $_GET['userid'];
?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>Afbeeldingen toevoegen</h1>
		</div>
		
		<div class="col-12 col-md-6">
			<form action="imgupload.php?userid=<?php echo $user_id ?>" method="post" enctype="multipart/form-data">
				<div class="col-12">
					<label>Kies de afbeeldingen</label>
					<input type="file" name="file_img[]" required />
				</div>

				<div class="col-12">
					<label>Het projectnummer</label>
					<input type="text" name="titelproject" required />
				</div>
				
				<div class="col-12">
					<label>Titel afbeelding</label>
					<input type="text" name="imgtitle" required />
				</div>

				<div class="col-12">
					<button type="submit" name="btn_upload" class="btn btn-success" />
						<p>Upload</p>
					</button>
				</div>
			</form>
		</div>
	
	<?php
        if(isset($_POST['btn_upload'])) {
			for($i = 0; $i < count($_FILES['file_img']['name']); $i++) {
				$filetmp = $_FILES["file_img"]["tmp_name"][$i];
				$filename = $_FILES["file_img"]["name"][$i];
				$filesize = $_FILES["file_img"]["size"][$i];
				$filepath = "images/" . $filename;
				$id = $_POST["titelproject"];
				$imgtitle = $_POST["imgtitle"];

				if ($filesize > 1000000) {
					echo "<div class='col-xs-12 col-sm-6'><p class='error'>Je bestand is te groot. De maximale grootte van een afbeelding is 976kb/1000000b. Jouw afbeelding is ";
					echo $filesize;
					echo 'b groot. </p></div>';
				}else {
					move_uploaded_file($filetmp, $filepath);

					$sql = "INSERT INTO images (img_name, img_path, img_projectid, img_title) VALUES ('$filename','$filepath', '$id', '$imgtitle')";
					$result = $conn->query($sql);
					echo "<div class='col-xs-12  col-sm-6'><p class='succesvol'>De afbeelding is geupload.</p></div>";
				}
            }
        }
    ?>

		<div class="col-12 col-md-6">
			<table>
				<tr>
					<th>ID</th>
					<th>Projectnaam</th>
					<th>Vak/onderwerp</th>
				</tr>

				<!-- Load all the projects -->
				<?php
					$sql = "SELECT pro_id, pro_title, pro_subject FROM projects";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$pro_id = $row["pro_id"];
							$pro_title = $row["pro_title"];
							$pro_subject =$row["pro_subject"];
					
							echo "<tr>";
								echo "<th> $pro_id </th>";
								echo "<th> $pro_title </th>";
								echo "<th> $pro_subject </th>";							
							echo "</tr>";
						}
					}
				?>
			</table>
		</div>
	</div> <!-- End row-->
	
	<div class="row">
		<a href="dashboard.php?userid=<?php echo $user_id; ?>"><input name="terug" type="button" value="Terug" class="btn btn-default pull-right" /></a>
	</div> <!-- End row -->
</div> <!-- End container -->

<?php
	include_once ('footer.php');
?>

