
<?php

$url = $domain . 'users/login/';

// echo $_SESSION['user_login'] . 'fnnfnf';
if (isset($_SESSION['user_login']) && $_SESSION['user_login'] != "") {
    $id = $_SESSION['user_login'];
    $select = mysqli_query($connection, "SELECT * FROM `client` WHERE `id`='$id'");
    if (mysqli_num_rows($select)) {
        while ($row = mysqli_fetch_assoc($select)) {
            $email = $row['email'];
            $fullname = $row['firstname'] . ' ' . $row['lastname'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $password = $row['password'];
            $name = $row['name'];
            $mobile = $row['mobile'];
            $city = $row['city'];
            $address = $row['address'];
            $state = $row['state'];
            
           

            $invested = ($row['invested'] == '')?"0":$row['invested'];
            $referral = ($row['referral'] == '')?"0":$row['referral'];
            $deposit = ($row['deposit'] == '')?"0":$row['deposit'];
            $interests = ($row['interests'] == '')?"0":$row['interests'];
            
         //    $img = $row['img'];
         //    $bal = $row['bal'];
            $country = $row['country'];
            $user_link = $row['user_link'];
            $ref_link = $row['ref_link'];
         //    $occupation = $row['occupation'];
         //    $state = $row['state'];
         //    $currency_symbol = $row['currency_symbol'];
         //    $img = ($img == '') ? "$domain/client/assets/" : $domain . "uploads/profile/$img";   
        }
    } else {
        echo "<script>window.open('$url', '_self');</script>";
    }
} else {
    echo "<script>window.open('$url', '_self');</script>";;
}





function symbol($currency_symbol)
{
    if ($currency_symbol == 'USD') {
        return '$';
    } else if ($currency_symbol == 'EUR') {
        return '€';
    } else if ($currency_symbol == 'GBP') {
        return '£';
    } else if ($currency_symbol == 'JPY') {
        return '¥';
    } else {
        return 'ERROR';
    }
}


function getClientIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}







?>


