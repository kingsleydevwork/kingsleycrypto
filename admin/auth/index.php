<?php

use Dom\Mysql;

    include("../../server/connection.php");
    function getUserInfo() {
        // Get user IP address
        $ip = $_SERVER['REMOTE_ADDR'];
    
        // Fetch location data using ip-api.com
        $apiUrl = "http://ip-api.com/json/{$ip}";
        $response = @file_get_contents($apiUrl); // Suppress errors with @
        $locationData = json_decode($response, true);
    
        // Get current date and time
        $dateTime = date("Y-m-d H:i:s");
    
        // Return user data with default "Unknown" for missing values
        return [
            'ip'        => $ip,
            'country'   => $locationData['country'] ?? 'Unknown',
            'region'    => $locationData['regionName'] ?? 'Unknown',
            'city'      => $locationData['city'] ?? 'Unknown',
            'latitude'  => $locationData['lat'] ?? 'Unknown',
            'longitude' => $locationData['lon'] ?? 'Unknown',
            'timezone'  => $locationData['timezone'] ?? 'Unknown',
            'date_time' => $dateTime
        ];
    }
    
    // Example usage
    $userInfo = getUserInfo();
    $ip =  $userInfo['ip'];
    $date = $userInfo['date_time'];
    $location = $userInfo['country'] ."," . $userInfo['city'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome (Latest Version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Other Stylesheets -->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <meta name="robots" content="noindex, follow">
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST">
                    <!-- Updated: Font Awesome Icon -->
                    <span class="login100-form-logo">
                        <i class="fa-solid fa-user-circle"></i> 
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Welcome
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Enter email">
                        <input class="input100" type="text" name="email" placeholder="email">
                        <span class="focus-input100">
                            <i class="fa-solid fa-user"></i> 
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" name="login">
                            Login
                        </button>
                    </div>

                    <?php 

                            if(isset($_POST['login'])) {

                                $email = $_POST['email'];
                                $password = $_POST['password'];

                                $sql = mysqli_query($connection,"SELECT * FROM `admin` WHERE `email` = '$email' AND `pass` = '$password'");

                                if (mysqli_num_rows($sql) > 0){


                                        $fetch = mysqli_fetch_assoc($sql);

                                        $id = $fetch['id'];

                                        $_SESSION['admin'] = $id;
                                        $sql = mysqli_query($connection,"INSERT INTO `logins`(`ip`, `location`, `date`, `status`) VALUES ('$ip','$location','$date','successful')");

                                        header("location:../dashboard");

                                    



                                }else{

                                    $sql = mysqli_query($connection,"INSERT INTO `logins`(`ip`, `location`, `date`, `status`) VALUES ('$ip','$location','$date','failed')");

                                    echo "<script> alert('INCORRECT ADMIN DETAILS') </script> ";

                                }





                            }

                    ?>

                </form>
            </div>
        </div>,
    </div>

    <div id="dropDownSelect1"></div>

    <!-- Scripts -->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-23581568-13');
    </script>

</body>

</html>
