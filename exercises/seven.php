
<?php 
require "../functionsforindex.php";
?>

<div style="text-align:center;">
    
    <?php
        
        $make_list = array( 
            1,3,5,7,8
        );
        
        function make_list($tal){
            for($i = 0; $i < count($tal); $i++ ){
                echo "<ul list-style-type: none;><li>$tal[$i]</li></ul>";
            }
        }
            
        make_list($make_list);
        

        #KALLAR PÅ BACK TO INDEX FUNKTIONEN.
        back();

    ?>



</div>
<hr>
























<div style='width:50%; margin:auto;'>
<?php highlight_file('seven.php');?>
</div>








