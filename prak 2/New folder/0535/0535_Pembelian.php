<?php

	echo "3. Pembelian <br>";
$bakso = 12000;
$soto = 9000;
$teh = 2000 ;
$jeruk = 3000;

function Pembelian1(){
	global $bakso,$soto,$teh,$jeruk, $jml;
	$jml = (2*$bakso)+($soto+$teh+$jeruk);
}

Pembelian1();
echo "Bakso = 2  <br>";
echo "Soto = 1  <br>";
echo "Teh = 1  <br>";
echo "Jeruk = 1  <br>";
printf ("Total Pembelian 1 = %.2f <br><br>", $jml );

function Pembelian2(){
	global $bakso,$soto,$teh,$jeruk, $jml;
	$jml = $bakso+(2*$soto)-$teh+$jeruk;
}

Pembelian2();
echo "Bakso = 1  <br>";
echo "Soto = 2  <br>";
echo "Teh = 0  <br>";
echo "Jeruk = 1  <br>";
printf ("Total Pembelian 2 = %.2f", $jml );




?>