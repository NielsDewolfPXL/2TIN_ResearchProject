<?php
    require('vendor/autoload.php');
    // Define mysql server settings
    //$serverName = "database-1.c1nxcud0u6wb.us-east-1.rds.amazonaws.com";
    //$username = "groep7";
    //$password = "R,Oalx:ZQ.0P";
    //$dbName = "database-1";
    $RDS_HOSTNAME = "database-1.c1nxcud0u6wb.us-east-1.rds.amazonaws.com";
    $RDS_PORT = "3306";
    $RDS_DB_NAME = "dbgroup7";
    $RDS_USERNAME = "groep7";
    $RDS_PASSWORD = "R,Oalx:ZQ.0P";

    // Create a new mysqli connection. Remember to enable this in php.ini !!
    //$conn = new mysqli($serverName, $username, $password, $dbName);
    $conn = new mysqli($RDS_HOSTNAME, $RDS_PORT, $RDS_DB_NAME, $RDS_USERNAME, $RDS_PASSWORD);
