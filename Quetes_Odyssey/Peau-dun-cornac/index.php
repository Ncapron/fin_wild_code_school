<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="http://quentin.dutrevis.free.fr/style.css" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<title>Welcome - Wild Circus</title>
	</head>
 	<body>
 		<?php include'header.php' ?>
		<section>

				
				<?php  
					function tabcirque(){
						require ('tab.php');
						for ($i=0; $i < count($heure); $i++) { 
							$tab = [$heure[$i], $titre_spectacle[$i], $artiste[$i], $image_url[$i]];
							$rep = $rep.implode(',', $tab)."<br />";
						} 
					return $rep;
					}
					echo tabcirque();
				?>		

		</section>

		<?php include'footer.php' ?>

	</body>
</html>