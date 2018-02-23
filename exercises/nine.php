<?php
$test = array(
    array("Kalle", 8, 22),
    array("Johan",9,13),
    array("peter", 6, 17)
);

function array_in_array($array){
    echo "<div style='text-align:center margin:auto;'>
    
    <table border ='1' style='width:50%'>
    <tr>
    <th>Name</th>
    <th>går upp</th>
    <th>lägger sig</th>
    </tr>";

    $total1;
    $total2;
    foreach ($array as $number ){
        $total1 += $number[1];
        $total2 += $number[2];

            echo 
            "
            <tr>
            <td>$number[0]</td>
            <td>$number[1]</td> 
            <td>$number[2]</td>
            </tr>
            ";
    }

    
        echo "
        <th></th>
        <th>TOTALT</th>
        <th>TOTALT</th>
        <tr>
        <td>NAMN</td>
        <td>$total1</td>
        <td>$total2</td>
        </tr>
        </table>";


}

array_in_array($test);

