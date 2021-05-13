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

    $dbhost = $_SERVER['database-1.c1nxcud0u6wb.us-east-1.rds.amazonaws.com'];
    $dbport = $_SERVER['3306'];
    $dbname = $_SERVER['dbgroup7'];
    $charset = 'utf8' ;

    $dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
    $username = $_SERVER['groep7'];
    $password = $_SERVER['R,Oalx:ZQ.0P'];

    $pdo = new PDO($dsn, $username, $password);
