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
    <title><?php echo $sitename ?> - Investment Plan</title>
    <meta name="description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta name="keywords" content="bitcoin,investment,trading,capitalvault,asset,asssetvest-trading,capitalvault Shareholder">
    <link rel="shortcut icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $sitename ?> - Investment Plan">

    <meta itemprop="name" content="<?php echo $sitename ?> - Investment Plan">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $sitename ?> - A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers">
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
        <section class="inner-hero bg_img" data-background="https://fluxionhub.com/users/assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg" style="background-image: url(&quot;https://fluxionhub.com/users/assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="page-title">Investment Plan</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="https://fluxionhub.com/users">Investment</a></li>
                            <li>Plan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <section class="pt-60 pb-120">
            <div class="container">
                <div>
                    <div class="col-md-12">
                        <div class="right float-right mb-5">
                            <a href="<?php echo $domain  ?>users/investment/investement.php" class="btn cmn-btn">
                                My Investments
                            </a>
                        </div>
                    </div>

                    <div id="planContainer" class="row row-payment col-12">

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
                        $frequency = $_POST['frequency'];
                        $wallet_type = $_POST['wallet_type'];

                        $formattedDate = date("Y-m-d");
                        $formattedDateTime = date("Y-m-d H:i:s");
                        $nextCreditDateTime = date("Y-m-d H:i:s", strtotime('+24 hours'));

                        $transactionId = generateRandomString(10);

                        

                        if ($invest_amount >= $invest_min && $invest_amount <= $invest_max) {
                            if ($wallet_type == 'deposit') {
                                if ($invest_amount <= $deposit && $invest_amount > 0) {

                                   

                                    $query = mysqli_query($connection, "INSERT INTO investment(`user`, `plan`, `amount`, `return`, `transactionId`, `date`, `time`, `duration`, `payment_time`, `next_credit_time`) VALUES ('$id', '$invest_title', '$invest_amount', '$invest_return', '$transactionId', '$formattedDate', '$formattedDateTime', '$frequency', NOW(), '$nextCreditDateTime')");


                                    



                                    if ($query) {
                                        echo "<script>
                        window.onload = () => {
                            Model('Investment successfully placed', 'green');
                            window.location.href = './investement.php';
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
                            } elseif ($wallet_type == 'invest') {
                                if ($invest_amount <= $interests && $invest_amount > 0) {
                                    $query = mysqli_query($connection, "INSERT INTO investment(user, plan, amount, return, transactionId, date, time, duration, payment_time, next_credit_time) VALUES ('$id', '$invest_title', '$invest_amount', '$invest_return', '$transactionId', '$formattedDate', '$formattedDateTime', '$frequency', NOW(), '$nextCreditDateTime')");
                                    echo mysqli_error($connection);

                                    if ($query) {
                                        echo "<script>
                        window.onload = () => {
                            Model('Investment successfully placed', 'green');
                            setTimeout(() => {
                                window.location.href = './investement.php';
                            }, 1000);
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
                        <input type="hidden" name="frequency" class="frequency">
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
                            <a href="https://www.capitalvault-trading.com"><img src="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png" alt="image"></a>
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
        $(document).ready(function() {
            // Function to fetch investment plans from the server
            function fetchInvestmentPlans() {
                $.ajax({
                    url: '../../server/client/api/plan.php', // URL of the PHP script
                    type: 'GET', // HTTP request type
                    success: function(response) {
                        // Call function to create HTML cards with the fetched data
                        createPlanCards(JSON.parse(response));
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching investment plans:", error);
                    }
                });
            }

            // Call the fetchInvestmentPlans function to get the data
            fetchInvestmentPlans();
        });

        // Function to create HTML for each investment plan
        function createPlanCards(plans) {
            const planContainer = document.getElementById('planContainer');

            // Clear any existing content in the container
            planContainer.innerHTML = '';

            // Iterate over each plan and create the HTML for each
            plans.forEach(plan => {
                $imageLink = "<?php echo $domain ?>assets/templates/bit_gold/images/bg" + plan.background
                const planCard = `
    
                        <div class="col-lg-3 mb-30">
                            <div class="package-card text-center bg_img" data-background="https://fluxionhub.com/users/assets/templates/bit_gold//images/bg/bg-4.png" style="background-image: url(&quot;https://fluxionhub.com/users/assets/templates/bit_gold//images/bg/bg-4.png&quot;);">
                                <h4 class="package-card__title base--color mb-2">${plan.title}</h4>
                    
                                <ul class="package-card__features mt-4">
                                    <li>Return 5.9%</li>
                    
                                    <li>
                                         ${plan.frequency == null ? 'Every Day' : plan.frequency + ' Days' }
                                    </li>
                                    <li>
                                        Total ${plan.return_rate}
                    
                                        + <span class="badge badge-success">Capital</span>
                                    </li>
                                </ul>
                                <div class="package-card__range mt-5 base--color"> $${plan.min_amount}-$${plan.max_amount ? plan.max_amount : 'Infinit'}
                                </div>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#depoModal" data-return="${plan.return_rate}" data-min="${plan.min_amount}" data-max="${plan.max_amount}" data-title="${plan.title}" data-frequency="${plan.frequency}" class="cmn-btn btn-md mt-4 investButton">Invest Now</a>
                            </div><!-- package-card end -->
                        </div>

    
        `;
                planContainer.innerHTML += planCard
            });
        }
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
                var frequency = $(this).data('frequency');
                var symbol = "$";
                var currency = "USD";



                $('.planName').html(title);
                $('.invest_title').val(title);
                $('.invest_return').val(returns)
                $('.invest_min').val(min)
                $('.invest_max').val(max)
                $('.wallet_type').val()
                $('.frequency').val(frequency)
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