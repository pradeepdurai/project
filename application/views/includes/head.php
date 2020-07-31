<?php
if(!empty($styles)){
    foreach($styles as $key => $style){
        if(file_exists($style)){
            echo '<link rel="stylesheet" href="'.$style.'">';?><?php 
        }
    }
}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

