<?php
require_once('header.php');
require_once('includes/class-query.php');

if (!empty ($_GET )) {
    if (!empty ($_GET['p'])) {
        $post = $_GET['p'];
    }
}

//Laad een project op de pagina
if (!empty ($post)) {
    $posts_array = $query->post($post);
}
?>

<html>
<body>
    <div class="post">
       <?php
	   //Connectie maken
		require_once('admin/connect.php');

            $sql ="SELECT vakken.vaknaam, vakken.vakid, posts.post_category FROM vakken INNER JOIN posts ON vakken.vaknaam = posts.post_category WHERE vakken.vaknaam = posts.post_category";
            $result = $conn->query($sql);

            foreach ( $posts_array as $post ) : ?>
           <div class="container-fluid">
               <h2><?php echo $post->post_title; ?></h2>
               <div class="col-xs-12 col-sm-6">
                   <p><?php echo $post->post_content; ?></p>
               </div>
            <?php endforeach; ?>

               <div class="col-xs-12 col-sm-6 imagediv">
                    <?php
                    //Pak het juiste id
                    $id = $_GET ['p'];

                    $sql = "SELECT img_projectnaam, img_path FROM images WHERE img_projectnaam = $id ;";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0 ) {
                        // De data uitlaten rollen
                        while ($row = $result->fetch_assoc()) {
                            echo "<a target='blank' href=test/"; echo $row["img_path"]; echo ">";
                                echo "<img src='test/"; echo $row["img_path"]; echo "'class='image' />";
                            echo "</a>";
                        }
                    }
                    ?>
               </div> <!-- Div -->
           </div> <!-- Container-Fluid -->
    </div> <!-- post -->
	
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
