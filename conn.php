<?php
    // // Database connection settings
    // $serverName = "DESKTOP-I92KCB1\SQLEXPRESS";
    // $connectionOptions = array(
    //     "Database" => "Speed_Geer",
    //     "Uid" => "your_username",
    //     "PWD" => "your_password"
    // );

    // Database connection settings
    // $serverName = "DESKTOP-I92KCB1\SQLEXPRESS";
    // $connectionOptions = array( "Database" => "Speed_Geer", "CharacterSet" => "UTF-8");


    $serverName = "DESKTOP-KI9TAFE";
    $connectionOptions = array( "Database" => "Speed_Geer", 
                                "CharacterSet" => "UTF-8",
                                "Uid" => "jayash",
                                "PWD" => "123456"
                                );

    // Establishing the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn === false) {
        die(print_r(sqlsrv_errors(), true));
    }
?>    