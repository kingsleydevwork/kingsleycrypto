
    
    <style>
        
        body {
                body {
                    margin: 0;
                    padding: 0;
                }
                
                .whatsapp-icon {
                    position: fixed;
                    left: 20px;
                    bottom: 20px;
                    background-color: #25D366; /* WhatsApp green */
                    border-radius: 50%;
                    padding: 15px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    z-index: 9999; /* Ensure it's on top */
                }
                
                .whatsapp-icon img {
                    width: 30px;
                    height: 30px;
                }
                
                .whatsapp-icon a {
                    display: block;
                    text-align: center;
                    color: white;
                    text-decoration: none;
                }

        
    </style>
    
    
    
    <div class="whatsapp-icon">
        <a href="https://wa.me/15879102053" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        </a>
    </div> 
<header class="header">
            <div class="header__bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-xl p-0 align-items-center">
                        <a class="site-logo site-title" href=""><img src="<?php echo $domain  ?>users/assets/images/logoIcon/logo.png" alt="site-logo"></a>
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
                                        <li><a href="<?php echo $domain  ?>users/transactions">Commision</a></li>
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
        <!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 19116501;
    window.__lc.integration_name = "manual_onboarding";
    window.__lc.product_name = "livechat";
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/19116501/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
