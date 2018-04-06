<?php
    # FUNCTION - Block of code that can be repeatedly called

    /*
        Camel Case - myFunctio()
        Lower Case - my_function()
        Pascal Case - MyFunction() // usually used for classes
    */

    ## Simple Function
    // Create
    function simpleFunction(){
        echo 'Hello Dev';
        echo '<br>';
    }
    // Run
    simpleFunction();

    ## Function With Param
    function sayHello($name = ''){  // empty string provides default - no error
        echo "Hello $name<br>";
    }

    /*
    sayHello('Dev');
    sayHello('Brad');
    sayHello();
    */

    # Return Value
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    //echo addNumbers(2,3);

    ## By Reference

    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);
    echo "Value: $myNum<br>";
    addTen($myNum);
    echo "Value: $myNum<br>";
?>
