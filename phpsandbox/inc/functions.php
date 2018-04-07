<?php
    #############
    # DEBUGGING #
    #############

    # readable format
    function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
    }

    # use for last of set
    function echo2($val){
        echo $val.'<br>';
    }

    # page refresh
    $page = $_SERVER['PHP_SELF'];
    $sec = "10";
?>
