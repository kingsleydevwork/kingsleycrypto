
    
    <style>
        
        body {
                body {
                    margin: 0;
                    padding: 0;
                }
                
                .whatsapp-icon {
                    position: fixed;
                    left: 20px;
                    bottom: 20px;
                    background-color: #25D366; /* WhatsApp green */
                    border-radius: 50%;
                    padding: 15px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    z-index: 9999; /* Ensure it's on top */
                }
                
                .whatsapp-icon img {
                    width: 30px;
                    height: 30px;
                }
                
                .whatsapp-icon a {
                    display: block;
                    text-align: center;
                    color: white;
                    text-decoration: none;
                }

        
    </style>
    
    
    
    <div class="whatsapp-icon">
        <a href="https://wa.me/15879102053" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        </a>
    </div> 


<?php
include('../../server/connection.php');
include('../../server/config.php');
include('../../server/mailer.php');
require "../../PHPMailer-5.2-stable/PHPMailerAutoload.php";
function generateCode($length = 6)
{
    // Define the characters allowed in the code: uppercase letters and digits
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $charactersLength = strlen($characters);
    $code = '';

    // Generate a random code of the specified length
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charactersLength - 1);
        $code .= $characters[$randomIndex];
    }

    return $code;
}

$ref_link = '';
if (isset($_GET['user'])) {
    $user = $_GET['user'];
    $select = mysqli_num_rows(mysqli_query($connection, "SELECT * FROM `client` WHERE `user_link`='$user'"));

    if ($select > 0) {
        $ref_link = $user;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="jGw5RGJp3wgmIz7ynl4ZxImJQbkWZ1IxOufIjvsP">
    <title>fluxsionhub - Sign Up</title>
    <meta name="description"
        content="fluxsionhub.com - Complete HYIP Investment System . Most Advanced HYIP Investment System Script in codecanyon.

hyip, bitcoin, investment,  hyip business, hyip script, best hyip, buy hyip script, advanced hyip script, hyip software, high yield investment program, hyip manager, hyip manager script, cheap hyip script, reliable hyip, secure hyip script, php hyip script, new hyip script, hyip program">
    <meta name="keywords"
        content="hyip,bitcoin,investment,hyip business,hyip script,best hyip,buy hyip script,advanced hyip script,hyip software,high yield investment program,hyip manager,hyip manager script,cheap hyip script,reliable hyip,secure hyip script,php hyip script,new hyip script,hyip program">
    <link rel="shortcut icon" href="<?php echo $domain ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="<?php echo $domain ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="fluxsionhub - Sign Up">

    <meta itemprop="name" content="fluxsionhub - Sign Up">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain ?>users/assets/images/seo/66292e53481051713974867.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="fluxsionhub.com - Complete HYIP Investment System">
    <meta property="og:description"
        content="fluxsionhub.com - Complete HYIP Investment System . Most Advanced HYIP Investment System Script in codecanyon.">
    <meta property="og:image" content="<?php echo $domain ?>users/assets/images/seo/66292e53481051713974867.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="register/">

    <meta name="twitter:card" content="summary_large_image">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/vendor/bootstrap.min.css">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/all.min.css">
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/vendor/animate.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/vendor/slick.css">
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/vendor/dots.css">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/main.css">
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/custom.css">
    <link rel="stylesheet"
        href="<?php echo $domain ?>users/assets/templates/bit_gold/css/color9bce.css?color=CCA354&amp;secondColor=000000">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <style>
        .input-group-text {
            color: #fff;
        }
    </style>
</head>

<body>

    <?php
    if (isset($_POST['reg'])) {
        // Get form data
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $country = $_POST['country'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $email = $_POST['email'];

        $user_link = generateCode();



        // Check if password and confirm password match
        if ($password !== $cpassword) {
            echo "<script>
        
                    Model('Password Not Matched','red');
                    setTimeout(()=>{
                      window.open('','_self')
                    },2000)
        
                </script>";
        } else {

            $sql = mysqli_query($connection, "SELECT * FROM `client` WHERE `name` = '$name' ");

            if (mysqli_num_rows($sql) > 0) {


            echo "<script>
        
                        Model('Username Not Avaliable','red');
                        setTimeout(()=>{
                          window.open('','_self')
                        },2000)
        
                </script>";
            } else {



                // Hash the password for security
                $hashedPassword = md5($password);

                $dates = date('d M, Y h:i A');

                // Prepare the SQL statement
                $sql = "INSERT INTO client (firstname, lastname, country, mobile,password,name,email,hasspassword,user_link,ref_link,dates) VALUES (?, ?, ?, ?, ?,?,?,?,?,?,?)";

                // Initialize prepared statement
                $stmt = $connection->prepare($sql);

                if ($stmt) {
                    // Bind parameters to the statement
                    $stmt->bind_param("sssssssssss", $firstname, $lastname, $country, $mobile, $hashedPassword, $name, $email, $password, $user_link, $ref_link, $dates);

                    // Execute the statement
                    if ($stmt->execute()) {
                        $body = "
                        <html>
                        <body style='margin: 0; padding: 0; font-family: Roboto, sans-serif; background: #131722;'>
                        <section style='width: 100%; background-color: #f1f2f3; color: #333;'>
                        <div style='width: 100%; max-width: 600px; margin: 0 auto;'>
                        <div style='padding: 20px; background-color: #131722; text-align: center;'>
                        <h2 style='color: #fff; font-size: 24px;'>Welcome aboard, $firstname $lastname !</h2>
                        </div>
                        <div style='padding: 20px; background: #fff; border-radius: 0 0 8px 8px;'>
                        <p>Dear $firstname,</p>
                        <p>Thank you for joining $sitename , your gateway to seamless investment exchange trading. We are delighted to have you as part of our community.</p>
                        <p>Thank you for choosing to invest with us. Our team of experts is committed to helping you achieve your investment goals, and we are here to support you every step of the way.</p>
                        <p>To begin your journey with us, please make a deposit into your preferred investment plan and start enjoying daily profits with ease.</p>
                        <p>Best regards,</p>
                        <p>The $sitename  Team</p>
                        
                        </div>
                        <div style='text-align: center; color: #666; margin-top: 20px; font-size: 12px;'> 
                        &copy; 2020 $sitename  . All rights reserved. 
                        </div>
                        </div>
                        </section>
                        </body>
                        </html>";


                        $subj = "Welcome to $sitename  ! ";
                        $result = smtpmailer($email, $siteemail, $sitename, $subj, $body);

                            echo "<script>
                        
                                        Model('Registeration Successful ','green');
                                        setTimeout(()=>{
                                          window.open('../login/','_self')
                                        },2000)
                        
                                </script>";
                    } else {
                        echo "<script>
                    window.onload = ()=>{
                        Model('Error:','red');
                    };
                </script>";
                    }

                    // Close the statement
                    $stmt->close();
                } else {
                    echo "<script>
                window.onload = ()=>{
                    Model('Error','red');
                };
            </script>";
                }
            }
        }
    }
    ?>


    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="fa fa-rocket" aria-hidden="true"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->

    <div class="full-wh">
        <!-- STAR ANIMATION -->
        <div class="bg-animation">
            <div id='stars'></div>
            <div id='stars2'></div>
            <div id='stars3'></div>
            <div id='stars4'></div>
        </div><!-- / STAR ANIMATION -->
    </div>
    <div class="page-wrapper">
        <!-- header-section start  -->
        <header class="header">
            <div class="header__bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-xl p-0 align-items-center">
                        <a class="site-logo site-title" href="index.php"><img
                                src="<?php echo $domain ?>users/assets/images/logoIcon/logo.png" alt="site-logo"></a>
                        <ul class="account-menu responsive-account-menu ml-3">
                            <li class="icon"><a href="index.php"><i class="las la-user"></i></a></li>
                        </ul>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu-toggle"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto">
                                <li> <a href="../../index.php">Home</a></li>
                                <li><a href="../../about/">About</a></li>
                                <li><a href="../../contact/$argv">Contact</a></li>

                            </ul>
                            <div class="nav-right">
                                <ul class="account-menu ml-3">
                                    <li class="icon"><a href="index.php"><i class="las la-user"></i></a></li>
                                </ul>
                                <select class="select d-inline-block w-auto ml-xl-3 langSel">
                                    <option value="en" selected>English</option>
                                </select>
                            </div>
                        </div>
                    </nav>
                </div>
            </div><!-- header__bottom end -->
        </header>
        <!-- header-section end  -->

        <!-- account section start -->
        <div class="account-section bg_img"
            data-background="<?php echo $domain ?>users/assets/images/frontend/register/5fce3a4f0b6131607350863.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="account-card">
                            <div class="account-card__header bg_img overlay--one"
                                data-background="https://www.fluxsionhub.com/users/<?php echo $domain ?>users/assets/images/frontend/register/5fce3a4f5d06e1607350863.jpg">
                                <h2 class="section-title">Welcome To <span class="base--color">fluxsionhub</span></h2>
                                <p>account</p>
                            </div>
                            <div class="account-card__body">
                                <form class="mt-4" onsubmit="return submitUserForm();" method="post">
                                    <input type="hidden" name="_token" value="YVBlPfIokT3tnMMi6aPcBFKTUW9pa8cP5QB2IGTY">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="firstname" value="" placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="lastname" value="" placeholder="Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select name="country" id="country" class="form-control">
                                            <option data-mobile_code="93" value="Afghanistan" data-code="AF">Afghanistan</option>
                                            <option data-mobile_code="358" value="Aland Islands" data-code="AX">Aland Islands</option>
                                            <option data-mobile_code="355" value="Albania" data-code="AL">Albania</option>
                                            <option data-mobile_code="213" value="Algeria" data-code="DZ">Algeria</option>
                                            <option data-mobile_code="1684" value="AmericanSamoa" data-code="AS">AmericanSamoa</option>
                                            <option data-mobile_code="376" value="Andorra" data-code="AD">Andorra</option>
                                            <option data-mobile_code="244" value="Angola" data-code="AO">Angola</option>
                                            <option data-mobile_code="1264" value="Anguilla" data-code="AI">Anguilla</option>
                                            <option data-mobile_code="672" value="Antarctica" data-code="AQ">Antarctica</option>
                                            <option data-mobile_code="1268" value="Antigua and Barbuda" data-code="AG">Antigua and Barbuda</option>
                                            <option data-mobile_code="54" value="Argentina" data-code="AR">Argentina</option>
                                            <option data-mobile_code="374" value="Armenia" data-code="AM">Armenia</option>
                                            <option data-mobile_code="297" value="Aruba" data-code="AW">Aruba</option>
                                            <option data-mobile_code="61" value="Australia" data-code="AU">Australia</option>
                                            <option data-mobile_code="43" value="Austria" data-code="AT">Austria</option>
                                            <option data-mobile_code="994" value="Azerbaijan" data-code="AZ">Azerbaijan</option>
                                            <option data-mobile_code="1242" value="Bahamas" data-code="BS">Bahamas</option>
                                            <option data-mobile_code="973" value="Bahrain" data-code="BH">Bahrain</option>
                                            <option data-mobile_code="880" value="Bangladesh" data-code="BD">Bangladesh</option>
                                            <option data-mobile_code="1246" value="Barbados" data-code="BB">Barbados</option>
                                            <option data-mobile_code="375" value="Belarus" data-code="BY">Belarus</option>
                                            <option data-mobile_code="32" value="Belgium" data-code="BE">Belgium</option>
                                            <option data-mobile_code="501" value="Belize" data-code="BZ">Belize</option>
                                            <option data-mobile_code="229" value="Benin" data-code="BJ">Benin</option>
                                            <option data-mobile_code="1441" value="Bermuda" data-code="BM">Bermuda</option>
                                            <option data-mobile_code="975" value="Bhutan" data-code="BT">Bhutan</option>
                                            <option data-mobile_code="591" value="Bolivia, Plurinational State of" data-code="BO">Bolivia, Plurinational State of</option>
                                            <option data-mobile_code="387" value="Bosnia and Herzegovina" data-code="BA">Bosnia and Herzegovina</option>
                                            <option data-mobile_code="267" value="Botswana" data-code="BW">Botswana</option>
                                            <option data-mobile_code="55" value="Brazil" data-code="BR">Brazil</option>
                                            <option data-mobile_code="246" value="British Indian Ocean Territory" data-code="IO">British Indian Ocean Territory</option>
                                            <option data-mobile_code="673" value="Brunei Darussalam" data-code="BN">Brunei Darussalam</option>
                                            <option data-mobile_code="359" value="Bulgaria" data-code="BG">Bulgaria</option>
                                            <option data-mobile_code="226" value="Burkina Faso" data-code="BF">Burkina Faso</option>
                                            <option data-mobile_code="257" value="Burundi" data-code="BI">Burundi</option>
                                            <option data-mobile_code="855" value="Cambodia" data-code="KH">Cambodia</option>
                                            <option data-mobile_code="237" value="Cameroon" data-code="CM">Cameroon</option>
                                            <option data-mobile_code="1" value="Canada" data-code="CA">Canada</option>
                                            <option data-mobile_code="238" value="Cape Verde" data-code="CV">Cape Verde</option>
                                            <option data-mobile_code=" 345" value="Cayman Islands" data-code="KY">Cayman Islands</option>
                                            <option data-mobile_code="236" value="Central African Republic" data-code="CF">Central African Republic</option>
                                            <option data-mobile_code="235" value="Chad" data-code="TD">Chad</option>
                                            <option data-mobile_code="56" value="Chile" data-code="CL">Chile</option>
                                            <option data-mobile_code="86" value="China" data-code="CN">China</option>
                                            <option data-mobile_code="61" value="Christmas Island" data-code="CX">Christmas Island</option>
                                            <option data-mobile_code="61" value="Cocos (Keeling) Islands" data-code="CC">Cocos (Keeling) Islands</option>
                                            <option data-mobile_code="57" value="Colombia" data-code="CO">Colombia</option>
                                            <option data-mobile_code="269" value="Comoros" data-code="KM">Comoros</option>
                                            <option data-mobile_code="242" value="Congo" data-code="CG">Congo</option>
                                            <option data-mobile_code="243" value="Congo, The Democratic Republic of the Congo" data-code="CD">Congo, The Democratic Republic of the Congo</option>
                                            <option data-mobile_code="682" value="Cook Islands" data-code="CK">Cook Islands</option>
                                            <option data-mobile_code="506" value="Costa Rica" data-code="CR">Costa Rica</option>
                                            <option data-mobile_code="225" value="Cote d&#039;Ivoire" data-code="CI">Cote d&#039;Ivoire</option>
                                            <option data-mobile_code="385" value="Croatia" data-code="HR">Croatia</option>
                                            <option data-mobile_code="53" value="Cuba" data-code="CU">Cuba</option>
                                            <option data-mobile_code="357" value="Cyprus" data-code="CY">Cyprus</option>
                                            <option data-mobile_code="420" value="Czech Republic" data-code="CZ">Czech Republic</option>
                                            <option data-mobile_code="45" value="Denmark" data-code="DK">Denmark</option>
                                            <option data-mobile_code="253" value="Djibouti" data-code="DJ">Djibouti</option>
                                            <option data-mobile_code="1767" value="Dominica" data-code="DM">Dominica</option>
                                            <option data-mobile_code="1849" value="Dominican Republic" data-code="DO">Dominican Republic</option>
                                            <option data-mobile_code="593" value="Ecuador" data-code="EC">Ecuador</option>
                                            <option data-mobile_code="20" value="Egypt" data-code="EG">Egypt</option>
                                            <option data-mobile_code="503" value="El Salvador" data-code="SV">El Salvador</option>
                                            <option data-mobile_code="240" value="Equatorial Guinea" data-code="GQ">Equatorial Guinea</option>
                                            <option data-mobile_code="291" value="Eritrea" data-code="ER">Eritrea</option>
                                            <option data-mobile_code="372" value="Estonia" data-code="EE">Estonia</option>
                                            <option data-mobile_code="251" value="Ethiopia" data-code="ET">Ethiopia</option>
                                            <option data-mobile_code="500" value="Falkland Islands (Malvinas)" data-code="FK">Falkland Islands (Malvinas)</option>
                                            <option data-mobile_code="298" value="Faroe Islands" data-code="FO">Faroe Islands</option>
                                            <option data-mobile_code="679" value="Fiji" data-code="FJ">Fiji</option>
                                            <option data-mobile_code="358" value="Finland" data-code="FI">Finland</option>
                                            <option data-mobile_code="33" value="France" data-code="FR">France</option>
                                            <option data-mobile_code="594" value="French Guiana" data-code="GF">French Guiana</option>
                                            <option data-mobile_code="689" value="French Polynesia" data-code="PF">French Polynesia</option>
                                            <option data-mobile_code="241" value="Gabon" data-code="GA">Gabon</option>
                                            <option data-mobile_code="220" value="Gambia" data-code="GM">Gambia</option>
                                            <option data-mobile_code="995" value="Georgia" data-code="GE">Georgia</option>
                                            <option data-mobile_code="49" value="Germany" data-code="DE">Germany</option>
                                            <option data-mobile_code="233" value="Ghana" data-code="GH">Ghana</option>
                                            <option data-mobile_code="350" value="Gibraltar" data-code="GI">Gibraltar</option>
                                            <option data-mobile_code="30" value="Greece" data-code="GR">Greece</option>
                                            <option data-mobile_code="299" value="Greenland" data-code="GL">Greenland</option>
                                            <option data-mobile_code="1473" value="Grenada" data-code="GD">Grenada</option>
                                            <option data-mobile_code="590" value="Guadeloupe" data-code="GP">Guadeloupe</option>
                                            <option data-mobile_code="1671" value="Guam" data-code="GU">Guam</option>
                                            <option data-mobile_code="502" value="Guatemala" data-code="GT">Guatemala</option>
                                            <option data-mobile_code="44" value="Guernsey" data-code="GG">Guernsey</option>
                                            <option data-mobile_code="224" value="Guinea" data-code="GN">Guinea</option>
                                            <option data-mobile_code="245" value="Guinea-Bissau" data-code="GW">Guinea-Bissau</option>
                                            <option data-mobile_code="595" value="Guyana" data-code="GY">Guyana</option>
                                            <option data-mobile_code="509" value="Haiti" data-code="HT">Haiti</option>
                                            <option data-mobile_code="379" value="Holy See (Vatican City State)" data-code="VA">Holy See (Vatican City State)</option>
                                            <option data-mobile_code="504" value="Honduras" data-code="HN">Honduras</option>
                                            <option data-mobile_code="852" value="Hong Kong" data-code="HK">Hong Kong</option>
                                            <option data-mobile_code="36" value="Hungary" data-code="HU">Hungary</option>
                                            <option data-mobile_code="354" value="Iceland" data-code="IS">Iceland</option>
                                            <option data-mobile_code="91" value="India" data-code="IN">India</option>
                                            <option data-mobile_code="62" value="Indonesia" data-code="ID">Indonesia</option>
                                            <option data-mobile_code="98" value="Iran, Islamic Republic of Persian Gulf" data-code="IR">Iran, Islamic Republic of Persian Gulf</option>
                                            <option data-mobile_code="964" value="Iraq" data-code="IQ">Iraq</option>
                                            <option data-mobile_code="353" value="Ireland" data-code="IE">Ireland</option>
                                            <option data-mobile_code="44" value="Isle of Man" data-code="IM">Isle of Man</option>
                                            <option data-mobile_code="972" value="Israel" data-code="IL">Israel</option>
                                            <option data-mobile_code="39" value="Italy" data-code="IT">Italy</option>
                                            <option data-mobile_code="1876" value="Jamaica" data-code="JM">Jamaica</option>
                                            <option data-mobile_code="81" value="Japan" data-code="JP">Japan</option>
                                            <option data-mobile_code="44" value="Jersey" data-code="JE">Jersey</option>
                                            <option data-mobile_code="962" value="Jordan" data-code="JO">Jordan</option>
                                            <option data-mobile_code="77" value="Kazakhstan" data-code="KZ">Kazakhstan</option>
                                            <option data-mobile_code="254" value="Kenya" data-code="KE">Kenya</option>
                                            <option data-mobile_code="686" value="Kiribati" data-code="KI">Kiribati</option>
                                            <option data-mobile_code="850" value="Korea, Democratic People&#039;s Republic of Korea" data-code="KP">Korea, Democratic People&#039;s Republic of Korea</option>
                                            <option data-mobile_code="82" value="Korea, Republic of South Korea" data-code="KR">Korea, Republic of South Korea</option>
                                            <option data-mobile_code="965" value="Kuwait" data-code="KW">Kuwait</option>
                                            <option data-mobile_code="996" value="Kyrgyzstan" data-code="KG">Kyrgyzstan</option>
                                            <option data-mobile_code="856" value="Laos" data-code="LA">Laos</option>
                                            <option data-mobile_code="371" value="Latvia" data-code="LV">Latvia</option>
                                            <option data-mobile_code="961" value="Lebanon" data-code="LB">Lebanon</option>
                                            <option data-mobile_code="266" value="Lesotho" data-code="LS">Lesotho</option>
                                            <option data-mobile_code="231" value="Liberia" data-code="LR">Liberia</option>
                                            <option data-mobile_code="218" value="Libyan Arab Jamahiriya" data-code="LY">Libyan Arab Jamahiriya</option>
                                            <option data-mobile_code="423" value="Liechtenstein" data-code="LI">Liechtenstein</option>
                                            <option data-mobile_code="370" value="Lithuania" data-code="LT">Lithuania</option>
                                            <option data-mobile_code="352" value="Luxembourg" data-code="LU">Luxembourg</option>
                                            <option data-mobile_code="853" value="Macao" data-code="MO">Macao</option>
                                            <option data-mobile_code="389" value="Macedonia" data-code="MK">Macedonia</option>
                                            <option data-mobile_code="261" value="Madagascar" data-code="MG">Madagascar</option>
                                            <option data-mobile_code="265" value="Malawi" data-code="MW">Malawi</option>
                                            <option data-mobile_code="60" value="Malaysia" data-code="MY">Malaysia</option>
                                            <option data-mobile_code="960" value="Maldives" data-code="MV">Maldives</option>
                                            <option data-mobile_code="223" value="Mali" data-code="ML">Mali</option>
                                            <option data-mobile_code="356" value="Malta" data-code="MT">Malta</option>
                                            <option data-mobile_code="692" value="Marshall Islands" data-code="MH">Marshall Islands</option>
                                            <option data-mobile_code="596" value="Martinique" data-code="MQ">Martinique</option>
                                            <option data-mobile_code="222" value="Mauritania" data-code="MR">Mauritania</option>
                                            <option data-mobile_code="230" value="Mauritius" data-code="MU">Mauritius</option>
                                            <option data-mobile_code="262" value="Mayotte" data-code="YT">Mayotte</option>
                                            <option data-mobile_code="52" value="Mexico" data-code="MX">Mexico</option>
                                            <option data-mobile_code="691" value="Micronesia, Federated States of Micronesia" data-code="FM">Micronesia, Federated States of Micronesia</option>
                                            <option data-mobile_code="373" value="Moldova" data-code="MD">Moldova</option>
                                            <option data-mobile_code="377" value="Monaco" data-code="MC">Monaco</option>
                                            <option data-mobile_code="976" value="Mongolia" data-code="MN">Mongolia</option>
                                            <option data-mobile_code="382" value="Montenegro" data-code="ME">Montenegro</option>
                                            <option data-mobile_code="1664" value="Montserrat" data-code="MS">Montserrat</option>
                                            <option data-mobile_code="212" value="Morocco" data-code="MA">Morocco</option>
                                            <option data-mobile_code="258" value="Mozambique" data-code="MZ">Mozambique</option>
                                            <option data-mobile_code="95" value="Myanmar" data-code="MM">Myanmar</option>
                                            <option data-mobile_code="264" value="Namibia" data-code="NA">Namibia</option>
                                            <option data-mobile_code="674" value="Nauru" data-code="NR">Nauru</option>
                                            <option data-mobile_code="977" value="Nepal" data-code="NP">Nepal</option>
                                            <option data-mobile_code="31" value="Netherlands" data-code="NL">Netherlands</option>
                                            <option data-mobile_code="599" value="Netherlands Antilles" data-code="AN">Netherlands Antilles</option>
                                            <option data-mobile_code="687" value="New Caledonia" data-code="NC">New Caledonia</option>
                                            <option data-mobile_code="64" value="New Zealand" data-code="NZ">New Zealand</option>
                                            <option data-mobile_code="505" value="Nicaragua" data-code="NI">Nicaragua</option>
                                            <option data-mobile_code="227" value="Niger" data-code="NE">Niger</option>
                                            <option data-mobile_code="234" value="Nigeria" data-code="NG">Nigeria</option>
                                            <option data-mobile_code="683" value="Niue" data-code="NU">Niue</option>
                                            <option data-mobile_code="672" value="Norfolk Island" data-code="NF">Norfolk Island</option>
                                            <option data-mobile_code="1670" value="Northern Mariana Islands" data-code="MP">Northern Mariana Islands</option>
                                            <option data-mobile_code="47" value="Norway" data-code="NO">Norway</option>
                                            <option data-mobile_code="968" value="Oman" data-code="OM">Oman</option>
                                            <option data-mobile_code="92" value="Pakistan" data-code="PK">Pakistan</option>
                                            <option data-mobile_code="680" value="Palau" data-code="PW">Palau</option>
                                            <option data-mobile_code="970" value="Palestinian Territory, Occupied" data-code="PS">Palestinian Territory, Occupied</option>
                                            <option data-mobile_code="507" value="Panama" data-code="PA">Panama</option>
                                            <option data-mobile_code="675" value="Papua New Guinea" data-code="PG">Papua New Guinea</option>
                                            <option data-mobile_code="595" value="Paraguay" data-code="PY">Paraguay</option>
                                            <option data-mobile_code="51" value="Peru" data-code="PE">Peru</option>
                                            <option data-mobile_code="63" value="Philippines" data-code="PH">Philippines</option>
                                            <option data-mobile_code="872" value="Pitcairn" data-code="PN">Pitcairn</option>
                                            <option data-mobile_code="48" value="Poland" data-code="PL">Poland</option>
                                            <option data-mobile_code="351" value="Portugal" data-code="PT">Portugal</option>
                                            <option data-mobile_code="1939" value="Puerto Rico" data-code="PR">Puerto Rico</option>
                                            <option data-mobile_code="974" value="Qatar" data-code="QA">Qatar</option>
                                            <option data-mobile_code="40" value="Romania" data-code="RO">Romania</option>
                                            <option data-mobile_code="7" value="Russia" data-code="RU">Russia</option>
                                            <option data-mobile_code="250" value="Rwanda" data-code="RW">Rwanda</option>
                                            <option data-mobile_code="262" value="Reunion" data-code="RE">Reunion</option>
                                            <option data-mobile_code="590" value="Saint Barthelemy" data-code="BL">Saint Barthelemy</option>
                                            <option data-mobile_code="290" value="Saint Helena, Ascension and Tristan Da Cunha" data-code="SH">Saint Helena, Ascension and Tristan Da Cunha</option>
                                            <option data-mobile_code="1869" value="Saint Kitts and Nevis" data-code="KN">Saint Kitts and Nevis</option>
                                            <option data-mobile_code="1758" value="Saint Lucia" data-code="LC">Saint Lucia</option>
                                            <option data-mobile_code="590" value="Saint Martin" data-code="MF">Saint Martin</option>
                                            <option data-mobile_code="508" value="Saint Pierre and Miquelon" data-code="PM">Saint Pierre and Miquelon</option>
                                            <option data-mobile_code="1784" value="Saint Vincent and the Grenadines" data-code="VC">Saint Vincent and the Grenadines</option>
                                            <option data-mobile_code="685" value="Samoa" data-code="WS">Samoa</option>
                                            <option data-mobile_code="378" value="San Marino" data-code="SM">San Marino</option>
                                            <option data-mobile_code="239" value="Sao Tome and Principe" data-code="ST">Sao Tome and Principe</option>
                                            <option data-mobile_code="966" value="Saudi Arabia" data-code="SA">Saudi Arabia</option>
                                            <option data-mobile_code="221" value="Senegal" data-code="SN">Senegal</option>
                                            <option data-mobile_code="381" value="Serbia" data-code="RS">Serbia</option>
                                            <option data-mobile_code="248" value="Seychelles" data-code="SC">Seychelles</option>
                                            <option data-mobile_code="232" value="Sierra Leone" data-code="SL">Sierra Leone</option>
                                            <option data-mobile_code="65" value="Singapore" data-code="SG">Singapore</option>
                                            <option data-mobile_code="421" value="Slovakia" data-code="SK">Slovakia</option>
                                            <option data-mobile_code="386" value="Slovenia" data-code="SI">Slovenia</option>
                                            <option data-mobile_code="677" value="Solomon Islands" data-code="SB">Solomon Islands</option>
                                            <option data-mobile_code="252" value="Somalia" data-code="SO">Somalia</option>
                                            <option data-mobile_code="27" value="South Africa" data-code="ZA">South Africa</option>
                                            <option data-mobile_code="211" value="South Sudan" data-code="SS">South Sudan</option>
                                            <option data-mobile_code="500" value="South Georgia and the South Sandwich Islands" data-code="GS">South Georgia and the South Sandwich Islands</option>
                                            <option data-mobile_code="34" value="Spain" data-code="ES">Spain</option>
                                            <option data-mobile_code="94" value="Sri Lanka" data-code="LK">Sri Lanka</option>
                                            <option data-mobile_code="249" value="Sudan" data-code="SD">Sudan</option>
                                            <option data-mobile_code="597" value="Suricountry" data-code="SR">Suricountry</option>
                                            <option data-mobile_code="47" value="Svalbard and Jan Mayen" data-code="SJ">Svalbard and Jan Mayen</option>
                                            <option data-mobile_code="268" value="Swaziland" data-code="SZ">Swaziland</option>
                                            <option data-mobile_code="46" value="Sweden" data-code="SE">Sweden</option>
                                            <option data-mobile_code="41" value="Switzerland" data-code="CH">Switzerland</option>
                                            <option data-mobile_code="963" value="Syrian Arab Republic" data-code="SY">Syrian Arab Republic</option>
                                            <option data-mobile_code="886" value="Taiwan" data-code="TW">Taiwan</option>
                                            <option data-mobile_code="992" value="Tajikistan" data-code="TJ">Tajikistan</option>
                                            <option data-mobile_code="255" value="Tanzania, United Republic of Tanzania" data-code="TZ">Tanzania, United Republic of Tanzania</option>
                                            <option data-mobile_code="66" value="Thailand" data-code="TH">Thailand</option>
                                            <option data-mobile_code="670" value="Timor-Leste" data-code="TL">Timor-Leste</option>
                                            <option data-mobile_code="228" value="Togo" data-code="TG">Togo</option>
                                            <option data-mobile_code="690" value="Tokelau" data-code="TK">Tokelau</option>
                                            <option data-mobile_code="676" value="Tonga" data-code="TO">Tonga</option>
                                            <option data-mobile_code="1868" value="Trinidad and Tobago" data-code="TT">Trinidad and Tobago</option>
                                            <option data-mobile_code="216" value="Tunisia" data-code="TN">Tunisia</option>
                                            <option data-mobile_code="90" value="Turkey" data-code="TR">Turkey</option>
                                            <option data-mobile_code="993" value="Turkmenistan" data-code="TM">Turkmenistan</option>
                                            <option data-mobile_code="1649" value="Turks and Caicos Islands" data-code="TC">Turks and Caicos Islands</option>
                                            <option data-mobile_code="688" value="Tuvalu" data-code="TV">Tuvalu</option>
                                            <option data-mobile_code="256" value="Uganda" data-code="UG">Uganda</option>
                                            <option data-mobile_code="380" value="Ukraine" data-code="UA">Ukraine</option>
                                            <option data-mobile_code="971" value="United Arab Emirates" data-code="AE">United Arab Emirates</option>
                                            <option data-mobile_code="44" value="United Kingdom" data-code="GB">United Kingdom</option>
                                            <option data-mobile_code="1" value="United States" data-code="US">United States</option>
                                            <option data-mobile_code="598" value="Uruguay" data-code="UY">Uruguay</option>
                                            <option data-mobile_code="998" value="Uzbekistan" data-code="UZ">Uzbekistan</option>
                                            <option data-mobile_code="678" value="Vanuatu" data-code="VU">Vanuatu</option>
                                            <option data-mobile_code="58" value="Venezuela, Bolivarian Republic of Venezuela" data-code="VE">Venezuela, Bolivarian Republic of Venezuela</option>
                                            <option data-mobile_code="84" value="Vietnam" data-code="VN">Vietnam</option>
                                            <option data-mobile_code="1284" value="Virgin Islands, British" data-code="VG">Virgin Islands, British</option>
                                            <option data-mobile_code="1340" value="Virgin Islands, U.S." data-code="VI">Virgin Islands, U.S.</option>
                                            <option data-mobile_code="681" value="Wallis and Futuna" data-code="WF">Wallis and Futuna</option>
                                            <option data-mobile_code="967" value="Yemen" data-code="YE">Yemen</option>
                                            <option data-mobile_code="260" value="Zambia" data-code="ZM">Zambia</option>
                                            <option data-mobile_code="263" value="Zimbabwe" data-code="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text mobile-code">

                                                </span>
                                                <input type="hidden" name="mobile_code">
                                            </div>
                                            <input type="text" name="mobile" class="form-control" value="" placeholder="Your Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control" value="" placeholder="Enter email address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input type="text" name="name" class="form-control" value="" placeholder="User Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="form-group d-flex justify-content-center">
                                    </div>
                                    <!-- <div class="form-group">
                    <link href="https://fonts.googleapis.com/css?family=Henny+Penny&amp;display=swap" rel="stylesheet">
                    <div style="height: 46px; line-height: 46px; width:100%; text-align: center; background-color: #003; color: #2468ef!important; font-size: 26px; font-weight: bold; letter-spacing: 20px; font-family: 'Henny Penny', cursive;  -webkit-user-select: none; -moz-user-select: none;-ms-user-select: none;user-select: none;  display: flex; justify-content: center;" class="captcha"><span style="    float:left;     -webkit-transform: rotate(31deg);">9</span><span style="    float:left;     -webkit-transform: rotate(38deg);">7</span><span style="    float:left;     -webkit-transform: rotate(36deg);">0</span><span style="    float:left;     -webkit-transform: rotate(32deg);">2</span><span style="    float:left;     -webkit-transform: rotate(-10deg);">8</span><span style="    float:left;     -webkit-transform: rotate(39deg);">3</span></div><input type="hidden" name="captcha_secret" value="8fe21a2f0d9af40e8a379e3bdd62814a19dbf5bb5e75f11c021201271cb20df8">
                  </div>


                  <div class="form-group">
                    <input type="text" name="captcha" class="form-control" placeholder="Enter code" autocomplete="off" required>
                  </div> -->


                                    <div class="form-row mt-2">
                                        <div class="col-md-12">
                                            <input type="checkbox" name="terms" required> <span class="f-size-14 ml-2">I agree with
                                                <a class="base--color" href="links/privacy-amp-policy/180.html"> Privacy &amp; Policy</a>
                                                ,
                                                <a class="base--color" href="links/terms-amp-condition/181.html"> Terms &amp; Condition</a>
                                                ,
                                                <a class="base--color" href="links/cookie-policy/226.html"> Cookie Policy</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button name="reg" type="submit" class="cmn-btn">SignUp Now</button>
                                    </div>
                                    <div class="form-row mt-2">
                                        <div class="col-sm-6">
                                            <p class="f-size-14">Have an account? <a href="<?php echo $domain ?>users/login" class="base--color">Login</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- account section end -->



        <!-- footer section start -->
        <footer class="footer bg_img"
            data-background="<?php echo $domain ?>users/assets/images/frontend/footer/5fce39681ce6b1607350632.jpg">
            <div class="footer__top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <a href="index.php"><img src="<?php echo $domain ?>users/assets/images/logoIcon/logo.png"
                                    alt="image"></a>
                            <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-md-left text-center">
                            <p>
                            <p>© 2015 <a href="index.php" class="base--color">fluxsionhub</a>. All rights reserved</p>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                                <li><a href="https://facebook.com/"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="https://www.twitter.com/"><i class="lab la-twitter"></i></a></li>
                                <li><a href="https://www.pinterest.com/"><i class="lab la-pinterest-p"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i class="lab la-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer section end -->
    </div> <!-- page-wrapper end -->

    <!-- jQuery library -->
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold/js/vendor/jquery-3.5.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold/js/vendor/slick.min.js"></script>
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold/js/vendor/wow.min.js"></script>
    <!-- dashboard custom js -->
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold/js/app.js"></script>


    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/iziToast.min.css">
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold/js/iziToast.min.js"></script>


    <script>
        "use strict";

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>

    <script>
        "use strict";
        $(`option[data-code=NG]`).attr('selected', '');

        $('select[name=country]').change(function() {
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));
        });
        $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
        $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    '<span style="color:red;">Captcha field is required.</span>';
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>


</body>

<script async src='../../d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
    var wa_btnSetting = {
        "btnColor": "#16BE45",
        "ctaText": "",
        "cornerRadius": 40,
        "marginBottom": 20,
        "marginLeft": 20,
        "marginRight": 20,
        "btnPosition": "left",
        "whatsAppNumber": "447587570944",
        "welcomeMessage": "How can we help?",
        "zIndex": 999999,
        "btnColorScheme": "light"
    };
    window.onload = () => {
        _waEmbed(wa_btnSetting);
    };
</script>

<script>
    window.screetsxi = {
        appid: "666aa653157b9db76f81a1b2.nw1",
    };
    (function() {
        var w = window;
        var i = function() {
            i.c(arguments);
        };
        i.q = [];
        i.c = function(args) {
            i.q.push(args);
        };
        w.scxi = i;
        w.addEventListener("load", function() {
            var b = document.createElement("script");
            b.src = 'https://widget.screets.io/_/' + w.screetsxi.appid;
            b.async = !0;
            document.head.appendChild(b);
        }, !1);
    })();
</script>

<script>
    (function() {
        "use strict";
        $(document).on("change", ".langSel", function() {
            window.location.href = "https://www.fluxsionhub.com/users/change/" + $(this).val();
        });

        $('.policy').on('click', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.get('cookie/accept.json', function(response) {
                iziToast.success({
                    message: response,
                    position: "topRight"
                });
                $('.cookie__wrapper').addClass('d-none');
            });
        });
    })();
</script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</body>

<!-- Mirrored from www.fluxsionhub.com/users/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 20:52:51 GMT -->

</html>

</body>

</html>