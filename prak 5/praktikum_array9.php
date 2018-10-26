<?php
$temanSD = array('andi','ari','anton');
$temanSMP = array('banu','bahrum','bangkit');
$temanSMA = array('catur','citra','citata');

$inputNamaTeman = $_POST['namateman'];

if(in_array($inputNamaTeman,$temanSD)){
	echo "Dia Teman SD saya";
}else if(in_array($inputNamaTeman, $teman SMP)){
	echo "Dia Teman SMP saya";
}else if(in_array($inputNamaTema, $temanSMA)){
	echo "Dia Teman SMA saya";
}