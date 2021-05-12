<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    $serverName = "database-1.c1nxcud0u6wb.us-east-1.rds.amazonaws.com";
    $username = "groep7";
    $password = "R,Oalx:ZQ.0P";
    $dbName = "database-1";

    // Create a new mysqli connection. Remember to enable this in php.ini !!
    $conn = new mysqli($serverName, $username, $password, $dbName);
