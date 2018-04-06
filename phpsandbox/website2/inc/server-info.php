

<?php

    # $_SERVER SUPERGLOBAL

    // Create Server array
    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
    ];

    //echo $server['Server Software'] . '<br><br>';
    //print_r2($server);

    // Create Client Array
    $client = [
        'Client System info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' =>  $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT']
    ];

    // print_r2($client);
?>
