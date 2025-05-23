<?php

include('../../server/connection.php');
include('../../server/config.php');
include('../../server/client/auth/index.php');

$selectDeposit = mysqli_query($connection, "SELECT sum(amount) as amount FROM `deposit` WHERE `user`='$id' AND `status`='approved' || `status`='completed'");
if (mysqli_num_rows($selectDeposit)) {
    while ($dep = mysqli_fetch_assoc($selectDeposit)) {
        $totalDeposit = $dep['amount'];
    }
}

$selectInterests = mysqli_query($connection, "SELECT sum(amount) as amount FROM `interest` WHERE `user`='$id'");
if (mysqli_num_rows($selectInterests)) {
    while ($deps = mysqli_fetch_assoc($selectInterests)) {
        $totalInterests = $deps['amount'];
    }
}

echo mysqli_error($connection);

$selectInvested = mysqli_query($connection, "SELECT sum(amount) as amount FROM `investment` WHERE `user`='$id' AND `status`='approved' || `status`='completed'");
if (mysqli_num_rows($selectInvested)) {
    while ($invest = mysqli_fetch_assoc($selectInvested)) {
        $totalInvested = $invest['amount'];
    }
}



?>

<script data-cfasync="false" src="#"></script>

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="iBnVTewsIT4ZH1IkkuVfYFCQ8d9PLR3h77uqiarO">
    <title><?php echo $sitename ?> - Dashboard</title>
    <meta name="description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta name="keywords" content="bitcoin,investment,trading,assetvest,asset,asssetvest-trading,Assetvest Shareholder">
    <link rel="shortcut icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $sitename ?> - Dashboard">

    <meta itemprop="name" content="<?php echo $sitename ?> - Dashboard">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $sitename ?> - A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers">
    <meta property="og:description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta property="og:image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="<?php echo $domain  ?>user/dashboard">

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
    <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold/css/color.php?">
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/60ad4117a4114e480ad0ddf2/1f6icci3b';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->


    <style type="text/css">
        #copyBoard {
            cursor: pointer;
        }
    </style>
    <style type="text/css">
        #copyBoard {
            cursor: pointer;
        }
    </style>
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
        <!--<section class="inner-hero bg_img" data-background="black">-->


        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-6">-->
        <!--                <h2 class="page-title">Welcome Back!</h2>-->
        <!--                <ul class="page-breadcrumb">-->
        <!--                    <li><a href="<?php echo $domain ?>">User</a></li>-->
        <!--                    <li>Dashboard</li>-->
        <!--                </ul>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <section class="inner-hero bg_img" data-background="https://capitalmulti.com/users/assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg" style="background-image: url(&quot;https://capitalmulti.com/users/assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg&quot;);">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6">
                    <h2 class="page-title">Dashboard</h2>
                    <ul class="page-breadcrumb">
                      <li><a href="https://capitalmulti.com/users">Home</a></li>
                      <li>Dashboard</li>
                    </ul>
                  </div>
                </div>
              </div>
        </section>
        <!-- inner hero end -->


        <div class="pt-90 pb-40">



            <div class="container my-3">
                <div class="row justify-content-center">
                    <div class="col-lg-12 pl-lg-5 mt-lg-0 mt-5">
                        <div class="row mb-none-30">
                            <div class="col-md-12 mb-4">
                                
                                <div class="col-md-12 mb-4">
                                <label>Referral Link</label>
                                    <div class="input-group">
                                      <input type="text" name="text" class="form-control" id="referralURL" value="<?php echo $domain . 'register/?user=' . $user_link ?>" readonly="">
                                      <div class="input-group-append">
                                        <span class="input-group-text copytext copyBoard" id="copyBoard"> <i class="fa fa-copy"></i> </span>
                                      </div>
                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="pt-40 pb-50">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 pl-lg-5 mt-lg-0 mt-5">
                            <div class="row mb-none-30">


                                <div class="col-xl-4 col-sm-6 mb-30">
                                    <div class="d-widget d-flex flex-wrap">
                                        <div class="col-8">
                                            <span class="caption">Deposit Wallet Balance</span>
                                            <h4 class="currency-amount">$<?php echo number_format($deposit) ?></h4>


                                        </div>
                                        <div class="col-4">
                                            <div class="icon ml-auto">
                                                <i class="las la-wallet"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- d-widget-two end -->
                                </div>
                                <div class="col-xl-4 col-sm-6 mb-30">
                                    <div class="d-widget d-flex flex-wrap">
                                        <div class="col-8">
                                            <span class="caption">Interest Wallet Balance</span>
                                            <h4 class="currency-amount">$<?php echo $interests ?></h4>

                                        </div>
                                        <div class="col-4">
                                            <div class="icon ml-auto">
                                                <i class="las la-wallet"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- d-widget-two end -->
                                </div>
                                <div class="col-xl-4 col-sm-6 mb-30">
                                    <div class="d-widget d-flex flex-wrap">
                                        <div class="col-8">
                                            <span class="caption">Total Invested</span>
                                            <h6>$<?php echo ($totalInvested == '') ? '0.00' : number_format($totalInvested, 2) ?></h6>

                                        </div>
                                        <div class="col-4">
                                            <div class="icon ml-auto">
                                                <i class="las la-cubes "></i>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col-xl-4 col-sm-6 mb-30">
                                    <div class="d-widget  d-flex flex-wrap">
                                      <div class="col-8">
                                        <span class="caption">Referral Earnings</span>
                                        <h4 class="currency-amount">$<?php echo ($referral == '') ? '0.00' : number_format($referral, 2) ?></h4>
                                      </div>
                                      <div class="col-4">
                                        <div class="icon ml-auto">
                                          <i class="las la-user-friends"></i>
                                        </div>
                                      </div>
                                    </div>
                                    
                                </div>    
                             </div>

                        </div>
                            </div>
                            <!-- row end -->
                            <div class="row mt-50">
                                <div class="col-lg-12">
                                    <div class="table-responsive--md">
                                        <table class="table style--two">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Transaction ID</th>
                                                    <th>Amount</th>
                                                    <th>Wallet</th>
                                                    
                                                    <!--<th>Details</th>-->
                                                    <!-- <th>Post Balance</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php


                                                // $query = "
                                                //         SELECT 'Deposit Wallet' AS source_table, amount AS amount, deposit_id AS transaction_id, date
                                                //         FROM deposit 
                                                //         WHERE user = '$id'
                                                //         UNION ALL
                                                //         SELECT 'Interest Wallet' AS source_table, amount, transactionId AS transaction_id, date 
                                                //         FROM interest 
                                                //         WHERE user = '$id'
                                                //         UNION ALL
                                                //         SELECT 'Investment Wallet' AS source_table, amount, investment_id AS transaction_id, date
                                                //         FROM investment 
                                                //         WHERE user = '$id'
                                                //         ORDER BY date DESC
                                                //     ";

                                                $query = "
                                                                SELECT source_table, amount, transactionId, date
                                                                FROM (
                                                                    SELECT 'Interest Wallet' AS source_table, amount, transactionId, date 
                                                                    FROM interest 
                                                                    WHERE user = '$id'
                                                                    UNION ALL
                                                                    SELECT 'Deposit Wallet' AS source_table, amount, transactionId, date
                                                                    FROM deposit 
                                                                    WHERE user = '$id' AND status = 'approved' || status = 'completed'
                                                                     UNION ALL
                                                                    SELECT 'Investment Wallet' AS source_table, amount, transactionId, date
                                                                    FROM investment 
                                                                    WHERE user = '$id' AND status = 'approved' || status = 'completed'
                                                                     UNION ALL
                                                                    SELECT 'Investment Wallet' AS source_table, amount, transactionId, date
                                                                    FROM withdrawal 
                                                                    WHERE user = '$id' AND status = 'approved' || status = 'completed'
                                                                ) AS combined_data
                                                                GROUP BY transactionId
                                                                ORDER BY date DESC 
                                                                LIMIT 8
                                                            ";


                                                // Execute the query
                                                $select = mysqli_query($connection, $query);
                                                echo mysqli_error($connection);
                                                $count = 0;
                                                while ($row = mysqli_fetch_assoc($select)) {
                                                    $count++ ?>

                                                    <tr style="margin-bottom: 10px;">
                                                        <td data-label="Date"><?php echo $row['date'] ?></td>
                                                        <td data-label="Transaction ID"><span class="text-primary"><?php echo $row['transactionId'] ?></span>
                                                        </td>

                                                        <td data-label="Amount">
                                                            <span class="text-success">
                                                                <?php echo $row['amount'] ?></span>
                                                        </td>
                                                        <td data-label="Wallet">
                                                            <?php
                                                            if ($row['source_table'] == 'Deposit Wallet') {
                                                            ?>
                                                                <span class="badge badge-success"><?php echo $row['source_table'] ?></span>
                                                            <?php
                                                            } elseif ($row['source_table'] == 'Investment Wallet') {
                                                            ?>
                                                                <span class="badge badge-danger"><?php echo $row['source_table'] ?></span>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <span class="badge badge-primary"><?php echo $row['source_table'] ?></span>
                                                            <?php
                                                            }
                                                            ?>


                                                        </td>
                                                        <!--<td data-label="Details"> level 1 Referral Commission From Victorious5ia</td>-->
                                                        <!-- <td data-label="Post Balance"><span>
                                                                $<?= number_format($row['postbalance'], 2) ?></span></td> -->
                                                    </tr>

                                                <?php } ?>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- row end -->
                        </div>
                    </div>
                </div>
            </div>



            <!-- footer section start -->
            <footer class="footer bg_img" data-background="black">



                <div class="footer__top">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 text-center">
                                <a href="<?php echo $domain ?>"><img src="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png" alt="image"></a>
                                <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                                    <li><a href="<?php echo $domain  ?>links/privacy-amp-policy/180">Privacy &amp; Policy</a>
                                    </li>
                                    <li><a href="<?php echo $domain  ?>links/terms-amp-condition/181">Terms &amp; Condition</a>
                                    </li>
                                    <li><a href="<?php echo $domain  ?>links/cookie-policy/226">Cookie Policy</a>
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
                                <p>© 2024 <a href="<?php echo $domain ?>" class="base--color"><?php echo $sitename ?></a>. All rights reserved</p>
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





        <script>
            (function() {
                "use strict";
                $(document).on("change", ".langSel", function() {
                    window.location.href = "<?php echo $domain  ?>change/" + $(this).val();
                });

                $('.policy').on('click', function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.get('<?php echo $domain  ?>cookie/accept', function(response) {
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


        <!-- <script>
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
        </script> -->
        <script>
            $('.copyBoard').click(function() {
                "use strict";
                var copyText = document.getElementById("referralURL");
                copyText.select();
                copyText.setSelectionRange(0, 99999);
                /*For mobile devices*/
                document.execCommand("copy");
                iziToast.success({
                    message: "Copied: " + copyText.value,
                    position: "topRight"
                });
            });
        </script>

        <script>
            (function() {
                "use strict";
                $(document).on("change", ".langSel", function() {
                    window.location.href = "<?php echo $domain  ?>change/" + $(this).val();
                });
            })();
        </script>





</body>

</html>

</body>

</html>