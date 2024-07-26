<link rel="stylesheet" href="<?php echo $domain;?>/css/compiler.css?<?php echo $newrand;?>">
<link rel="stylesheet" href="<?php echo $domain;?>/css/header.css?<?php echo $newrand;?>">
<link rel="stylesheet" href="<?php echo $domain;?>/css/navbar.css?<?php echo $newrand;?>">
</head>
<body>
<div class="overs " id="overs"> </div>
<section class="dots-container" id="loaderrr">
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
</section>

    <div class="root">
        <div class="header">
            <div class="earnlogo">
                <img src="<?php echo $domain;?>/images/earn11.png" alt="" id="earnimgs">
            </div>
            <span class=" menui">
            <i class="fa-solid fa-list" id="menuid"></i>
            </span>

            <span class="earntitle larged">
                <?php echo  $admin['company']; ?>
            </span>
            <span class="earntitle smalld">
                <?php 
                echo  strtoupper(str_replace('Connections', '', $admin['company'])); ;
                ?>
            </span>
            
            <div class="iconsnav">
            <i class="fa-solid fa-user"></i>
            </div>
        </div>

        <div class="navbar" id="navbar">
            <div class="navdiv">
                <span class="navh">Main</span>
                <div class="navlinks">
                    <a href="<?php echo $dev['root'];?>/"><i class="fa fa-window-restore"></i> Dashboard</a>
                    <a href="<?php echo $dev['root'];?>/share"><i class="fa fa-share-alt"></i> Share</a>
                </div>
            </div>
            <div class="navdiv">
                <span class="navh">Accounts</span>
                <div class="navlinks">
                    <a href="<?php echo $dev['root'];?>/deposit"><i class="fa fa-money-bill"></i> Deposit</a>
                    <a href="<?php echo $dev['root'];?>/clientpay"><i class="fab fa-paypal"></i> Pay For Client</a>
                    <a href="<?php echo $dev['root'];?>/withdrawal"><i class="fa fa-money-bill-alt"></i>Withdrawal</a>
                    <a href="<?php echo $dev['root'];?>/withhistory"><i class="fa-solid fa-file-circle-check"></i>Withdrawl History</a>
                </div>
            </div>
            <div class="navdiv">
                <span class="navh">Products</span>
                <div class="navlinks">
                    <a href="<?php echo $dev['root'];?>/agentbonus"><i class="fa-solid fa-hand-holding-heart"></i> Welcome Bonus</a>
                    <a href="<?php echo $dev['root'];?>/agentbonus"><i class="fa fa-gift"></i> Daily Bonus</a>
                    <a href="<?php echo $dev['root'];?>/trivia"><i class="fa fa-question"></i> Trivia</a>
                    <a href="<?php echo $dev['root'];?>/tiktok"><i class="fa-brands fa-tiktok"></i> Tiktok</a>
                    <a href="<?php echo $dev['root'];?>/tiktok"><i class="fa-brands fa-youtube"></i> Youtube</a>
                    <a href="<?php echo $dev['root'];?>/spin"><i class="fa fa-spinner"></i> Spins</a>
                    <a href="<?php echo $dev['root'];?>/spin"><i class="fa-solid fa-chart-gantt"></i> Forex</a>
                    <a href="<?php echo $dev['root'];?>/team"><i class="fa fa-users"></i> My Team</a>
                </div>
            </div>
            <div class="navdiv">
                <span class="navh">Settings</span>
                <div class="navlinks">
                    <a href="<?php echo $dev['root'];?>/profile"><i class="fa fa-user"></i> User Profile</a>
                    <a href="<?php echo $admin['whatsapp_group'];?>"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                    <a href="<?php echo $admin['customer_care'];?>/"><i class="fa fa-headset"></i> Support</a>
                    <a href="<?php echo $dev['root'];?>/"><i class="fa fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>

        </div>

        <div class="main">
            <?php require $routedfile; ?>
        </div>

        <!-- <div class="footer">
            <a href="<?php // echo $dev['root']; ?>/trivia">

                @<?php //echo date('Y') . ' ' . $admin['company']; ?>
            </a>
        </div>
         -->
    </div>
    <script type="module" src="<?php echo $domain; ?>/utils/all.js?<?php echo $newrand; ?>"></script>
    <script type="module" src="<?php echo $domain; ?>/utils/auth.js?<?php echo $newrand; ?>"></script>

</body>
</html>