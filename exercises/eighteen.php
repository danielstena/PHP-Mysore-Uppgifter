<?php

$tal = array();

function totalForLoop($tal){

    for ($i = 1; $i <= 100; $i++){
        
        array_push($tal,$i);
           
        }
        return $tal;
    }


#TOTAL HÅLLER PÅ EN ARRAY MED 100
$total = totalForLoop($tal);

print_r ($total);

$med;
foreach ($total as $sum){

}


