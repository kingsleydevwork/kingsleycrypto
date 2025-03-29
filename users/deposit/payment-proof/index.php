<?php

include('../../../server/connection.php');
include('../../../server/client/auth/index.php');
include('../../../server/config.php');


$reset = $domain . 'user/deposit';
if (isset($_GET['payment']) && $_GET['payment'] != '') {
  $transactionId = $_GET['payment'];

  $select = mysqli_query($connection, "SELECT * FROM `deposit` WHERE `transactionId`='$transactionId'");
  if (mysqli_num_rows($select)) {

    $row = mysqli_fetch_assoc($select);
    $amount = $row['amount'];
    $paymentMethod = $row['payment_name'];
    $user = $row['user'];
    
    $select1 = mysqli_query($connection, "SELECT * FROM `client` WHERE `id`='$user'");
     $rows = mysqli_fetch_assoc($select1);
     $email = $rows['email'];
     $fullname = $rows['firstname'] . ' ' . $rows['lastname'];
    
  } else {
    echo "<script>
                  window.onload = ()=>{
                      setTimeout(()=>{
                        window.open('$reset','_self')
                      },2000)
                  };
              </script>";
  }
} else {

  echo "<script>
        window.onload = ()=>{
            setTimeout(()=>{
              window.open('$reset','_self')
            },2000)
        };
    </script>";
}

require "../../PHPMailer/PHPMailerAutoload.php";


