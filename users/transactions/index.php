<?php 
   include('../../server/connection.php');
   include('../../server/client/auth/index.php');
   include('../../server/config.php');
   
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="fkJSv15FBQ0a5DNdlCyCW1Yovbfrpaniz0no9bEF">
    <title>Assetvest Shareholder - Transactions</title>
    <meta name="description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta name="keywords" content="bitcoin,investment,trading,assetvest,asset,asssetvest-trading,Assetvest Shareholder">
    <link rel="shortcut icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Assetvest Shareholder - Deposit Wallet Transactions">

    <meta itemprop="name" content="Assetvest Shareholder - Deposit Wallet Transactions">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Assetvest Shareholder - A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers">
    <meta property="og:description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta property="og:image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="<?php echo $domain  ?>users/user/transactions/deposit-wallet">

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
    <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold/css/color.php?color=2468ef&secondColor=2c2c2c">
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
        </div>
        <!-- / STAR ANIMATION -->
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
                            <li><a href="#">User</a></li>
                            <li>Deposit Wallet Transactions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <section class="cmn-section pt-60">
            <div class="container">
                <div class="row justify-content-center mt-2">
                    <div class="col-md-12">
                        <div class="right float-right mb-5">
                            <a style="display: none;" href="
                                                javascript:void(0)
                        
                        " class="btn cmn-btn mb-md-0 mb-3 
                                                btn-disabled
                                                ">
                            Deposit Wallet Transactions                            
                        </a>
                            <a href="

                                                <?php echo $domain  ?>users/transactions/interest-wallet
                        
                        " class="btn cmn-btn mb-md-0
                                                ">
                            Interest Wallet Transactions                            
                        </a>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="table-responsive--md">
                            <table class="table style--two">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">TransactinID </th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Remaining balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($connection,"SELECT * FROM `interest` WHERE `id`='$id'");
                                    while($row = mysqli_fetch_assoc($query)){?>
                                        <tr>
                                        <td data-label="Date">
                                            <?php echo $row['date'] .' '. $row['time'] ?>
                                        </td>
                                        <td data-label="#Trx"><?php echo  $row['transactionId']?></td>
                                        <td data-label="Details"><?php echo $row['details']?></td>
                                        <td data-label="Amount">
                                            <strong class="text-success"> + <?php echo  $row['amount']?></strong>
                                        </td>
                                        <td data-label="Remaining balance">
                                            <strong>$<?php echo  number_format($row['Remaining_balance'],2)?></strong>
                                        </td>
                                    </tr>
                                  <?php  }
                                     ?>
                                   
                                    
                                    
                                  
                                </tbody>
                            </table>


                        </div>

                    </div>
                </div>
            </div>
        </section>





        <!-- footer section start -->
        <footer class="footer bg_img" data-background="black">



            <div class="footer__top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <a href="https://www.assetvest-trading.com"><img src="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png"
                      alt="image"></a>
                            <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                                <li><a href="<?php echo $domain  ?>users/links/privacy-amp-policy/180">Privacy &amp; Policy</a>
                                </li>
                                <li><a href="<?php echo $domain  ?>users/links/terms-amp-condition/181">Terms &amp; Condition</a>
                                </li>
                                <li><a href="<?php echo $domain  ?>users/links/cookie-policy/226">Cookie Policy</a>
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
                            <p>© 2024 <a href="https://www.assetvest-trading.com" class="base--color">Assetvest Shareholder</a>. All rights reserved</p>
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
    </div>
    <!-- page-wrapper end -->
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
                window.location.href = "<?php echo $domain  ?>users/change/" + $(this).val();
            });

            $('.policy').on('click', function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.get('<?php echo $domain  ?>users/cookie/accept', function(response) {
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

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>


    <script>
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = "https://embed.tawk.to/61e18cf4b84f7301d32b08aa/1fpcgt7ka";
            s1.charset = "UTF-8";
            s1.setAttribute("crossorigin", "*");
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>


    <script>
        (function() {
            "use strict";
            $(document).on("change", ".langSel", function() {
                window.location.href = "<?php echo $domain  ?>users/change/" + $(this).val();
            });
        })();
    </script>





</body>

</html>

</body>

</html>