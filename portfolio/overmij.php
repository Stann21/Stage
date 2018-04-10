<?php
	require_once ("header.php");
	require_once('includes/class-query.php');
?>

       <?php
	   //Connectie maken
		require_once('admin/connect.php');
	   
		// Pak het juiste ID
		$id = $_GET ['id']; 
		?>

<html>
	<body>
		<div class="container-fluid">
			<div class="col-xs-12 col-sm-6 text-center skillblok overmijblok">
				<?php  
				$sql = "SELECT post_image FROM posts WHERE id = $id ;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0 ) {
                    // De data uitlaten rollen
                    while ($row = $result->fetch_assoc()) {
                        echo "<img src='images/";
						echo $row["post_image"];
						echo " 'height='325px' width='325px' /> ";
                    }
                }
                ?>
			</div>
			
			<div class="col-xs-12 col-sm-6 skillblok overmijblok">
				<?php
                    $sql = "SELECT post_content FROM posts WHERE id = $id ;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0 ) {
                        // De data uitlaten rollen
                        while ($row = $result->fetch_assoc()) {
                            echo $row["post_content"];
                        }
                    }
                    ?>
			</div>
		</div> <!-- Container-fluid -->
		
				<!-- Skills begin -->
		<div class="container-fluid">
			<div class="col-xs-12 col-sm-6 col-md-4 overmijblok skillblok">
				<h2>Skills</h2>
				
				<div class="col-xs-12">
					<p class="overmijtekst">HTML</p>
					<div class="balk">
						<div class="basis basis6"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
				
				<div class="col-xs-12">
					<p class="overmijtekst">CSS</p>
					<div class="balk">
						<div class="basis basis6"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
				
				<div class="col-xs-12">
					<p class="overmijtekst">JavaScript</p>
					<div class="balk">
						<div class="basis basis1"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
				
				<div class="col-xs-12">
					<p class="overmijtekst">PHP</p>
					<div class="balk">
						<div class="basis basis3"></div>
						<div class="vooruitgang vooruitgang1"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
			</div> <!-- col-xs-12 col-sm-6 col-md-4 -->
			
			<div class="col-xs-12 col-sm-6 col-md-4 overmijblok skillblok">
				<h2>Programma's</h2>
				
				<div class="col-xs-12">
					<p class="overmijtekst">Photoshop</p>
					<div class="balk">
						<div class="basis basis4"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
				
				<div class="col-xs-12">
					<p class="overmijtekst">Illustrator</p>
					<div class="balk">
						<div class="basis basis4"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
				
				<div class="col-xs-12">
					<p class="overmijtekst">InDesign</p>
					<div class="balk">
						<div class="basis basis1"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
				
				<div class="col-xs-12">
					<p class="overmijtekst">Git</p>
					<div class="balk">
						<div class="vooruitgang vooruitgang1"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
			</div> <!-- col-xs-12 col-sm-6 col-md-4 -->
				
			<div class="col-xs-12 col-sm-6 col-md-4 overmijblok skillblok">
				<h2>Persoonlijk</h2>
				
				<div class="col-xs-12">
					<p class="overmijtekst">Presenteren</p>
					<div class="balk">
						<div class="basis basis2"></div>
						<div class="vooruitgang vooruitgang1"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
				
				<div class="col-xs-12">
					<p class="overmijtekst">Samenwerken</p>
					<div class="balk">
						<div class="basis basis4"></div>
						<div class="vooruitgang vooruitgang1"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
				
				<div class="col-xs-12">
					<p class="overmijtekst">Design</p>
					<div class="balk">
						<div class="basis basis2"></div>
						<div class="vooruitgang vooruitgang1"></div>
					</div> <!-- Balk -->
				</div> <!-- Col -->
			</div> <!-- col-xs-12 col-sm-6 col-md-4 -->
			
			<div class="col-xs-12 divuitleg">
				<div class="col-xs-6">
					<div class="uitleg" id="begin">Begin</div>
				</div>
				
				<div class="col-xs-6">
					<div class="uitleg" id="vooruitgang">Vooruitgang</div>
				</div>
			</div> <!-- col--xs-12  -->
		</div> <!-- Container-fluid --> <!-- Skills einde -->
		
		<!-- Begin Inspiratie & Interesses -->
		<div class="container-fluid">
			<div class="col-xs-12 col-sm-6 overmijblok">
				<h2 class="overmijtitel">Inspiratie &#38; Interesses</h2>
			</div>
			
			<div class="col-xs-12 col-sm-6 overmijblok">
				<ul id="slides">
					<?php  
					$sql = "SELECT img_projectnaam, img_path FROM images WHERE img_projectnaam = $id ;";
					$result = $conn->query($sql);

					if ($result->num_rows > 0 ) {
						// De data uitlaten rollen
						while ($row = $result->fetch_assoc()) {
								echo "<li class='slide'>";
								echo "<img class='overmijimg' src='images/";
								echo $row["img_path"];
								echo "'/> </li>";
						}
					}
					?>
				</ul>
				
				<script>
					var slides = document.querySelectorAll('#slides .slide');
					var currentSlide = 0;
					var slideInterval = setInterval(nextSlide,2000);

					function nextSlide() {
						slides[currentSlide].className = 'slide';
						currentSlide = (currentSlide+1)%slides.length;
						slides[currentSlide].className = 'slide showing';
					}
				</script>
			</div>
			
			<div class="col-xs-12 text-center overmijblok quote">
				<?php
                    //Pak het juiste id
                    $id = $_GET ['id'];

                    $sql = "SELECT post_category FROM posts WHERE id = $id ;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0 ) {
                        // De data uitlaten rollen
                        while ($row = $result->fetch_assoc()) {
                            echo $row["post_category"];
                        }
                    }
                    ?>
			</div>
		</div> <!-- Container-fluid  --> <!-- Einde inspiratie & interesses -->
		
		<div class="container-fluid">
			<div class="col-xs-12 divterug">
				<!-- zorgt ervoor dat er gekeken wordt naar de geschiedenis en een pagina terug gegaan wordt -->
				<a href="javascript:history.go(-1)">
					<button type="button" class="btn btn-default" />
						<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"><p class="buttontekst">Terug</p></span>
					</button>
				</a>
			</div> <!-- Div -->
		</div> <!-- Container-fluid -->
	</body>
</html>

<?php
    require_once ("footer.php");
?>