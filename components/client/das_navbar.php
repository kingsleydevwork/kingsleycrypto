<header class="header">
            <div class="header__bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-xl p-0 align-items-center">
                        <a class="site-logo site-title" href="https://www.assetvest-trading.com"><img src="<?php echo $domain  ?>assets/images/logoIcon/logo.png" alt="site-logo"></a>
                        <ul class="account-menu responsive-account-menu ml-3">
                            <li class="icon"><a href="<?php echo $domain  ?>users/dashboard"><i class="las la-users"></i></a></li>
                        </ul>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu-toggle"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto">
                                <li> <a href="<?php echo $domain  ?>users/dashboard">Dashboard</a></li>
                                <li><a href="<?php echo $domain  ?>users/investment">Investment</a></li>
                                <li><a href="<?php echo $domain  ?>users/deposit">Deposit</a></li>
                                <li><a href="<?php echo $domain  ?>users/withdraw">Withdraw</a></li>
                                <li><a href="<?php echo $domain  ?>users/transactions/">Transactions</a></li>
                                <li style="" class="menu_has_children"><a href="#0">Referrals</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo $domain  ?>users/referral/">Referred userss</a></li>
                                        <li style="display: none;"><a href="#">Referral Commissions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li  class="menu_has_children "><a href="#0">Account</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo $domain  ?>users/setting/profile-setting">Profile Setting</a></li>
                                        <li><a href="<?php echo $domain  ?>users/setting/change-password">Change Password</a></li>
                                        <li><a href="<?php echo $domain  ?>users/support_ticket">
                                                Support Ticket</a></li>
                                        <li><a href="#">Promotional Tool</a></li>
                                        <li><a href="<?php echo $domain  ?>users/two_factor">2FA Security</a></li>
                                        <li><a href="<?php echo $url ?>"> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="nav-right">
                                <ul class="account-menu ml-3">
                                    <li class="icon"><a href="<?php echo $domain  ?>users/dashboard"><i class="las la-users"></i></a></li>
                                </ul>
                                <select class="select d-inline-block w-auto ml-xl-3 langSel">
                                    <option value="en" selected>English</option>
                                </select>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- header__bottom end -->
        </header>