<?php

    require_once 'includes/Db.php';
    session_start();
    
    
    foreach ($items as $item) {
        echo $item;
    }
    //print_r($items);
?>
