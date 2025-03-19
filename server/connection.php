<?php

    $sitename = "";
    $domain = 'http://localhost/kingsleycrypto/';
    $database = "kingsleyCrypto";
    $user = "root";
    $host = "localhost";
    $password = "";

    $connection = mysqli_connect($host,$user,$password,$database);

    if (!$connection){

        die('connection to database failed');

    }



?>