<?php
    ## LOOPS - Execute code set number of times ##

    /*
        For
        While
        Do..While
        Foreach
    */

    # For
    # @params - init, condition, increment

    /*
    for($i = 0; $i <= 10; $i++){
        echo 'Number ' .$i;    // adding a string to variable
        echo '<br>';
    }
    */

    ## While
    # @params - condition
    /*
    $i = 0;
    while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
    }
    */

    ## Do...While
    # @params - condition
    #
    /*
    $i = 0;

    do{  # do will always run once
        echo $i;
        echo '<br>';
        $i++;
    }

    while($i < 10);
    */

    ## Foreach Loop - For arrays
    #
    /*
    $people = ['Ivan', 'Jackie', 'Brad'];

    // Indexed array
    foreach($people as $person){
        echo $person;
        echo '<br>';
    }
    */

    // Assocciative array
    $people = ['Ivan' => 'dev@element.com', 'Jackie' => 'jackie@gmail.com', 'Brad' => 'brad@gmail.com'];
    foreach($people as $person => $email){  // these 3 vars can be named anything
        echo $person.': '.$email;
        echo '<br>';
    }

?>
