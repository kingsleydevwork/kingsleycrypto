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
    <meta name="csrf-token" content="ATC3iqVscqeIVw3M1iFFpqMAIKFf1KP3J3VsCgM4">
    <title>Assetvest Shareholders - Investment Plan</title>
    <meta name="description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta name="keywords" content="bitcoin,investment,trading,assetvest,asset,asssetvest-trading,Assetvest Shareholder">
    <link rel="shortcut icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Assetvest Shareholders - Investment Plan">

    <meta itemprop="name" content="Assetvest Shareholders - Investment Plan">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Assetvest Shareholders - A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers">
    <meta property="og:description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta property="og:image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="<?php echo $domain  ?>user/plan">

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
    <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold/css/color.php">
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
                            <li>Investment Plan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <section class="pt-60 pb-120">
            <div class="container">
                <div id="planContainer" class="row mb-none-30 justify-content-center">
                    <div class="col-md-12">
                        <div class="right float-right mb-5">
                            <a href="<?php echo $domain  ?>user/investment/investement.php" class="btn cmn-btn">
                                My Investments
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- Modal -->
        <div class="modal fade" id="depoModal" tabindex="-1" role="dialog" aria-hidden="true">

            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-bg">
                    <div class="modal-header">
                        <strong class="modal-title text-white" id="ModalLabel">
                            Confirm to invest on <span class="planName"></span>
                        </strong>
                        <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>

                    <?php
                    function generateRandomString($length = 10)
                    {
                        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
                    }
                    error_reporting(E_ALL);

                    if (isset($_POST['next'])) {
                        $invest_title = $_POST['invest_title'];
                        $invest_amount = $_POST['amount'];
                        $invest_return = $_POST['invest_return'];
                        $invest_min = $_POST['invest_min'];
                        $invest_max = $_POST['invest_max'];
                    
                        $wallet_type = $_POST['wallet_type'];

                        $formattedDate = date("Y-m-d");
                        $time = date("H:m:s");
                    
                        $transactionId = generateRandomString(10);
                    
                        if ($invest_amount > $invest_min && $invest_amount < $invest_max) {
                         
                    
                            // Handle deposit
                            if ($wallet_type == 'deposit') {
                                if ($invest_amount < $deposit && $invest_amount > 0) {
                                    $query = mysqli_query($connection, "INSERT INTO `investment`(`user`, `plan`, `amount`, `return`, `transactionId`) VALUES ('$id', '$invest_title', '$invest_amount', '$invest_return', '$transactionId')");
                                    echo mysqli_error($connection);
                    
                                    if ($query) {
                                        echo "<script>
                                            window.onload = () => {
                                                Model('Investment successfully placed', 'green');
                                            };
                                        </script>";
                                    } else {
                                        echo "<script>
                                            window.onload = () => {
                                                Model('An error occurred while placing the Deposit.', 'red');
                                            };
                                        </script>";
                                    }
                                } else {
                                    echo "<script>
                                        window.onload = () => {
                                            Model('Check if invested amount is greater than zero and within the balance', 'red');
                                        };
                                    </script>";
                                }
                            }
                    
                            // Handle investment
                            elseif ($wallet_type == 'invest') {
                                if ($invest_amount < $interests && $invest_amount > 0) {
                                    $query = mysqli_query($connection, "INSERT INTO `investment`(`user`, `plan`, `amount`, `return`, `transactionId`,`date`,`time`) VALUES ('$id', '$invest_title', '$invest_amount', '$invest_return', '$transactionId','$formattedDate','$time')");
                                    echo mysqli_error($connection);
                    
                                    if ($query) {
                                        echo "<script>
                                            window.onload = () => {
                                                Model('Investment successfully placed', 'green');
                                                setTimeout(()=>{
                                                    window.location.href = './investement.php'
                                                },1000)
                                            };
                                        </script>";
                                    } else {
                                        echo "<script>
                                            window.onload = () => {
                                                Model('An error occurred while placing the investment.', 'red');
                                            };
                                        </script>";
                                    }
                                } else {
                                    echo "<script>
                                        window.onload = () => {
                                            Model('Ensure that the amount is below the available investment balance and above zero.', 'red');
                                        };
                                    </script>";
                                }
                            }
                        } else {
                            echo "<script>
                                window.onload = () => {
                                    Model('Amount is supposed to be within the specified limits', 'red');
                                };
                            </script>";
                        }
                    }
                    

                  
                    ?>

                    <form method="post" class="register">
                        <input type="hidden" class="invest_title" name="invest_title">
                        <input type="hidden" name="invest_amount" class="invest_amount">
                        <input type="hidden" name="invest_min" class="invest_min">
                        <input type="hidden" name="invest_max" class="invest_max">
                        <input type="hidden" name="invest_return" class="invest_return">
                        <input type="hidden" name="wallet_type" class="wallet_type">

                        <div class="modal-body">

                            <div class="form-group">
                                <h6 class="text-center investAmountRenge"></h6>

                                <p class="text-center mt-1 interestDetails"></p>
                                <p class="text-center interestValidaty"></p>

                                <div class="form-group ">
                                    <strong class="text-white mb-2 d-block">Select wallet</strong>
                                    <select class="form-control" name="wallet_type">
                                        <option value="deposit">Deposit Wallet - $<?= number_format($deposit, 2) ?></option>
                                        <option value="invest">Interest Wallet -$<?= number_format($interests, 2) ?></option>
                                        <!-- <option value="checkout">Checkout</option> -->
                                    </select>
                                </div>
                                <input type="hidden" name="plan_id" class="plan_id">

                                <div class="form-group">
                                    <strong class="text-white mb-2 d-block">Invest Amount</strong>
                                    <input type="text" class="form-control fixedAmount" id="fixedAmount" name="amount" value="" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" autocomplete="off" require>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                            <button name="next" type="submit" class="btn cmn-btn">Yes</button>
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
                            <a href="https://www.assetvest-trading.com"><img src="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png" alt="image"></a>
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
                            <p>© 2024 <a href="https://www.assetvest-trading.com" class="base--color">Assetvest Shareholders</a>. All rights reserved</p>
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
        const plans = [{
                title: "LEVEL 1",
                return: "2%",
                frequency: "Every Day",
                min: "34999",
                max: "49999",
                background: "<?php echo $domain ?>assets/templates/bit_gold//images/bg/bg-4.png",
            },
            {
                title: "LEVEL 2",
                return: "3.5%",
                frequency: "Every Day",
                min: "49999",
                max: "69000",
                background: "<?php echo $domain ?>assets/templates/bit_gold//images/bg/bg-4.png",
            },
            {
                title: "LEVEL 3",
                return: "5%",
                frequency: "Every Day",
                min: "69000",
                max: "99999",
                background: "<?php echo $domain ?>assets/templates/bit_gold//images/bg/bg-4.png",
            },
            {
                title: "Premium Plan",
                return: "15%",
                frequency: "Every Day",
                min: "99999",
                max: "Infinit",
                background: "<?php echo $domain ?>assets/templates/bit_gold//images/bg/bg-4.png",
            }
        ];


        const planContainer = document.getElementById('planContainer');

        plans.forEach(plan => {
            const planCard = `
            <div class="col-lg-4 mb-30">
                <div class="package-card text-center bg_img" data-background="${plan.background}">
                    <h4 class="package-card__title base--color mb-2">${plan.title}</h4>
                    <ul class="package-card__features mt-4">
                        <li>Return ${plan.return}</li>
                        <li>${plan.frequency}</li>
                    </ul>
                    <div class="package-card__range mt-5 base--color">${plan.min}-${plan.max}</div>
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#depoModal" data-return="${plan.return}" data-min="${plan.min}" data-max="${plan.max}"  data-title="${plan.title}" data-range="${plan.range}" class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
                </div>
            </div>
        `;
            planContainer.insertAdjacentHTML('beforeend', planCard);
        });
    </script>



    <script>
        (function($) {
            "use strict";
            $(document).on('click', '.investButton', function() {
                var amount = $(this).data('amount');
                var range = $(this).data('range');
                var title = $(this).data('title');
                var returns = $(this).data('return');
                var min = $(this).data('min');
                var max = $(this).data('max');
                var symbol = "$";
                var currency = "USD";

                // $('#mySelect').empty();

                // if (data.fixed_amount == '0') {
                //     $('.investAmountRenge').text(`invest: ${symbol}${data.minimum} - ${symbol}${data.maximum}`);
                //     $('.fixedAmount').val('');
                //     $('#fixedAmount').attr('readonly', false);


                // } else {
                //     $('.investAmountRenge').text(`invest: ${symbol}${data.fixed_amount}`);
                //     $('.fixedAmount').val(data.fixed_amount);
                //     $('#fixedAmount').attr('readonly', true);

                // }

                // if (data.interest_status == '1') {
                //     $('.interestDetails').html(`<strong> Interest: ${data.interest} % </strong>`);
                // } else {
                //     $('.interestDetails').html(`<strong> Interest: ${data.interest} ${currency}  </strong>`);
                // }
                // if (data.lifetime_status == '0') {
                //     $('.interestValidaty').html(`<strong>  per ${data.times} hours ,  ${data.repeat_time} times</strong>`);
                // } else {
                //     $('.interestValidaty').html(`<strong>  per ${data.times} hours,  life time </strong>`);
                // }

                $('.planName').html(min);
                $('.invest_title').val(title);
                $('.invest_return').val(returns)
                $('.invest_min').val(min)
                $('.invest_max').val(max)
                $('.wallet_type').val()
                // $('.plan_id').val(data.id);
            });



        })(jQuery);
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