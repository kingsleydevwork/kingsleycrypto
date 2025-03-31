<!-- meta tags and other links -->
<?php 
   include('../../server/connection.php');
   include('../../server/config.php');
   include('../../server/client/auth/index.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="fkJSv15FBQ0a5DNdlCyCW1Yovbfrpaniz0no9bEF">
  <title>Assetvest Shareholder - Two Factor</title>
    <meta name="description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta name="keywords" content="bitcoin,investment,trading,assetvest,asset,asssetvest-trading,Assetvest Shareholder">
    <link rel="shortcut icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Assetvest Shareholder - Two Factor">
    
    <meta itemprop="name" content="Assetvest Shareholder - Two Factor">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Assetvest Shareholder - A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers">
    <meta property="og:description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta property="og:image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="https://www.assetvest-trading.com/user/twofactor">
    
    <meta name="twitter:card" content="summary_large_image">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold//css/vendor/bootstrap.min.css">
  <link rel="icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" type="image/png" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" />
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold//css/line-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold//css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold//css/vendor/slick.css">
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold//css/vendor/dots.css">
    <!-- dashdoard main css -->
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold//css/main.css">
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold//css/custom.css">
  <link rel="stylesheet"
    href="<?php echo $domain  ?>users/assets/templates/bit_gold/css/color.php?color=2468ef&secondColor=2c2c2c">
    <!-- fontawesome 5  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
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
 
     
    <?php include('../../components/client/das_navbar.php') ?>
        <!-- header-section end  -->

            <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="black">
    
    
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Welcome Back!</h2>
            <ul class="page-breadcrumb">
              <li><a href="https://www.assetvest-trading.com">User</a></li>
              <li>Two Factor</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <section class="cmn-section">
        <div class="container">
            <div class="row dashboard-content">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="dashboard-inner-content">

                        <div class="row">


                            <div class="col-lg-6 col-md-6">
                                                                    <div class="card">

                                        <h5 class="card-header">Two Factor Authenticator</h5>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" name="key" value="JFELTUSHNKNGUSNI"
                                                           class="form-control form-control-lg" id="referralURL"
                                                           readonly>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text copytext copyBoard" id="copyBoard"
                                                              onclick="myFunction()"> <i class="fa fa-copy"></i> </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mx-auto text-center">
                                                <img class="mx-auto" src="https://chart.googleapis.com/chart?chs=200x200&amp;chld=M|0&amp;cht=qr&amp;chl=otpauth%3A%2F%2Ftotp%2FVictorious5ia%40Assetvest+Trading%3Fsecret%3DJFELTUSHNKNGUSNI">
                                            </div>
                                            <div class="form-group mx-auto text-center">

                                                <a href="#0" class="btn btn-lg mt-3 mb-1 cmn-btn"
                                                   data-toggle="modal"
                                                   data-target="#enableModal">Enable Two Factor Authenticator</a>
                                            </div>

                                        </div>
                                    </div>

                                                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class=" card">
                                    <h5 class="card-header">Google Authenticator</h5>
                                    <div class=" card-body">
                                        <h5 class="text-uppercase">Use Google Authenticator to Scan the QR code  or use the code</h5>
                                        <hr/>
                                        <p>Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device.</p>
                                        <a class="btn btn-md mt-3 cmn-btn"
                                           href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"
                                           target="_blank">DOWNLOAD APP</a>
                                    </div>
                                </div><!-- //. single service item -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Dashboard area-->



    <!--Enable Modal -->
    <div id="enableModal" class="modal fade" role="dialog">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <h4 class="modal-title">Verify your OTP</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="https://www.assetvest-trading.com/user/twofactor/enable" method="POST" class="register">
                    <input type="hidden" name="_token" value="fkJSv15FBQ0a5DNdlCyCW1Yovbfrpaniz0no9bEF">                    <div class="modal-body ">
                        <div class="form-group">
                            <input type="hidden" name="key" value="JFELTUSHNKNGUSNI">
                            <input type="text" class="form-control" name="code"
                                   placeholder="Enter Google Authenticator Code">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger action-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary action-btn">Verify</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!--Disable Modal -->
    <div id="disableModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <h4 class="modal-title">Verify your OTP disable</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="https://www.assetvest-trading.com/user/twofactor/disable" method="POST" class="register">
                    <input type="hidden" name="_token" value="fkJSv15FBQ0a5DNdlCyCW1Yovbfrpaniz0no9bEF">                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="code"
                                   placeholder="Enter Google Authenticator Code">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger action-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary action-btn">Verify</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


        

        <!-- footer section start -->
                <footer class="footer bg_img" data-background="black">


          
          <div class="footer__top">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                  <a href="https://www.assetvest-trading.com"><img src="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png"
                      alt="image"></a>
                  <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                                          <li><a
                          href="https://www.assetvest-trading.com/links/privacy-amp-policy/180">Privacy &amp; Policy</a>
                      </li>
                                          <li><a
                          href="https://www.assetvest-trading.com/links/terms-amp-condition/181">Terms &amp; Condition</a>
                      </li>
                                          <li><a
                          href="https://www.assetvest-trading.com/links/cookie-policy/226">Cookie Policy</a>
                      </li>
                                      </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="footer__bottom">
            <div class="container">
              <div class="row">
                <div class="col-md-6 text-md-left text-center">
                  <p>© 2024 <a href="https://www.assetvest-trading.com" class="base--color">Assetvest Shareholder</a>. All
                    rights reserved</p>
                </div>
                <div class="col-lg-6">
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
      <script src="<?php echo $domain  ?>users/assets/templates/bit_gold//js/vendor/jquery-3.5.1.min.js"></script>
      <!-- bootstrap js -->
      <script src="<?php echo $domain  ?>users/assets/templates/bit_gold//js/vendor/bootstrap.bundle.min.js"></script>

            <!-- slick slider js -->
      <script src="<?php echo $domain  ?>users/assets/templates/bit_gold//js/vendor/slick.min.js"></script>
      <script src="<?php echo $domain  ?>users/assets/templates/bit_gold//js/vendor/wow.min.js"></script>
      <!-- dashboard custom js -->
      <script src="<?php echo $domain  ?>users/assets/templates/bit_gold//js/app.js"></script>
      
    
      
      <!--<script src="//code.tidio.co/vyjlzfeahmmhvfnczkudrzrkecbpbd5l.js" async></script>-->
      <!-- Smartsupp Live Chat script -->

      <script>
        (function() {
          "use strict";
          $(document).on("change", ".langSel", function() {
            window.location.href = "https://www.assetvest-trading.com/change/" + $(this).val();
          });

          $('.policy').on('click', function() {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.get('https://www.assetvest-trading.com/cookie/accept', function(response) {
              iziToast.success({
                message: response,
                position: "topRight"
              });
              $('.cookie__wrapper').addClass('d-none');
            });
          });
        })();
      </script>


      <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold/css/iziToast.min.css">
<script src="<?php echo $domain  ?>users/assets/templates/bit_gold/js/iziToast.min.js"></script>


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
                        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                        (function(){
                        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                        s1.async=true;
                        s1.src="https://embed.tawk.to/61e18cf4b84f7301d32b08aa/1fpcgt7ka";
                        s1.charset="UTF-8";
                        s1.setAttribute("crossorigin","*");
                        s0.parentNode.insertBefore(s1,s0);
                        })();
                    </script>
          <script>
        $('.copyBoard').click(function(){
        "use strict";
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
      });
    </script>

      <script>
        (function() {
          "use strict";
          $(document).on("change", ".langSel", function() {
            window.location.href = "https://www.assetvest-trading.com/change/" + $(this).val();
          });
        })();
      </script>


      


    </body>

    </html>

    </body>

    </html>
