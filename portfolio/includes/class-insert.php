<?php
require_once('class-db.php');

    if(!class_exists("INSERT")){
        class INSERT {
            public function post($postdata){
                global $db;

                //Data wordt geplaatst in database
                $query ="
                        INSERT INTO posts(post_title, post_content, post_category, post_image, post_grid, post_publish)
                    VALUES('$postdata[post_title]', '$postdata[post_content]', '$postdata[post_category]', '$postdata[post_image]', '$postdata[post_grid]', '$postdata[post_publish]')
                    ";

                return $db->insert($query);
            }

            public function update($postdata){
                global $db;
					if ($_GET['id'] >= '2') {
					$title = $_POST['post_title'];
					$content = $_POST['post_content'];
					$category = $_POST['post_category'];
					$grid = $_POST['post_grid'];
					$publish = $_POST['post_publish'];

					//Pak het juiste id
					$id = $_GET ['id'];

					//Data wordt geplaatst in database
					$query ="
							UPDATE posts SET post_title='$title', post_content='$content', post_category='$category', post_grid='$grid', post_publish='$publish' WHERE id=$id;
						";

					return $db->insert($query);
				}
				else {
					$content = $_POST['post_content'];
					$category = $_POST['post_category'];

					//Pak het juiste id
					$id = $_GET ['id'];

					//Data wordt geplaatst in database
					$query ="
							UPDATE posts SET post_content='$content', post_category='$category' WHERE id=$id;
						";

					return $db->insert($query);
				}
            }
			
			public function updateimage($postdata){
                global $db;
                $images = $_POST['post_image'];

                //Pak het juiste id
                $id = $_GET ['id'];

                //Data wordt geplaatst in database
                $query ="
                        UPDATE posts SET post_image='$images' WHERE id=$id;
                    ";

                return $db->insert($query);
            }

        }
    }

    $insert = new INSERT;
?>