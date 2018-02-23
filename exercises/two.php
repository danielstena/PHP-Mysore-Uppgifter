<?php 
require "../functionsforindex.php";
?>

<div style="text-align:center;">

    <?php
        #FUNKTION SOM ÄNDRAR HEADING PÅ TEXTEN
        function make_heading($text,$heading){
            echo "<h$heading>$text</h$heading>";
        }
        
        make_heading("Funktion som ändrar heading på texten",2);
        back();
    ?>

</div>
<hr>






















<div style='width:50%; margin:auto;'>
<?php highlight_file('two.php');?>
</div>





