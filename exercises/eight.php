<?php
$test = array(
    array("Kalle", 8, 22),
    array("Johan",9,13),
    array("peter", 6, 17)
);

function array_in_array($array){
    foreach ($array as $number ){
        echo 
        "
            <table border = '1' style='width:80% text-align:center;'>
            <tr>
                <th>Name</th>
                <th colspan='1'>går upp</th>
                <th colspan='1'>lägger sig</th>
            </tr>
            <tr>
            <td>$number[0]</td>
            <td>$number[1]</td> 
            <td>$number[2]</td>
            </tr>
             </table>
        ";
    }
}

echo "<div>";
array_in_array($test);
echo "</div>";