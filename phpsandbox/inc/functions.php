<?php
    #############
    # DEBUGGING #
    #############

    # page refresh
    $page = $_SERVER['PHP_SELF'];
    $sec = "100";

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

    # title
    switch ($page) {
        case '/phpsandbox/website3/index.php':
            $title= 'Contact Us';
            break;
/*        case '/phpsandbox/website3/index.php':
            $title= ' | ';
            $description = '';
            $keywords = '';
            break;
        case '/phpsandbox/website3/index.php':
            $title= ' | ';
            $description = '';
            $keywords = '';
            break;
        case '/phpsandbox/website3/index.php':
            $title= ' | ';
            $description = '';
            $keywords = '';
            break;
*/
}
?>
