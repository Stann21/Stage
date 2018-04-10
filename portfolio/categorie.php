<?php
require_once('header.php');
require_once('includes/class-query.php');
require_once('admin/connect.php');

if (!empty ($_GET )) {
    if (!empty ($_GET['p'])) {
        $post = $_GET['p'];
    }
}
// Laad meerdere projecten op de pagina's
if (empty ($post)) {
    $posts_array = $query->all_posts();
} 
?>

<html>
<body>
    <div class="post">
       <?php
       //Pak de ID van de URL
       $vakid = $_GET ['id'];

       $sql = "SELECT vakid, vaknaam FROM vakken WHERE vakid = $vakid;";
       $result = $conn->query($sql);

       if ($result->num_rows > 0) {
           // De data uitlaten rollen
           while ($row = $result->fetch_assoc()) {
               // Laat de titel van de pagina zien
               echo "<div class='titelvak'>";
               echo "<h1 class='titel'>"; echo $row["vaknaam"]; echo "</h1>";
               echo "</div>";
               echo "<hr class='lijn'>";
           }
       }
        ?>

        <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
       <?php
            $sql ="SELECT vakken.vaknaam, vakken.vakid, posts.post_category, posts.post_image, posts.post_publish FROM vakken INNER JOIN posts ON vakken.vaknaam = posts.post_category WHERE vakken.vaknaam = posts.post_category";
            $result = $conn->query($sql);

            foreach ( $posts_array as $post ) : ?>

 			<?php $publish = $post->post_publish; 
		
			if ($publish =="Online") {
			echo '<script src="tiles/masonry.pkgd.js"></script>';
			$grid = $post->post_grid;
			echo '<div class="grid-item grid-item--width'; echo $grid; echo'">';
				$image_path = $post->post_image;
				echo '<a href="project.php?p='; echo $post->ID; echo'">';
                    echo '<ul class="img-list">';
                        echo '<li>';
                            echo '<img src="images/'; echo $image_path; echo'" height="100px" width="100px"/>';
                            $titel = $post->post_title;
                            echo '<span class="text-content"><span>';echo $titel; echo '</span></span>';
                        echo '</li>';
                    echo '</ul>';
                echo '</a>';
            echo '</div>';
			}
			?>

       <?php endforeach; ?>
       </div> <!-- Div Grid -->
	</div> <!-- Post -->
	    		
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