function smtpmailer($to, $from, $from_name, $subject, $body) {
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl'; // Using 'ssl' with port 465 as per your original configuration
    $mail->Host = 'mail.assetvest-shareholder.com';
    $mail->Port = 465; // Or 587 if using 'tls'
    $mail->Username = 'support@assetvest-shareholder.com';
    $mail->Password = 'support@assetvest-shareholder.com'; // Use your actual email password

    $mail->IsHTML(true);
    $mail->From = $from;
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);

    // Enable SMTP debugging
    // $mail->SMTPDebug = 2; // 0 = off, 1 = client messages, 2 = client and server messages
    // $mail->Debugoutput = 'html'; // Output format for debugging

    if (!$mail->Send()) {
        // Log error or handle failure
        error_log('Email sending failed: ' . $mail->ErrorInfo);
        return false;
    }

    return true;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="UTgb7FkpErVJvOX0MjenZl45sN6X11AiQQGvvnxU">
  <title><?php  echo $sitename ?> - Deposit Confirm</title>
  <meta name="description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
  <meta name="keywords" content="bitcoin,investment,trading,assetvest,asset,asssetvest-trading,Assetvest Shareholder">
  <link rel="shortcut icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/favicon.png" type="image/x-icon">


  <link rel="apple-touch-icon" href="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Assetvest Shareholder - Deposit Confirm">

  <meta itemprop="name" content="Assetvest Shareholder - Deposit Confirm">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png">

  <meta property="og:type" content="website">
  <meta property="og:title" content="Assetvest Shareholder - A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers">
  <meta property="og:description" content="A Global Full Reserve Equity Investment Management Built On Decentralized Ledgers. We help people achieve their goals by providing the right funding, wealth management, and insurance advice.">
  <meta property="og:image" content="<?php echo $domain  ?>users/assets/images/seo/636b9388b9a611667994504.png" />
  <meta property="og:image:type" content="image/png" />
  <meta property="og:image:width" content="600" />
  <meta property="og:image:height" content="315" />
  <meta property="og:url" content="<?php echo $domain  ?>user/deposit/manual">

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
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold//css/bootstrap-fileinput.css">
  <!-- dashdoard main css -->
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold//css/main.css">
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold//css/custom.css">
  <link rel="stylesheet" href="<?php echo $domain  ?>users/assets/templates/bit_gold/css/color.php?color=2468ef&secondColor=2c2c2c">
  <style type="text/css">
    .withdraw-thumbnail {
      max-width: 220px;
      max-height: 220px
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
    <?php include('../../../components/client/das_navbar.php') ?>
    <!-- header-section end  -->


    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="black">


      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Welcome Back!</h2>
            <ul class="page-breadcrumb">
              <li><a href="https://www.assetvest-trading.com">User</a></li>
              <li>Deposit Confirm</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <section class="cmn-section">
      <div class="container">
        <div class="row mb-60-80 justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body  ">
                <?php

                if (isset($_POST['pay'])) {

                 

                 
                        $image = $_POST['proof'];
                        $date = date('Y-m-d');
                        $time = date('H-m-s a');
                        $transactionId  = $_POST['transactionId'];

                      

                        $update = mysqli_query($connection, "UPDATE `deposit` SET `payment_proof`='$image',`date`='$date',`time`='$time',`status`='pending' WHERE `transactionId`='$transactionId'");
                        
                        
                        
                        
                        
                       echo mysqli_error($connection);
                        
                        
                        $message = "<html>";
                        $message .= "<body style=\"margin: 0%; padding: 0%;\">";
                        $message .= "<link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">";
                        $message .= "<section style=\"width: 100%; font-family: 'Roboto', sans-serif; background-color: #f1f2f3; padding: 20px; color: #333;\">";
                        $message .= "<div style=\"width: 90%; margin: 0 auto; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);\">";
                        $message .= "<div style=\"background-color: #e1e1e1; padding: 20px; border-radius: 8px 8px 0 0; display: flex; align-items: center; justify-content: center;\">";
                        $message .= "<img src=\"https://assetvest-shareholder.com/assets/images/logoIcon/logo.png\" alt=\"Assetvest\" style=\"width: 150px; height: 100px; margin-right: 10px;\">";
                        $message .= "<span style=\"font-size: 24px; font-weight: 500; color: #333; text-align: center;\"></span>";
                        $message .= "</div>";
                        $message .= "<div style=\"padding: 20px;\">";
                        $message .= "<p>Hi $fullname,</p>";
                        $message .= "<p>Your deposit request of <strong> $amount USD</strong> via <strong>$paymentMethod</strong> was submitted successfully.</p>";
                        $message .= "<h2 style=\"font-size: 18px; margin-top: 20px;\">Details of your Deposit:</h2>";
                        $message .= "<p><strong>Amount:</strong> $amount USD</p>";
                        $message .= "<p style=\"color: red;\"><strong style=\"color: black;\">Charge:</strong> 0 USD</p>";
                        $message .= "<p><strong>Conversion Rate:</strong> 1 USD = 1 USD</p>";
                        $message .= "<p><strong>Payable:</strong> $amount USD</p>";
                        $message .= "<p><strong>Pay via:</strong> $paymentMethod</p>";
                        $message .= "<p><strong>Transaction Number:</strong> $transactionId</p>";
                        $message .= "</div>";
                        $message .= "</div>";
                        $message .= "</section>";
                        $message .= "</body>";
                        $message .= "</html>";
                        
                        $from = "support@assetvest-shareholder.com";
$from_name = "AssetVest Support";
$subject = 'AssetVest Shareholder Deposit Request';
                        
                           $result = smtpmailer($email, $from, $from_name, $subject, $message);
                           
                       
                          
                    
                        
                        if($update && $result){
                                  echo "<script>
                                  window.onload = ()=>{
                                      Model('Your deposit is under views .','green');
                                      setTimeout(()=>{
                                        window.open('../history.php','_self')
                                      },3000)
                                  };
                              </script>";
                        }else{
                          echo "<script>
                            window.onload = ()=>{
                                Model('Sorry, Something went wrong.','red');
                            };
                        </script>";
                        }
                    
                }

                ?>
                <form method="POST" >
                  <input type="hidden" name="transactionId" value="<?php echo $transactionId ?>">
                  <div class="row">

                    <div class="col-md-12 text-center">
                      <p class="text-center mt-2">You have requested <b class="text-success"><?php echo $amount ?> USD</b> , Please pay <b class="text-success"><?php echo $amount ?> $</b> for successful payment </p>
                      <h4 class="text-center mb-4">Please click on the copy address button and send BTC to address.</h4>


                      <input class="my-4 text-center" type="text" value="bc1qm7tc4e4e986nsjrzwk9v0vmd4mg6wyzquvx7dj" id="myInput" readonly>
                      <button onclick="myFunction()">Copy Wallet address</button>

                      <script>
                        function myFunction() {
                          var copyText = document.getElementById("myInput");
                          copyText.select();
                          copyText.setSelectionRange(0, 99999)
                          document.execCommand("copy");
                          alert("Copied the text: " + copyText.value);
                        }
                      </script>

                    </div>



                    <div class="col-md-12">
                      <div class="form-group">
                        <label><strong>Payment Proof <span class="text-danger">*</span> </strong></label>
                        <br>

                        <input type="text" name="proof"  required/>

                        </div>



                      </div>
                    </div>




                    <div class="col-md-12">
                      <div class="form-group">
                        <button name="pay" type="submit" class="btn cmn-btn btn-block mt-2 text-center">Pay Now</button>
                      </div>
                    </div>

                  </div>

                </form>
              </div>
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
              <p>© 2024 <a href="<?php echo $domain ?>" class="base--color">Assetvest Shareholder </a>. All rights reserved</p>
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

  <script src="<?php echo $domain  ?>users/assets/templates/bit_gold//js/bootstrap-fileinput.js"></script>
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