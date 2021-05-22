<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    //$serverName = "database-1.c1nxcud0u6wb.us-east-1.rds.amazonaws.com";
    //$username = "groep7";
    //$password = "R,Oalx:ZQ.0P";
    //$dbName = "database-1";
    // Create a new mysqli connection. Remember to enable this in php.ini !!
    //$conn = new mysqli($serverName, $username, $password, $dbName);
    //$conn = new mysqli($RDS_HOSTNAME, $RDS_PORT, $RDS_DB_NAME, $RDS_USERNAME, $RDS_PASSWORD);

    $host = 'database-1.c1nxcud0u6wb.us-east-1.rds.amazonaws.com';
    $user = 'groep7';
    $pass = 'wachtzin';
    $db_name = 'dbgroup7';
    
    $conn = new mysqli($host, $user, $pass, $db_name);
    if($conn->connect_error){
        die('Connection error: '. $conn->connect_error);
    }
