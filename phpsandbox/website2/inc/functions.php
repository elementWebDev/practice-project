<?php
    #############
    # DEBUGGING #
    #############

    // readable format
    function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
    }

    // page refresh
    $page = $_SERVER['PHP_SELF'];
    $sec = "100";
?>
