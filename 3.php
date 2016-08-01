<?php
$name = "Muhamad Zamri Abd Rahman";
$gaji = 3500.00;
$car = 545.00;
$home = 515.00;
$utilities = 1200.00;
$nett = $gaji - ($car+$home+$utilities);

echo $name. ",Your nett salary is RM". $nett;

$cukaisemasa = 36.00;
$denda = 0.02;
$sum = $cukaisemasa * $denda;

echo "You quit rent payment is RM". $sum; 

?>