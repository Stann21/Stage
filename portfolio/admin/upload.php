<?php
    require_once ('adminheader.php');
    require_once ('logincheck.php');
    require_once ('connect.php');
?>

<html>
    <body>
        <div class="container-fluid">
            <div class="container">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="col-xs-12 col-sm-6 adminblok">
                        <p>
                            <label>Kies de afbeeldingen</label>
                            <input type="file" name="file_img[]" multiple required />
                        </p>

                        <p>
                            <label>Het projectnummer</label>
                            <input type="text" name="titelproject" class="Input" required />
                        </p>

                        <p>
							<button type="submit" name="btn_upload" class="btn btn-success" />
								<span class="glyphicon glyphicon-upload" aria-hidden="true">  <p class="buttontekst">Upload</p></span>
							</button>
                        </p>
                    </div>
                </form>

                <?php
                if(isset($_POST['btn_upload']))
                {
					for($i = 0; $i < count($_FILES['file_img']['name']); $i++)
					{
						$filetmp = $_FILES["file_img"]["tmp_name"][$i];
						$filename = $_FILES["file_img"]["name"][$i];
						$filesize = $_FILES["file_img"]["size"][$i];
						$filepath = "../images/" . $filename;
						$id = $_POST["titelproject"];

						if ($filesize > 1000000){
							echo "<div class='col-xs-12 col-sm-6'><p class='error'>Je bestand is te groot. De maximale grootte van een afbeelding is 976kb/1000000b. Jouw afbeelding is ";
							echo $filesize;
							echo 'b groot. </p></div>';

						}
						
						else {
							move_uploaded_file($filetmp, $filepath);

							$sql = "INSERT INTO images (img_name, img_path, img_projectnaam) VALUES ('$filename','$filepath', '$id')";
							$result = $conn->query($sql);
							echo "<div class='col-xs-12  col-sm-6'><p class='succesvol'>De afbeelding is geupload.</p></div>";
						}
                    }
                }
                ?>

                <div class="col-xs-12 col-sm-6">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Projectnaam</th>
                        </tr>

                        <!-- De projectnaam en projectID laden -->
                        <?php
                        $sql = "SELECT ID, post_title FROM posts";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $id = $row["ID"];
                                $title = $row["post_title"];

                                echo "<tr>";
                                echo "<th> $id </th>";
                                echo "<th> $title </th>";
                                echo "</tr>";
                            }
                        }
                        ?>
                    </table>
                </div>
				
                <div class="col-xs-12">
					<a href="adminpagina.php">
						<button type="button" class="btn btn-default" />
							<span class="glyphicon glyphicon-arrow-left" aria-hidden="true">  <p class="buttontekst">Terug</p></span>
						</button>
					</a>
                </div>
				
            </div> <!-- Container -->
        </div> <!-- Container-fluid -->
    </body>
</html>