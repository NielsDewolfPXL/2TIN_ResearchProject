<?php
    $host = 'database-1.c1nxcud0u6wb.us-east-1.rds.amazonaws.com';
    $user = 'pxl';
    $pass = 'Pxlpxlpxl';
    $db_name = 'pxl';
    
    $conn = new mysqli($host, $user, $pass, $db_name);
    if($conn->connect_error){
        die('Connection error: '. $conn->connect_error);
    }
