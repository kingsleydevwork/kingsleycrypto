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
    <meta name="csrf-token" content="ATC3iqVscqeIVw3M1iFFpqMAIKFf1KP3J3VsCgM4">
    <title><?php echo $sitename ?> - Withdraw Money</title>
    <meta name="description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta name="keywords" content="bitcoin,investment,trading,assetvest,asset,asssetvest-trading,Assetvest Shareholder">
    <link rel="shortcut icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $sitename ?> - Withdraw Money">

    <meta itemprop="name" content="<?php echo $sitename ?> - Withdraw Money">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $sitename ?> - A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers">
    <meta property="og:description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta property="og:image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="<?php echo $domain  ?>users/user/withdraw">

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
                            <li>Withdraw Money</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <section class="cmn-section pt-60">
            <div class="container ">
                <div class="row row-payment mb-60-80 justify-content-center">
                    <div class="col-md-12">
                        <div class="right float-right mb-5">
                            <a href="<?php echo $domain  ?>users/withdraw/withdraw.php" class="btn cmn-btn">
                                Withdraw History
                            </a>
                        </div>
                    </div>



                </div>
            </div>
        </section>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-bg">
                    <div class="modal-header">
                        <h5 class="modal-title method-name" id="exampleModalLabel">Withdrawal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    function generateRandomString($length = 10)
                    {
                        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
                    }

                    if (isset($_POST['withdraw_btn'])) {
                        $amount = $_POST['amount'];
                        $paymentMethod = $_POST['paymentMethod'];
                        $paymentId = $_POST['paymentId'];
                        $paymentImage = $_POST['paymentImage'];
                        $date = date('M-D-Y');
                        $time = date('m:h A');



                        $withdrawal_id = generateRandomString();

                        $total = $invested + $referral + $deposit + $interests;

                        echo "<script>alert('$total')</script>";



                        if ( $amount <= $total && $amount > 0) {
                            $sql_insert = mysqli_query($connection, "INSERT INTO `transations`(`transactionId`, `user`, `Amount`, `wallet`, `postbalance`, `date`,`time`,`type`) VALUES ('$withdrawal_id','$id','$amount','','$deposit','$date','$time','withdrawal')");


                            $statement = mysqli_query($connection, "INSERT INTO `withdrawal`(`user`, `amount`, `paymentmethod`, `date`, `charge`, `time`,`transactionId`) VALUES ('$id','$amount','$paymentMethod','$date','0','$time','$withdrawal_id')");




                            if ($statement) {
                                echo "<script>
                                window.onload = ()=>{
                                    Model('Withdrawal sucessful','green');
                                    setTimeout(()=>{
                                window.open('./withdraw.php','_self')
                                },1000)
                                };
                            </script>";
                            } else {
                                echo "<script>
                                    window.onload = ()=>{
                                        Model('Withdrawal Failed','red');
                                    };
                                </script>";
                            }
                        }else{
                            echo "<script>
                                    window.onload = ()=>{
                                        Model('Insufficient Balance','red');
                                    };
                                </script>";
                        }
                    }
                    ?>
                    <form method="POST" class="register">

                        <input type="hidden" class="paymentMethod" name="paymentMethod" value="">
                        <input type="hidden" name="paymentId" class="paymentId">
                        <input type="hidden" name="paymentImage" class="paymentImage">


                        <input type="hidden" name="_token" value="ATC3iqVscqeIVw3M1iFFpqMAIKFf1KP3J3VsCgM4">
                        <div class="modal-body">
                            <p class="text-info depositLimit"></p>
                            <p class="text-info depositCharge"></p>

                            <div class="form-group">
                                <input type="hidden" name="currency" class="edit-currency form-control" value="">
                                <input type="hidden" name="method_code" class="edit-method-code  form-control" value="">
                            </div>



                            <div class="form-group">
                                <label>Enter Amount:</label>
                                <div class="input-group">
                                    <input id="amount" type="text" class="form-control form-control-lg" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" name="amount" placeholder="0.00" required="" value="">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text addon-bg currency-addon">USD</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" name="withdraw_btn" class="btn cmn-btn">Confirm</button>
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
                            <p>© 2024 <a href="https://www.assetvest-trading.com" class="base--color"><?php echo $sitename ?></a>. All rights reserved</p>
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
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'c48079b4813e4c2b97f501a714ab7ddace14ea3e';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

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


        // jQuery to fetch payment methods
        $(document).ready(function() {
            // Function to fetch payment methods via AJAX
            function fetchPaymentMethods() {
                $.ajax({
                    url: '../../server/client/api/paymentMethod.php', // URL of the PHP script
                    type: 'GET', // HTTP request type
                    success: function(response) {
                        console.log(response)
                        // Call function to create HTML cards with the fetched data
                        createPaymentMethodCards(JSON.parse(response));
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching payment methods:", error);
                    }
                });
            }

            // Call the fetchPaymentMethods function to get the data
            fetchPaymentMethods();
        });

        // Function to create HTML for each payment method
        function createPaymentMethodCards(paymentMethods) {
            console.log('gg');
            const container = document.querySelector('.row-payment');

            paymentMethods.forEach(method => {
                $imageLink = "<?php echo $domain ?>users/assets/images/payment/" + method.image
                const cardHtml = `
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="card">
                <div class="card-body b-primary">
                    <div class="row justify-content-center">
                    <div class="col-md-5 col-sm-12">
                        <img src="${$imageLink}" class="card-img-top w-100" alt="${method.payment_method}">
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <ul class="list-group text-center">
                        <li class="list-group-item">${method.payment_method}</li>
                     
                        <li class="list-group-item">Charge - ${method.charge}</li>
                        <li class="list-group-item">
                            <button type="button" data-img="${method.image}" data-limit="${method.limit_range}}" data-id="${method.id}" data-payment="${method.payment_method}" class="btn deposit cmn-btn w-100" data-toggle="modal" data-target="#exampleModal">
                            Withdraw
                            </button>
                        </li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            `;
                container.insertAdjacentHTML('beforeend', cardHtml);

                console.log(container);
                $('.deposit').on('click', function() {
                    var id = $(this).data('id');
                    var paymentMethod = $(this).data('payment');
                    var limit = $(this).data('limit');
                    var image = $(this).data('img');

                    $('.paymentMethod').val(paymentMethod)
                    $('.paymentId').val(id)
                    $('.paymentImage').val(image)

                });
            });
        }
    </script>





</body>

</html>

</body>

</html>