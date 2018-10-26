<?php

	echo "2. Luas Selimut Tabung <br>";
$phi = 3.14;
$d = 12;
$r = $d/2 ;
$t = 7;

function LSelimuttabung(){
	
	$GLOBALS['l']=(2*$GLOBALS['phi']*$GLOBALS['r']*$GLOBALS['t']);

}

LSelimuttabung();
echo "Diameter tabung = $d  <br>";
echo "Tinggi tabung = $t  <br>";
printf ("Luas selimut tabung = %.2f", $l );




?>