<!-- 
	if (!class_exists('DB')) {
		class DB {
			public function __construct(){
				$mysqli = new mysqli('localhost', 'root', 'dota4life', 'CMS');
				
				if ( $mysqli -> connect_errno ) {
					printf("Connect failed %s\n", $mysqli-> connect_error);
					exit();
				}

/*				return $mysqli;
				var_dump($mysqli);
				echo "plop";*/
				$this->connection = $mysqli;
			}

			public function insert(){
				$mysqli = $this->connection;

				$query = "
							INSERT INTO posts (post_title, post_content, post_category)
							VALUES ('title', 'content', 'category')
						";
				$result = $mysqli->query($query);

				return $result;
			}
		}
/*		echo "plop";
		new DB;*/
	} -->


<?php
$mysqli = new mysqli('localhost', 'root', 'dota4life', 'CMS');
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

function insert($title, $content){
	$mysqli = new mysqli;

	$query = "INSERT INTO posts (post_title, post_content, post_category)
				VALUES ('$title', '$content')";
	$result = $mysqli->query($query);

	return $result;
}


?>