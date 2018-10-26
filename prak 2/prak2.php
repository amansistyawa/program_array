<?php

	echo "1. volume bola <br>";
$phi = 3.14;
$d = 12;
$r = $d/2 ;

function volbola(){
	
	$GLOBALS['v']=((3/4)*$GLOBALS['phi']*$GLOBALS['r']*$GLOBALS['r']*$GLOBALS['r']);





}

volbola();
echo "Diameter bola = $d  <br>";
printf ("volume bola = %.2f", $v );




?>