<?php

    $ip = $_SESSION['admin'];
    $sql = mysqli_query($connection, "SELECT * FROM `admin` WHERE `id` = $ip");

    if (isset($_SESSION['admin'])){


        if (mysqli_num_rows($sql) > 0){

            while($data = mysqli_fetch_assoc($sql)){
    
    
                $username =  $data['username'];
    
    
    
    
            }
    
    
        }else{
    
            header("location:../index.php");
    
    
        }

    }else{

        header("location:../index.php");


    }



?>