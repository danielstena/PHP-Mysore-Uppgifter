<?php 
require "../functionsforindex.php";
?>

<div style="text-align:center;">
    

    <?php
        #FUNKTION SOM KAN ÄNDRA TAGGAR.
        function make_tagg($text,$tagg){
            echo "<$tagg>$text</$tagg>";
        }

        #KALLAR PÅ FUNKTIONEN OVANFÖR
        make_tagg("Text som kan ändras","h4");

        #KALLAR PÅ BACK TO INDEX FUNKTIONEN.
        back();
    ?>



</div>
<hr>
























<div style='width:50%; margin:auto;'>
<?php highlight_file('three.php');?>
</div>







