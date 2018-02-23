<?php 
require "../functionsforindex.php";
?>

<div style="text-align:center;">
    

    <?php
        #FUNKTION SOM KAN ÄNDRA PÅ TEXT, STORLEK OCH FÄRG.
        function make_heading($text,$tagg,$color){
            echo "<$tagg style='color: $color;'>$text</$tagg>";
        }

        #KALLAR PÅ FUNKTIONEN OVANFÖR
        make_heading("Text som kan ändras","h4", "red");

        #KALLAR PÅ BACK TO INDEX FUNKTIONEN.
        back();
    ?>



</div>
<hr>
























<div style='width:50%; margin:auto;'>
<?php highlight_file('three.php');?>
</div>







