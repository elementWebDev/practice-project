``<?php
    //echo date('d');   // Day
    //echo date('m');   // Month
    //echo date('Y');   // Year
    //echo date('l');   // Day of the week

    //echo date('Y/m/d');
    //echo date('m-d-Y');

    //echo date('h');   // Hour
    //echo date('i');   // Minute
    //echo date('s');   // Seconds
    //echo date('a');   // AM or PM

    // Set Time Zone
    date_default_timezone_set('America/Los_Angeles');
    //echo date('h:i:sa');

    /*
        [UNIX] timestamp is a long integer containing the number of seconds
        between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
        ((Desired_Date - (01/01/1970)) * (24*60*60) )
    */

    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    //echo $timestamp;
    //echo date('m/d/Y', $timestamp); // Format then parameter
    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('-2 Months');
    //echo $timestamp2.'<br>';
    echo date('m/d/Y h:i:sa', $timestamp3);
    echo '<br>';
    echo date('m/d/Y h:i:a', $timestamp4);
    echo '<br>';
    echo date('m/d/Y h:i:a', $timestamp5);

?>
