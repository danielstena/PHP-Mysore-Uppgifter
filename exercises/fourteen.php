<?php

$numbers = array(3,7,14,6);

function total($tal){
    foreach($tal as $x){
        $total += $x;
        
    }
    return $total;
}
$total = total($numbers);

echo "Totalsumma: ". $total. "<br>";



function avarage($total, $nummer){
    $avarage = $total / count($nummer);
    return $avarage;
}

$avarage = avarage($total, $numbers);

echo "Medel: ". $avarage;

