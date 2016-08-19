<pre>
<?php 
	print_r($_POST);
	var_dump($_POST[post_title]);

?>
</pre>
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	require_once('../includes/class_db.php');
//	$db = new DB ;
//	print_r($db->Insert());
?>
<html>
<head>
	<title>Insert Post</title>
</head>
<body>
	<form method="post">
		<p>
			<input type="text" name="post_title"/>
		</p>
		<p>
			<textarea name="post_content"></textarea>
		</p>
		<p>
			<label for="post_category">Cat 1</label>
			<input type="checkbox" name="post_category[first]" value="cat1"/>
		</p>
		<p>
			<label for="post_category">Cat 2</label>
			<input type="checkbox" name="post_category[second]" value="cat2"/>
		</p>
		<p>
			<input type="submit" value="Submit"/>
		</p>
	</form>

	<?php
	$mysqli = new mysqli;

	$query = "INSERT INTO posts (post_title, post_content, post_category)
				VALUES ('$_POST[post_title]', '$_POST[post_content')";
	$result = $mysqli->query($query);

	return $result;
?>
</body>
</html>