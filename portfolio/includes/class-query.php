<?php
require_once ('class-db.php');

    if(!class_exists('QUERY')){
        class QUERY{
            public function all_posts(){
                global $db;
                //Pak het juiste id
                $vakid = $_GET ['id'];

                //Ga opzoek naar alle projecten in de jusite categorie
                $query = "
                    SELECT * FROM posts INNER JOIN vakken ON posts.post_category=vakken.vaknaam WHERE vakken.vakid = $vakid;
                ";

                return $db->select($query);
            }

            public function post($postid){
                global $db;

                $query = "
                    SELECT * FROM posts WHERE ID = $postid
                ";

                return $db->select($query);
            }

            public function delete_posts(){
                global $db;

				//Haal de juiste sorteer bij op.
				if ($_GET['sort'] == 'ID') {
					$sort = 'ID';
				}
				elseif ($_GET['sort'] == 'Project') {
					$sort = 'post_title';
				}
				elseif ($_GET['sort'] == 'Categorie') {
					$sort = 'post_category';
				}

                //Ga opzoek naar alle projecten in de jusite categorie
                $query = "
                    SELECT * FROM posts ORDER BY $sort
                ";

                return $db->select($query);
            }
        }
    }

    $query = new QUERY;
?>