<?php include('../../server/connection.php');

include('../../server/config.php')

?>
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="IyksKnb5C4SiRin4YovR59bYjaSioEuOgs4NBDnQ">
    <title>fluxsionhub - Forgot Password</title>
    <meta name="description" content="fluxsionhub.com - Complete HYIP Investment System . Most Advanced HYIP Investment System Script in codecanyon.

hyip, bitcoin, investment,  hyip business, hyip script, best hyip, buy hyip script, advanced hyip script, hyip software, high yield investment program, hyip manager, hyip manager script, cheap hyip script, reliable hyip, secure hyip script, php hyip script, new hyip script, hyip program">
    <meta name="keywords" content="hyip,bitcoin,investment,hyip business,hyip script,best hyip,buy hyip script,advanced hyip script,hyip software,high yield investment program,hyip manager,hyip manager script,cheap hyip script,reliable hyip,secure hyip script,php hyip script,new hyip script,hyip program">
    <link rel="shortcut icon" href="<?php echo $domain ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="<?php echo $domain ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="fluxsionhub - Forgot Password">
    
    <meta itemprop="name" content="fluxsionhub - Forgot Password">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain ?>users/assets/images/seo/66292e53481051713974867.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="fluxsionhub.com - Complete HYIP Investment System">
    <meta property="og:description" content="fluxsionhub.com - Complete HYIP Investment System . Most Advanced HYIP Investment System Script in codecanyon.">
    <meta property="og:image" content="<?php echo $domain ?>users/assets/images/seo/66292e53481051713974867.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="<?php echo $domain ?>users/password/reset">
    
    <meta name="twitter:card" content="summary_large_image">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/line-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/vendor/slick.css">
  <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/vendor/dots.css">
      <!-- dashdoard main css -->
  <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/main.css">
  <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/custom.css">
  <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/color.php?color=CCA354&secondColor=000000">
  </head>
  <body>
    
  
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
          <a class="site-logo site-title" href="<?php echo $domain ?>users"><img src="<?php echo $domain ?>users/assets/images/logoIcon/logo.png" alt="site-logo"></a>
          <ul class="account-menu responsive-account-menu ml-3">
                        <li class="icon"><a href="<?php echo $domain ?>users/login"><i class="las la-user"></i></a></li>
                      </ul> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ml-auto">
              <li> <a href="<?php echo $domain ?>users">Home</a></li>
              <li><a href="<?php echo $domain ?>users/plan">Plan</a></li>
                                              <li><a href="<?php echo $domain ?>users/about">About</a></li>
                                          
            </ul>
            <div class="nav-right">
              <ul class="account-menu ml-3">
                                <li class="icon"><a href="<?php echo $domain ?>users/login"><i class="las la-user"></i></a></li>
                              </ul> 
              <select class="select d-inline-block w-auto ml-xl-3 langSel">
                                  <option value="en"  selected  >English</option>
                              </select>
            </div>
          </div>
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>
  <!-- header-section end  -->

        <!-- account section start -->
    <div class="account-section bg_img">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-7">
            <div class="account-card">
              
              <div class="account-card__body">
                <h2>Reset Password</h2>
                <form action="<?php echo $domain ?>users/password/email" class="mt-4" method="post">
                  <input type="hidden" name="_token" value="IyksKnb5C4SiRin4YovR59bYjaSioEuOgs4NBDnQ">                  <div class="form-group">
                    <label>Email Address</label>
                    <input id="email" type="email" name="email" class="form-control" value="" placeholder="Email Address" required autocomplete="email" autofocus>
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="cmn-btn">Send Password Reset Code</button>
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
            <footer class="footer bg_img" data-background="<?php echo $domain ?>users/assets/images/frontend/footer/5fce39681ce6b1607350632.jpg">
  <div class="footer__top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <a href="<?php echo $domain ?>users"><img src="<?php echo $domain ?>users/assets/images/logoIcon/logo.png" alt="image"></a>
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
          <p><p>© 2015 <a href="<?php echo $domain ?>users" class="base--color">fluxsionhub</a>. All rights reserved</p></p>
        </div>
        <div class="col-md-6">
          <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                        <li><a href="https://facebook.com"><i class="lab la-facebook-f"></i></a></li>
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
  <script src="<?php echo $domain ?>users/assets/templates/bit_gold//js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="<?php echo $domain ?>users/assets/templates/bit_gold//js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
  <script src="<?php echo $domain ?>users/assets/templates/bit_gold//js/vendor/slick.min.js"></script>
  <script src="<?php echo $domain ?>users/assets/templates/bit_gold//js/vendor/wow.min.js"></script>
  <!-- dashboard custom js -->
  <script src="<?php echo $domain ?>users/assets/templates/bit_gold//js/app.js"></script>


  <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/iziToast.min.css">
<script src="<?php echo $domain ?>users/assets/templates/bit_gold/js/iziToast.min.js"></script>


<script>
"use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>
  

<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "<?php echo $domain ?>users/change/" + $(this).val();
        });

        $('.policy').on('click',function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.get('<?php echo $domain ?>users/cookie/accept', function(response){
                iziToast.success({message: response, position: "topRight"});
                $('.cookie__wrapper').addClass('d-none');
            });
        });
    })();
</script>


</body>
</html>

  </body>
</html> 