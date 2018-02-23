<?php 
    require "../functionsforindex.php";
?>

<div style='text-align:center;'>

    <?php

        #FUNKTION SOM SKRIVER UT TEXT SOM P.
        function make_paragraph(){
            echo "<p>Min funktion för att skriva ut en paragraf</p>";
        }

        #KALLAR PÅ FUNKTIONEN MAKE_PARAGRAPH.
        make_paragraph();

        #KALLAR PÅ BACK TO INDEX FUNKTIONEN.
        back();
    ?>

</div>
<hr>



















<br>
<div style='width:50%; margin:auto;'>
<?php highlight_file('one.php');?>
</div>