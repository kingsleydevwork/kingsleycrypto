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
    <meta name="csrf-token" content="d6hxsZC1klHtrGBQczeerKuks2NCHlGMEPWy4Mro">
    <title>capitalvault Shareholders - Deposit Methods</title>
    <meta name="description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta name="keywords" content="bitcoin,investment,trading,capitalvault,asset,asssetvest-trading,capitalvault Shareholder">
    <link rel="shortcut icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="capitalvault Shareholders - Deposit Methods">

    <meta itemprop="name" content="capitalvault Shareholders - Deposit Methods">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="capitalvault Shareholders - A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers">
    <meta property="og:description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta property="og:image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="<?php echo $domain  ?>user/deposit">

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
                <div class="row ">
                    <div class="col-lg-6">
                        <h2 class="page-title">Welcome Back!</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="">User</a></li>
                            <li>Deposit Methods</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <section class="pt-60 pb-150">

            <div class="container">
                <div class="row row-payment">

                    <div class="col-md-12">
                        <div class="right float-right mb-5">
                            <a href="<?php echo $domain  ?>user/deposit/history.php" class="btn cmn-btn">
                                Deposit History
                            </a>
                        </div>
                    </div>




                </div>
            </div>
        </section>



        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-bg">
                    <div class="modal-header">
                        <strong class="modal-title method-name text-white" id="exampleModalLabel"></strong>
                        <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <?php
                    function generateRandomString($length = 10)
                    {
                        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
                    }


                    if (isset($_POST['next'])) {
                        $amount = $_POST['amount'];
                        $paymentMethod = $_POST['paymentMethod'];
                        $paymentId = $_POST['paymentId'];
                        $paymentImage = $_POST['paymentImage'];
                        
                        $deposit_id = generateRandomString(10);

                        $formattedDate = date("Y-m-d");
                        $time = date("H:m:s");


                        $sql_insert = mysqli_query($connection, "INSERT INTO `transations`(`transactionId`, `user`, `Amount`, `wallet`, `postbalance`, `date`,`time`,`type`) VALUES ('$deposit_id','$id','$amount','Deposit Wallet','$deposit','$formattedDate','$time','deposit')");



                        $query = mysqli_query($connection, "INSERT INTO `deposit`(`id`, `transactionId`, `user`, `payment_id`, `payment_name`, `payment_imge`, `amount`, `status`,`date`,`time`) VALUES ('','$deposit_id','$id','$paymentId','$paymentMethod','$paymentImage','$amount','continue','$formattedDate','$time')");
                         mysqli_error($connection);
                        if ($query) {
                            echo "<script>
                            window.onload = ()=>{
                                setTimeout(()=>{
                                window.open('./payment-proof/?payment=$deposit_id','_self')
                                },1000)
                            };
                        </script>";
                        } else {
                            echo "<script>
                                    window.onload = ()=>{
                                        Model('Deposit Failed','red');
                                    };
                                </script>";
                        }
                    }

                    ?>
                    <form method="post" class="register">
                        <input type="hidden" class="paymentMethod" name="paymentMethod" value="">
                        <input type="hidden" name="paymentId" class="paymentId">
                        <input type="hidden" name="paymentImage" class="paymentImage">

                        <div class="modal-body">

                            <div class="form-group">
                                <label>Enter Amount:</label>
                                <div class="input-group">
                                    <input id="amount" type="text" class="form-control form-control-lg" name="amount" placeholder="0.00" required autocomplete="off">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text currency-addon addon-bg">USD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" name="next" class="btn-md cmn-btn">Next</button>
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
                            <a href=""><img src="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png" alt="image"></a>
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
                            <p>© 2024 <a href="<?php echo $domain ?>" class="base--color">capitalvault Shareholders</a>. All rights reserved</p>
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


<<<<<<< HEAD
=======
    
