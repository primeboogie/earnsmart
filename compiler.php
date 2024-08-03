<link rel="stylesheet" href="<?php echo $domain;?>/css/compiler.css?<?php echo $newrand;?>">
<link rel="stylesheet" href="<?php echo $domain;?>/css/header.css?<?php echo $newrand;?>">
<link rel="stylesheet" href="<?php echo $domain;?>/css/navbar.css?<?php echo $newrand;?>">
</head>
<body>
    
<div class="overs" id="overs"> </div>
<section class="dots-container" id="loaderrr">
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
</section>
 <?php if(!$accountenv){ ?>

    <div class="mylink">
    <span class="mylinkh">Earn Empire Connetions</span>
    <span  class="usernames">Hi <i id="username"></i></span>
    <div class="linkdiv">
        <p>
        🌟 Welcome to Earn-Empire Connections! 🌟

        Activate your account to unlock all earning activities. 🚀💼

        Your activation balance is: <i id="actbals">0.00</i> 💰
        
        Let’s get started and achieve great things together! 🌟🚀
        </p>
        
        <?php if($actualbal > 0 ){ ?> 
        
            <form class="depoform" id="depoform">
            <span>Request Deposit</span>
            <div class="depoinputs">
            <input type="text" name="amount" placeholder="Amount">
            <input type="text" name="phone" placeholder="Phone">
            </div>
            <button  class="authbtn" >Request Deposit</button>
            </form>
        
        <?php  }else{ ?> 
            <form action="#" id="acvtivateme" >
                <button class="authbtn">Activate Me</button>
            </form>
        <?php  } ?>
            </div>
            </div>
            
       <?php  } ?>
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
                echo  strtoupper(str_replace('Connections', '', $admin['company']));
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
                    <a href="<?php echo $dev['root'];?>/withhistory"><i class="fa-solid fa-file-circle-check"></i>Withdrawal History</a>
                </div>
            </div>
            <div class="navdiv">
                <span class="navh">Products</span>
                <div class="navlinks">
                    <a href="<?php echo $dev['root'];?>/welcome"><i class="fa-solid fa-hand-holding-heart"></i> Welcome Bonus</a>
                    <a href="<?php echo $dev['root'];?>/agentbonus"><i class="fa fa-gift"></i> Daily Bonus</a>
                    <!-- <a href="<?php echo $dev['root'];?>/trivia"><i class="fa fa-question"></i> Trivia</a>
                    <a href="<?php echo $dev['root'];?>/tiktok"><i class="fa-brands fa-tiktok"></i> Tiktok</a>
                    <a href="<?php echo $dev['root'];?>/tiktok"><i class="fa-brands fa-youtube"></i> Youtube</a> -->
                    <div class="adiv">
                        <span id="spanspins"><i class="fa-solid fa-spinner"></i> Spins <i class="fa-solid fa-angle-down"></i></span>
                        <div class="alladiv" id="spins">
                            <a href="<?php echo $dev['root'];?>/freespin"><i class="fa-solid fa-circle-notch"></i> Free Spin</a>
                            <a href="<?php echo $dev['root'];?>/casionspin"><i class="fa fa-life-ring"></i> Casion Spin</a>
                        </div>
                    </div>
                    <a href="<?php echo $dev['root'];?>/forex"><i class="fa-solid fa-chart-gantt"></i> Forex</a>
                    <div class="adiv">
                        <span id="spanteams"><i class="fa fa-users"></i> My Team <i class="fa-solid fa-angle-down"></i></span>
                        <div class="alladiv" id="teams">
                            <a href="<?php echo $dev['root'];?>/team/1"><i class="fa-solid fa-square-check"></i> Level  1</a>
                            <a href="<?php echo $dev['root'];?>/team/2"><i class="fa-solid fa-dice"></i> Level  2</a>
                            <a href="<?php echo $dev['root'];?>/team/3"><i class="fa-solid fa-cubes"></i> Level  3</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navdiv">
                <span class="navh">Settings</span>
                <div class="navlinks">
                    <a href="<?php echo $dev['root'];?>/profile"><i class="fa fa-user"></i> User Profile</a>
                    <!-- <a href="<?php echo $admin['whatsapp_group'];?>"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                    <a href="<?php echo $admin['customer_care'];?>/"><i class="fa fa-headset"></i> Support</a> -->
                    <a href="#" id="logout"><i class="fa fa-sign-out-alt"></i> Logout</a>
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