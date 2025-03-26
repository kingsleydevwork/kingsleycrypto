<header class="header">
      <div class="header__bottom">
        <div class="container">
          <nav class="navbar navbar-expand-xl p-0 align-items-center">
            <a class="site-logo site-title" href="index.html"><img src="<?php echo $domain  ?>assets/images/logoIcon/logo.png" alt="site-logo"></a>
            <ul class="account-menu responsive-account-menu ml-3">
              <li class="icon"><a href="login.html"><i class="las la-user"></i></a></li>
            </ul>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu-toggle"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <ul class="navbar-nav main-menu ml-auto mr-5">
                <li><a href="<?php  echo $domain?>">Home</a></li>
                <li><a href="<?php  echo $domain ?>about">About</a></li>
                <li><a href="<?php  echo $domain ?>contact">Contact</a></li>

                <!--<li class="nav-item dropdown">-->
                <!--  <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="servicesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Services-->
                <!--  </a>-->
                <!--  <div class="dropdown-menu" aria-labelledby="servicesDropdown">-->
                <!--    <div class="___class_+?18___">-->
                <!--      <div class="dropdown-item">-->
                <!--        <a class="d-block text-dark" href="services/nfp.html">Non Farm Payrolls-->
                <!--          (NFP)</a><br>-->
                <!--        <a class="d-block text-dark" href="services/masternode.html">Masternode</a>-->
                <!--        <a class="d-block text-dark" href="services/financial-services.html">Financial-->
                <!--          Services</a>-->
                <!--        <a class="d-block text-dark" href="services/ipos.html">Mutual Funds and Initial-->
                <!--          Public-->
                <!--          Offerings-->
                <!--          (IPOs)</a>-->
                <!--        <a class="d-block text-dark" href="services/comodity-trading.html">Comodity-->
                <!--          Trading</a>-->
                <!--        <a class="d-block text-dark" href="services/pms.html">Portfolio Management-->
                <!--          Services</a>-->
                <!--        <a class="d-block text-dark" href="services/structured-finance.html">Structured-->
                <!--          Finance</a>-->
                <!--        <a class="d-block text-dark" href="services/consulting-services.html">Consulting-->
                <!--          Services</a>-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--</li>-->

                <li><a href="<?php  echo $domain ?>plan">Plans</a></li>
                <li><a href="#FAQs">FAQs</a></li>
                <li><a href="<?php  echo $domain ?>#lan">Change language</a></li>


              </ul>
              <div class="nav-right">
                <ul class="account-menu ml-3">
                  <li class="icon"><a href="<?php echo $domain ?>login"><i class="las la-user"></i></a>
                  </li>
                </ul>
                <select class="select d-inline-block w-auto ml-xl-3 langSel">
                  <option value="en" selected>English</option>
                </select>
              </div>
            </div>
          </nav>
        </div>
      </div><!-- header__bottom end -->
    </header>