<?php
$kendaraan=[
["mobil"=>["merk"=>"toyota"=>"vios","yerar"=>"2016"]],
"sepeda",
"truk",
["motor"=>["honda","yamaha","zisuki"]],
"bus"
];
echo "<pre>";print_r($kendaraan);
echo $kendaraan[1];
echo $kendaraan[3]["monitor"];//tercetak array dan muncul warning karena hasilnya masih berbentuk array,dan array tidak bisa di echo
echo $kendaraan[3]["monitor"[1]];

?>