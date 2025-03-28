<link rel="stylesheet" href="<?php echo $domain; ?>/css/compiler.css?<?php echo $newrand; ?>">
<link rel="stylesheet" href="<?php echo $domain; ?>/css/header.css?<?php echo $newrand; ?>">
<link rel="stylesheet" href="<?php echo $domain; ?>/css/navbar.css?<?php echo $newrand; ?>">
</head>

<body>
    <div id="notifications" class="fixed top-4 inset-x-0 flex flex-col items-center space-y-4 " style="z-index: 1000;"></div>


    <div class="overs" id="overs"> </div>
    <div class="movers" id="movers">

        <div class="mloader" id="loaderrrr">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
            <div class="bar6"></div>
            <div class="bar7"></div>
            <div class="bar8"></div>
            <div class="bar9"></div>

        </div>
    </div>



    <?php if (!$accountenv) { ?>

        <div class="mylink">
            <span class="mylinkh">Earn Power Connetions</span>
            <span class="usernames">Hi <i id="username"></i></span>
            <div class="linkdiv">
                <p>
                    🌟 Welcome to Earn-Power Connections! 🌟

                    Activate your account to unlock all earning activities. 🚀💼

                    Your activation balance is: <i id="usys"></i> <i id="actbals">0.00</i> 💰

                    Let’s get started and achieve great things together! 🌟🚀
                </p>

                <?php if ($actualbal > 0) { ?>


                    <?php if ($usercid) { ?>

                        <form class="depoform" id="depoform">
                            <span>Request Deposit</span>
                            <div class="depoinputs">
                                <input type="text" name="amount" id="actbalsv" class="bg-slate-300" placeholder="Amount" required>
                                <input type="text" name="phone" placeholder="Phone" required>
                            </div>
                            <button class="authbtn">Request Deposit</button>
                        </form>
                    <?php } else { ?>

                        <div class="manual" id="activemanualpay" style="display: none;">
                            <?php // require ""; 
                            ?>
                            <link rel="stylesheet" href="css/deposit.css">
                            
                                <div class="dipopro" id="activatepay" style="display: none;">
                                        <span class="formh"><i class="fa-solid fa-hand-holding-dollar"></i> Topup Account</span>
                                        <span class="formd">Deposit Balance: <i id="usys"></i>  <i id="actdip">0.00</i></span>
                                        <div class="allrapper" id="allrapper">


                                        </div>
                                </div>
                        </div>

                        <form class="depoform" id="otherspay" style="display: none;">
                            <span>Request Deposit</span>
                            <div class="depoinputs">
                                <input type="text" name="amount" id="actbalsv" class="bg-slate-300" placeholder="Amount" required>
                            </div>
                            <button class="authbtn" type="submit">Make Payment</button>
                        </form>
                        <form action="#" id="acvtivateme" style="display: none;">
                            <button class="authbtn">Go To Dashboard</button>

                        </form>

                    <?php  } ?>

                <?php  } else { ?>
                    <form action="#" id="acvtivateme">
                        <button class="authbtn"> Go To Dashboard</button>


                    </form>
                <?php  } ?>
            </div>
            <a href="#" class="authbtn logout removeline" id="logout"><i class="fa fa-sign-out-alt"></i> Logout</a>

        </div>

    <?php  } ?>
    <div class="root">
        <div class="header" id="section1">
            <div class="earnlogo">
                <img src="<?php echo $domain; ?>/images/earn-power.png" alt="" id="earnimgs">
            </div>

            <span class="earntitle larged">
                <?php echo  $admin['company']; ?>
            </span>

            <span class="earntitle smalld">
                <?php
                echo  strtoupper(str_replace('Connections', '', $admin['company']));
                ?>
            </span>

            <div class="iconsnav flex gap-2 bg-white p-2 px-4 rounded-md mr-2">
                <i class="fa fa-gift text-orange-500 hover:text-purple-500 text-base" onClick="window.location.href='<?php echo $dev['root']; ?>/agentbonus'"></i>
                <i class="fa-solid fa-bell text-orange-500 hover:text-purple-500 text-base" onClick="window.location.href='#<?php // echo $dev['root']; ?>/notification'" >
                <!-- <span class="absolute top-0 right-0 -mt-2 -mr-1 bg-red-500 text-white text-xs font-bold px-1.5 py-0.5 rounded-full">1</span> -->
                </i>
                <i class="fa-solid fa-list text-orange-500 hover:text-purple-500 text-base lg:hidden" id="menuid"></i>
            </div>
        </div>

        <div class="navbar" id="navbar">
            <div class="navdiv">
                <span class="navh">Main</span>
                <div class="navlinks" id="navh">
                    <a href="<?php echo $dev['root']; ?>/"><i class="fa fa-window-restore"></i> Dashboard</a>
                    <a href="<?php echo $dev['root']; ?>/share"><i class="fa fa-share-alt"></i> Share</a>
                    <a href="<?php echo $dev['root']; ?>/task"><i class="fas fa-tasks"></i> Tasks</a>
                </div>
            </div>
            <div class="navdiv">
                <span class="navh">Accounts</span>
                <div class="navlinks">
                    <a href="<?php echo $dev['root']; ?>/deposit"><i class="fa fa-money-bill"></i> Deposit</a>
                    <a href="<?php echo $dev['root']; ?>/clientpay"><i class="fab fa-paypal"></i> Pay For Client</a>
                    <a href="<?php echo $dev['root']; ?>/withdrawal"><i class="fa fa-money-bill-alt"></i>Withdraw</a>
                    <a href="<?php echo $dev['root']; ?>/withhistory"><i class="fa-solid fa-file-circle-check"></i>Withdrawal History</a>
                </div>
            </div>
            <div class="navdiv">
                <span class="navh">Products</span>
                <div class="navlinks">
                    <a href="<?php echo $dev['root']; ?>/welcome"><i class="fa-solid fa-hand-holding-heart"></i> Welcome Bonus</a>
                    <a href="<?php echo $dev['root']; ?>/agentbonus"><i class="fa fa-gift"></i> Daily Bonuses</a>
                    <a href="<?php echo $dev['root']; ?>/ads"><i class="fa-solid fa-rectangle-ad"></i> Ads Promotion</a>
                    <a href="<?php echo $dev['root']; ?>/trivia"><i class="fa fa-question"></i> Trivia</a>
                    <a href="<?php echo $dev['root']; ?>/tiktok"><i class="fa-brands fa-tiktok"></i> Tiktok</a>
                    <a href="<?php echo $dev['root']; ?>/youtube"><i class="fa-brands fa-youtube"></i> Youtube</a>
                    <div class="adiv">
                        <span id="spanspins"><i class="fa-solid fa-spinner"></i> Spins <i class="fa-solid fa-angle-down"></i></span>
                        <div class="alladiv" id="spins">
                            <a href="<?php echo $dev['root']; ?>/freespin"><i class="fa-solid fa-circle-notch"></i> Free Spin</a>
                            <a href="<?php echo $dev['root']; ?>/casinospin"><i class="fa fa-life-ring"></i> Casion Spin</a>
                        </div>
                    </div>
                    <a href="<?php echo $dev['root']; ?>/forex"><i class="fa-solid fa-chart-gantt"></i> Forex</a>
                    <div class="adiv">
                        <span id="spanteams"><i class="fa fa-users"></i> My Team <i class="fa-solid fa-angle-down"></i></span>
                        <div class="alladiv" id="teams">
                            <a href="<?php echo $dev['root']; ?>/team?1"><i class="fa-solid fa-square-check"></i> Level 1</a>
                            <a href="<?php echo $dev['root']; ?>/team?2"><i class="fa-solid fa-dice"></i> Level 2</a>
                            <a href="<?php echo $dev['root']; ?>/team?3"><i class="fa-solid fa-cubes"></i> Level 3</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navdiv">
                <span class="navh">Settings</span>
                <div class="navlinks">
                    <a href="<?php echo $dev['root']; ?>/profile"><i class="fa fa-user"></i> User Profile</a>
                    <!-- <a href="<?php // echo $admin['whatsapp_group']; 
                                    ?>"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                    <a href="<?php // echo $admin['customer_care']; 
                                ?>/"><i class="fa fa-headset"></i> Support</a> -->
                    <a href="#" class="logout" id="logout"><i class="fa fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>

        </div>

        <div class="main">
            <?php require $routedfile; ?>
        </div>


        <script type="module" src="<?php echo $domain; ?>/utils/all.js?<?php echo $newrand; ?>"></script>

        <script type="module" src="<?php echo $domain; ?>/utils/auth.js?<?php echo $newrand; ?>"></script>

</body>

</html>