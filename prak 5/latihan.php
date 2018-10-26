<?php
$pwl=["Toni"=>80,"Dewi"=>90,"Nina"=>75,"Reza"=>60];
$AI=["Toni"=>60,"Dewi"=>70,"Nina"=>95,"Reza"=>50];
$SBD=["Toni"=>75,"Dewi"=>75,"Nina"=>80,"Reza"=>70];

$rata_rata_pwl=array_sum($pwl)/count($pwl);
$rata_rata_AI=array_sum($AI)/count($AI);
$rata_rata_SBD=array_sum($SBD)/count($SBD);

printf("Rata-rata nilai pwl adlah %.2f",$rata_rata_pwl);
echo "<br>";
printf("Rata-rata nilai pwl adlah %.2f",$rata_rata_AI);
echo "<br>";
printf("Rata-rata nilai pwl adlah %.2f" ,$rata_rata_SBD);
echo "<br>";

foreach ($pwl['Toni'+$AI['Toni']+$SBD['Toni']/3 => $value) {
	echo $pwl." Nilai :".$value;
}

?>