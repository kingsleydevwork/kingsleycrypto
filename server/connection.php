<?php
    session_start();
    $sitename = "fluxionhub";
    $domain = 'http://localhost/kingsleycrypto/';
    $database = "kingsleyCrypto";
    $user = "root";
    $host = "localhost";
    $password = "";
    $siteemail = 'support@fluxionhub.com';

    $connection = mysqli_connect($host,$user,$password,$database);

    if (!$connection){

        die('connection to database failed');

    }



?>