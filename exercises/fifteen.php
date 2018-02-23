Skriv en funktion som tar en sträng som motsvarar en veckodag som parameter och returnerar en siffra. Om strängen är "måndag" ska funktionen returnera 1, "tisdag" ska bli 2 och "söndag" ska bli 7.

Funktionen ska fungera oavsett om veckodagen står med små eller stora bokstäver.

<?php

$weekdays = array("monday" => 1,
            "tuesday" =>2,
            "wednesday" => 3,
            "thursday" => 4, 
            "friday" => 5, 
            "saturday" => 6, 
            "sunday" => 7);

function weekday($weekdays, $givenday){
   $givendayinsmall = strtolower($givenday);
    foreach ($weekdays as $a => $key){
 

        if ($givendayinsmall == $a){
            echo "<h1>".$key."</h1>";
            
        }
    }
}
echo "<br>";
weekday($weekdays,"FRIDAY");
?>














<hr>
<br>
<div style='width:50%; margin:auto;'>
<?php highlight_file('fifteen.php');?>
</div>














