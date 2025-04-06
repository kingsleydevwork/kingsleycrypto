<?php
    session_start();
    $sitename = "fluxionhub";
    $domain = 'https://fluxionhub.com/';
    $database = "qsgigqid_crypto";
    $user = "qsgigqid_kingsley";
    $host = "localhost";
    $password = "07089611318Kk";
    $siteemail = 'support@fluxionhub.com';

    $connection = mysqli_connect($host,$user,$password,$database);

    if (!$connection){

        die('connection to database failed');

    }



?>