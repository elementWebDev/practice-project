<?php include 'inc/header.php' ?>
<?php
/*
    # substr()
    # Returns a portion of a string

    $output = substr('Hello', 1, 3); // (value, start, end)
    $output = substr('Hello', -2); // in reverse
    echo $output;

    # strlen()
    # Returns the length of a string

    $output3 = strlen('Hello World');
    echo $output3;

    # strpos()
    # Finds the position of the first occurence of a sub string

    $output = strpos('Hello World', 'o');
    echo $output;

    # strrpos()
    # Finds the position of the last occurence of a sub string

    $output = strrpos('Hello World', 'o');
    echo $output;

    # trim()
    # Strips whitespace
    $text = 'Hello World       ';
    //var_dump($text);

    $trimmed = trim($text);
    var_dump($trimmed);

    # strtoupper()
    # Makes everything uppercase

    $output = strtoupper('Hello World');
    echo $output;

    # strtolower()
    # Makes everything lowercase

    $output = strtolower('Hello World');
    echo $output;

    # ucwords()
    # Capitalize every word

    $output = ucwords('hello world');
    echo $output;

    # str_replace()
    # Replace all occurences of a search string with a replacement

    $text = 'Hello World';
    $output = str_replace('World', 'Everyone', $text);
    echo $output;
*/
    # is_string()
    # Check if string

    $val = 'Hello';
    $output = is_string($val);

    echo $output;

    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', '-');

    foreach($values as $value){
        if(is_string($value)){
            echo "{$value} is a string<br>";
        }
    }
?>













<?php include "inc/footer.php"; ?>
