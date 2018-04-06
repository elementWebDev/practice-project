<?php
    # CONDITIONALS

    /*
        ==
        ===
        <
        >
        <=
        >=
        !=
        !==
    */

    /*
        $num = 6; // change this value

        if($num == 5){
            echo '5 passed';
        } elseif ($num == 6) {
            echo '6 passed';
        } else {
            echo 'did not pass';
        }
    */

    # NESTING IF

    $num = 9;
    /*
        if($num > 4){
            if($num < 10){
                echo "$num passed"; // use double quotes
                echo "<br>";        // for showing examples
            } else {
                echo 'whatever';
            }
        }
    */

    /*
        # LOGICAL OPERATORS

        and &&
        or  ||
        xor (one has to be true, but not both)
    */

    /*
        if($num > 4 || $num < 10){
            echo "$num passed";
            echo "<br>";            // for showing examples
        }
    */

    # SWITCH

    $favColor = 'red';

    switch($favColor){
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is something else';
    }
?>
