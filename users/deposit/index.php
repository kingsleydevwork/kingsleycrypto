<?php

include '../../server/connection.php';
include '../../server/config.php';
include '../../server/client/auth/index.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="d6hxsZC1klHtrGBQczeerKuks2NCHlGMEPWy4Mro">
    <title><?php echo $sitename ?> - Deposit Methods</title>
    <meta name="description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta name="keywords" content="bitcoin,investment,trading,capitalvault,asset,asssetvest-trading,capitalvault Shareholder">
    <link rel="shortcut icon" href="<?php echo $domain ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="<?php echo $domain ?>users/assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $sitename ?> - Deposit Methods">

    <meta itemprop="name" content="<?php echo $sitename ?> - Deposit Methods">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo $domain ?>users/assets/images/seo/636b9388b9a611667994504.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $sitename ?> - A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers">
    <meta property="og:description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
    <meta property="og:image" content="<?php echo $domain ?>users/assets/images/seo/636b9388b9a611667994504.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="<?php echo $domain ?>user/deposit">

    <meta name="twitter:card" content="summary_large_image">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/vendor/bootstrap.min.css">
    <link rel="icon" href="<?php echo $domain ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" type="image/png" href="<?php echo $domain ?>users/assets/images/logoIcon/favicon.png" />
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/vendor/animate.min.css">
    <!-- slick slider css -->
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/vendor/slick.css">
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/vendor/dots.css">
    <!-- dashdoard main css -->
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/main.css">
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold//css/custom.css">
    <link rel="stylesheet" href="<?php echo $domain ?>users/assets/templates/bit_gold/css/color.php?color=2468ef&secondColor=2c2c2c">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
    <style>
        .image-holder{    
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;

        }
        .image-holder img{
            height:200px !important;
            width:200px !important;
        }
        @media(max-width:300px){
            .image-holder img{
                height:100% !important;
                width:100% !important;
            }
        }
    </style>


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
        <?php include '../../components/client/das_navbar.php' ?>
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
                <div class="row ">

                    <div class="col-md-12">
                        <div class="right float-right mb-5">
                            <a href="<?php echo $domain ?>users/deposit/history.php" class="btn cmn-btn">
                                Deposit History
                            </a>
                        </div>
                    </div>

                    <div class="row row-payment">


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
                        $amount        = $_POST['amount'];
                        $paymentMethod = $_POST['paymentMethod'];
                        $paymentId     = $_POST['paymentId'];
                        $paymentImage  = $_POST['paymentImage'];

                        $deposit_id = generateRandomString(10);

                        $formattedDate = date("Y-m-d");
                        $time          = date("H:m:s");

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
                            <a href=""><img src="<?php echo $domain ?>users/assets/images/logoIcon/logo.png" alt="image"></a>
                            <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                                <li><a href="<?php echo $domain ?>links/privacy-amp-policy/180">Privacy &amp; Policy</a>
                                </li>
                                <li><a href="<?php echo $domain ?>links/terms-amp-condition/181">Terms &amp; Condition</a>
                                </li>
                                <li><a href="<?php echo $domain ?>links/cookie-policy/226">Cookie Policy</a>
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
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold//js/vendor/jquery-3.5.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold//js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold//js/vendor/slick.min.js"></script>
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold//js/vendor/wow.min.js"></script>
    <!-- dashboard custom js -->
    <script src="<?php echo $domain ?>users/assets/templates/bit_gold//js/app.js"></script>




    <script>
        (function() {
            "use strict";
            $(document).on("change", ".langSel", function() {
                window.location.href = "<?php echo $domain ?>change/" + $(this).val();
            });

            $('.policy').on('click', function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.get('<?php echo $domain ?>cookie/accept', function(response) {
                    iziToast.success({
                        message: response,
                        position: "topRight"
                    });
                    $('.cookie__wrapper').addClass('d-none');
                });
            });
        })();
    </script>


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
        (function() {
            "use strict";
            $(document).on("change", ".langSel", function() {
                window.location.href = "<?php echo $domain ?>change/" + $(this).val();
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
            const container = document.querySelector('.row-payment');; // Select the container element

            // Clear any existing content in the container
            container.innerHTML = '';

            // Iterate over each payment method and create the HTML for each

            paymentMethods.forEach(method => {
                let imageLink = "<?php echo $domain ?>users/assets/images/payment/" + method.image
                const cardHtml = `
        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card">
                <div class="card-body b-primary">
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-sm-12 image-holder" c>
                            <img src="${imageLink}" class="card-img-top w-100" alt="${method.payment_method}">
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <ul class="list-group text-center">
                                <li class="list-group-item">${method.payment_method}</li>
                                <li class="list-group-item">Limit : ${method.limit_range}</li>
                                <li class="list-group-item">Charge - ${method.charge}</li>
                                <li class="list-group-item">
                                    <button type="button" data-img="${imageLink}" data-limit="${method.limit_range}" data-id="${method.id}" data-payment="${method.payment_method}" class="btn deposit cmn-btn w-100" data-toggle="modal" data-target="#exampleModal">
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
                // Append the new card HTML to the container
                container.innerHTML +=  cardHtml;

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

                    console.log(paymentImage, paymentMethod)

                });
            });
        }
    </script>





</body>

</html>

</body>

</html>