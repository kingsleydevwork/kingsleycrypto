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
    <meta name="csrf-token" content="JXprhjTyy6VBVVUoG3r27eWmvBQDI8DAfVAtj1am">
    <title>Assetvest Shareholder - Investment-History</title>
    <meta name="description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta name="keywords" content="bitcoin,investment,trading,assetvest,asset,asssetvest-trading,Assetvest Shareholder">
    <link rel="shortcut icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Assetvest Shareholder - Deposit History">

    <meta itemprop="name" content="Assetvest Shareholder - Deposit History">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Assetvest Shareholder - A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers">
    <meta property="og:description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta property="og:image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="https://www.assetvest-trading.com/user/deposit/history">

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
<section class="inner-hero bg_img" data-background="https://capitalmulti.com/users/assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg" style="background-image: url(&quot;https://capitalmulti.com/users/assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg&quot;);">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Investment Plan</h2>
            <ul class="page-breadcrumb">
              <li><a href="https://capitalmulti.com/users">Investment</a></li>
              <li>List</li>
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
                            <a href="<?php echo $domain  ?>users/investment/" class="btn cmn-btn">
                                Investment Plan
                            </a>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="table-responsive--md">
                            <table class="table style--two">
                                <thead>
                                    <tr>
                                        <th scope="col">Plan</th>
                                        <th scope="col">Return</th>
                                        <th scope="col">Received</th>
                                        <th scope="col">Next Payment</th>
                                        <!--<th scope="col"> Status</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($connection, "SELECT * FROM `investment`");
                                    while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <tr>

                                            <td data-label="#Trx">
                                                <?php echo $row['plan'] ?>
                                                <p class="mt-2"><?php echo $row['amount'] ?> USD</p>
                                            </td>


                                            <td data-label="Amount">
                                                <p><?php echo ($row['amount'] / 100) * $row['return'] ?> USD
                                                    <?php

                                                    if ($row['duration'] == "") { ?>
                                                <p class="mt-2">for Every Day + Capital</p>
                                            <?php } else { ?>
                                                <p class="mt-2">for <?php echo $row['duration']  ?> Day + Capital</p>
                                            <?php } ?>
                                            </p>
                                            </td>

                                            <td data-label="#Trx">




                                                <p class="mt-2"><?php echo $row['day_run']  ?> x <?php echo ($row['amount'] / 100) * $row['return']  ?> = <?php echo $row['day_run']  * ($row['amount'] / 100) * $row['return']   ?> USD </p>


                                            </td>



                                            <td data-label="Status">

                                                <?php

                                                if ($row['status'] == 'pending') { ?>
                                                    <span style="text-transform: capitalize;" class="badge badge-warning"><?php echo $row['status']; ?> </span>

                                                <?php  } else if ($row['status'] == 'declined') { ?>
                                                    <span style="text-transform: capitalize;" class="badge badge-danger"><?php echo $row['status']; ?> </span>
                                                <?php  } else if ($row['status'] == 'completed') { ?>
                                                    <span style="text-transform: capitalize;" class="badge badge-success"><?php echo $row['status']; ?> </span>
                                                <?php  } else if ($row['status'] == 'running') { ?>
                                                    <span class="myDiv"></span>

                                                <?php } ?>

                                            </td>






                                            <!-- <td data-label="MORE">
                                                <a href="javascript:void(0)" class="icon-btn base--bg approveBtn text-dark" data-info="{&quot;payment_proof&quot;:{&quot;field_name&quot;:&quot;78jnnnnnn&quot;,&quot;type&quot;:&quot;text&quot;}}" data-id="364" data-amount="200 USD" data-charge="0 USD"
                                                    data-after_charge="200 USD" data-rate="1 USD" data-payable="200 USD">
                                                <i class="fa fa-desktop"></i>
                                            </a>
                                            </td> -->
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



        <div id="approveModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-bg">
                    <div class="modal-header">
                        <h5 class="modal-title">Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group withdraw-list">
                            <li class="list-group-item dark-bg">Amount : <span class="withdraw-amount "></span></li>
                            <li class="list-group-item dark-bg">Charge : <span class="withdraw-charge "></span></li>
                            <li class="list-group-item dark-bg">After Charge : <span class="withdraw-after_charge"></span></li>
                            <li class="list-group-item dark-bg">Conversion Rate : <span class="withdraw-rate"></span></li>
                            <li class="list-group-item dark-bg">Payable Amount : <span class="withdraw-payable"></span></li>
                        </ul>
                        <ul class="list-group withdraw-list withdraw-detail mt-1">
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>



        <div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-bg">
                    <div class="modal-header">
                        <h5 class="modal-title">Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="withdraw-detail"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                            <a href="https://www.assetvest-trading.com"><img src="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png" alt="image"></a>
                            <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                                <li><a href="https://www.assetvest-trading.com/links/privacy-amp-policy/180">Privacy &amp; Policy</a>
                                </li>
                                <li><a href="https://www.assetvest-trading.com/links/terms-amp-condition/181">Terms &amp; Condition</a>
                                </li>
                                <li><a href="https://www.assetvest-trading.com/links/cookie-policy/226">Cookie Policy</a>
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
        $(document).ready(function() {
            "use strict";
            $('.approveBtn').on('click', function() {
                var modal = $('#approveModal');
                modal.find('.withdraw-amount').text($(this).data('amount'));
                modal.find('.withdraw-charge').text($(this).data('charge'));
                modal.find('.withdraw-after_charge').text($(this).data('after_charge'));
                modal.find('.withdraw-rate').text($(this).data('rate'));
                modal.find('.withdraw-payable').text($(this).data('payable'));
                var list = [];
                var details = Object.entries($(this).data('info'));
                var ImgPath = "<?php echo $domain  ?>users/assets/images/verify/deposit/";

                var singleInfo = '';
                for (var i = 0; i < details.length; i++) {
                    if (details[i][1].type == 'file') {
                        singleInfo += `<li class="list-group-item">
                                        <span class="font-weight-bold "> ${details[i][0].replaceAll('_', " ")} </span> : <img src="${ImgPath}/${details[i][1].field_name}" alt="..." class="w-100">
                                    </li>`;
                    } else {
                        singleInfo += `<li class="list-group-item">
                                        <span class="font-weight-bold "> ${details[i][0].replaceAll('_', " ")} </span> : <span class="font-weight-bold ml-3">${details[i][1].field_name}</span>
                                    </li>`;
                    }
                }
                modal.find('.withdraw-detail').html(`<strong class="my-3 text-white">Payment Information</strong>  ${singleInfo}`);
                modal.modal('show');
            });


            $('.detailBtn').on('click', function() {
                var modal = $('#detailModal');
                var feedback = $(this).data('admin_feedback');
                modal.find('.withdraw-detail').html(`<p> ${feedback} </p>`);
                modal.modal('show');
            });

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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.js" integrity="sha512-aWlTsIGUhEq2+LQNA7Wq+OsLaouCcGGaHBWzoU9duKy26ImHe12gRtQnj4688p7QUHG+J4CMb+XwgZ8LYqQ+kQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.myDiv').each(function() {
            var today = new Date();
            var targetDate = new Date(today);

            // Set targetDate to the beginning of the next day
            targetDate.setDate(today.getDate() + 1);
            targetDate.setHours(0, 0, 0, 0); // Set hours, minutes, seconds, and milliseconds to 0

            console.log(targetDate + 'mhk'); // Optional: Output the targetDate to verify

            $(this).countdown(targetDate, function(event) {
                if (event.elapsed) {
                    $(this).text('Investment not yet activated.');
                } else {
                    $(this).text(event.strftime('%H Hours: %M Minutes'));
                }
            });
        });
    </script>





</body>

</html>

</body>

</html>