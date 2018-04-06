<?php
    #Array - Variable that holds multiple values
    /*
        - Indexed
        - Associative
        - Multi-Dimensional
    */

    ## Indexed arrays
    $people = array('Kevin', 'Jeremy', 'Sarah');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];    // PREFERRED way to define array
    $cars[3] = 'Chevy';    // add to array
    $cars[] = 'BMW';   // add to array without knowing index

    # Access Array
    // echo count($cars);
    // print_r($cars); // echo for arrays
    // var_dump($cars); // helpful for debugging (var_dump() shows info on data)

    // echo $people[2];
    // echo $ids[0];
    // echo $cars[3];
    // echo $cars[4];


    ## Associative arrays
    $people = array('Ivan' => 38, 'Brad' => 35, 'Jose' => 29);
    $ids = [22 => 'Ivan', 44 => 'Brad', 63 => 'Jose'];

    // adds to existing array
    $people['Jill'] = 42;

    # Access
    // echo $people['Ivan'];
    // echo $ids[22];
    // echo $people['Jill'];    // Access added
    // print_r($people);
    // echo '<br><br>';
    // var_dump($people);

    ## Multi-Dimensional arrays
    $cars = array(
        array('Honda', 20, 10),     // make, in stock, sold
        array('Toyota', 30, 20),
        array('Honda', 23, 12)
    );

    # Access
    echo $cars[1][0];
?>
