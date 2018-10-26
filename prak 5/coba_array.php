<?php
	$kendaraan=[["mobil"=>["merk"=>"toyota","tahun"=>"2016"]],"sepeda","truk",
	["motor"=>["honda","yamaha","suzuki"]],

	];
	echo "<pre>";var_dump($kendaraan);
	echo $kendaraan[0]["mobil"]["merk"];
	echo $kendaraan[1];
	echo $kendaraan[3]["motor"][1];

?>