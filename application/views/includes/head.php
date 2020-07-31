<?php
if(!empty($styles)){
    foreach($styles as $key => $style){
        if(file_exists($style)){
            echo '<link rel="stylesheet" href="'.$style.'">';?><?php 
        }
    }
}

?>

