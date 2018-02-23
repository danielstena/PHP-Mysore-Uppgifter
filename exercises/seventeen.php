<?php

$tal = array(1,3,5,6,3,3,9);

function totalForLoop($tal){

$p;
    foreach ($tal as $t){
        
           $p += $t;
           
        }
        return $p;
    }



$total = totalForLoop($tal);

echo $total;

