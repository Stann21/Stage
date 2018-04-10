<?php
    if ( !class_exists ('DB') ) {
        class DB
        {
            public function __construct()
            {
				$mysqli = new mysqli('localhost', 'deb102192_stan', 'rhGtt0', 'deb102192_database');

                if($mysqli->connect_errno) {
                    printf("Connection error %s\n", $mysqli->connect_error);
                    exit();
                }
				
                $this->connection = $mysqli;
            }

            public function insert($query){
                $result = $this->connection ->query($query);
                
				return $result;
            }

            public function select($query){
                $result = $this->connection->query($query);

                //Zolang er een resultaat in zit wordt de loop gebruikt.
                //Daarna wordt hij opgeslagen in het results array.
                while ($obj = $result->fetch_object()){
                    $results[] = $obj;
                }
                return $results;
            }
        }
    }

    $db = new DB;
?>