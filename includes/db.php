<?php

    /*
    
        Author: Rolando Agullano
        Date: 02/01/2020
        File: db.php
    
        This file is to be included within the BlogSpot application to connect
        to the MySQL database on my localhost.
    
    */

    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "root";
    const DB_BASE = "cms";
    const DB_PORT = "3307";

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_USER, DB_BASE, DB_PORT);

    if($connection){
        //echo "<br>Database Connection Established.<br><br>";
    }

?>