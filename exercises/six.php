<?php 
require "../functionsforindex.php";
?>

<div style="text-align:center;">
    
    <?php
        
        #FUNKTION SOM SLUMPAR NUMMER MELLAN 1-10
        function randomnumbers(){
            $randomnumbers = rand(1,10);
            echo $randomnumbers;
        }

        randomnumbers();

        echo "<br>";

        #KALLAR PÅ BACK TO INDEX FUNKTIONEN.
        back();

    ?>



</div>
<hr>
























<div style='width:50%; margin:auto;'>
<?php highlight_file('six.php');?>
</div>








