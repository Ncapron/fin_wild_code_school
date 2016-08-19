<?php 
	
function tabcirque(){
	$heure = [10, 1, 2, 3];
	$titre_spectacle = ["Ballet aérien", 1, 2, 3];
	$artiste = ["Dumbo & the renegade crowns", 1, 2, 3];
	$image_url = ["http://goo.gl/Vhe6ID", 1, 2, 3];
	
	$rep="";
	for ($i=0; $i < count($heure); $i++) { 
		$tab = [$heure[$i], $titre_spectacle[$i], $artiste[$i], $image_url[$i]];
		$rep = $rep.implode(',', $tab)."<br />";
	} 
	return $rep;
}
echo tabcirque();
?>