>>>>>>> d002925c6586deb004c49819c41f92eb6999ae5a
    <script>
        $(document).ready(function() {
            "use strict";
            $('.deposit').on('click', function() {
                var id = $(this).data('id');
                var paymentMethod = $(this).data('payment');
                var limit = $(this).data('limit');
                var image = $(this).data('img');



                $('.paymentMethod').val(paymentMethod)
                $('.paymentId').val(id)
                $('.paymentImage').val(image)
                $('.limit').val(limit)
                $('.modal-title').html(`Payment By ${paymentMethod}`)
                // var result = $(this).data('resource');
                // var minAmount = $(this).data('min_amount');
                // var maxAmount = $(this).data('max_amount');
                // var baseSymbol = "USD";
                // var fixCharge = $(this).data('fix_charge');
                // var percentCharge = $(this).data('percent_charge');

                // var depositLimit = `Deposit Limit: ${minAmount} - ${maxAmount}  ${baseSymbol}`;
                // $('.depositLimit').text(depositLimit);
                // var depositCharge = `Charge: ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' +percentCharge + ' % ' : ''}`;
                // $('.depositCharge').text(depositCharge);
                // $('.method-name').text(`Payment By  ${result.name}`);
                // $('.currency-addon').text(baseSymbol);

                // $('.edit-currency').val(result.currency);
                // $('.edit-method-code').val(result.method_code);
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



        // Array of objects for payment methods
        const paymentMethods = [{
                id: 1,
                paymentMethod: "Bitcoin",
                limit: "100 - 1000000 USD",
                charge: "0 USD + 0%",
                image: "<?php echo $domain  ?>users/assets/images/payment/4.png"
            },
            {
                id: 2,
                paymentMethod: "Ethereum",
                limit: "100 - 1000000 USD",
                charge: "0 USD + 0%",
                image: "<?php echo $domain  ?>users/assets/images/payment/2.png"
            },
            {
                id: 4,
                paymentMethod: "USDT(TRC20)",
                limit: "100 - 1000000 USD",
                charge: "0 USD + 0%",
                image: "<?php echo $domain  ?>users/assets/images/payment/3.png"
            },
            {
                id: 5,
                paymentMethod: "Dogecoin",
                limit: "800 - 1000000 USD",
                charge: "0 USD + 0%",
                image: "<?php echo $domain  ?>users/assets/images/payment/1.png"
            }
        ];

        // Function to create HTML for each payment method
        function createPaymentMethodCards(paymentMethods) {
            const container = document.querySelector('.row-payment');

            paymentMethods.forEach(method => {
                const cardHtml = `
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="card">
                <div class="card-body b-primary">
                    <div class="row justify-content-center">
                    <div class="col-md-5 col-sm-12">
                        <img src="${method.image}" class="card-img-top w-100" alt="${method.paymentMethod}">
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <ul class="list-group text-center">
                        <li class="list-group-item">${method.paymentMethod}</li>
                        <li class="list-group-item">Limit : ${method.limit}</li>
                        <li class="list-group-item">Charge - ${method.charge}</li>
                        <li class="list-group-item">
                            <button type="button" data-img="${method.image}" data-limit="${method.limit}}" data-id="${method.id}" data-payment="${method.paymentMethod}" class="btn deposit cmn-btn w-100" data-toggle="modal" data-target="#exampleModal">
                            Deposit
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
            });
        }

        // Function to show modal form on button click
        // function setupModalForm() {
        //     const buttons = document.querySelectorAll('.btn.deposit');

        //     buttons.forEach(button => {
        //         button.addEventListener('click', event => {
        //             const id = button.getAttribute('data-id');
        //             const paymentMethod = button.getAttribute('data-payment-method');

        //             const modalTitle = document.querySelector('.modal-title');
        //             modalTitle.textContent = paymentMethod;

        //             // Additional logic to populate the modal form can be added here
        //         });
        //     });
        // }

        // Call the functions to generate cards and setup modal form
        document.addEventListener('DOMContentLoaded', () => {
            createPaymentMethodCards(paymentMethods);
            // setupModalForm();
        });
    </script>





</body>

</html>

</body>

</html>