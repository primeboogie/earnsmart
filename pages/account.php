<script src="https://cdn.tailwindcss.com"></script>
<script src="https://unpkg.com/lucide@latest"></script>
<style>
    .card {
      position: relative;
      width: 100% !important;
      height: 150px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      padding: 20px;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Ccircle cx='50' cy='50' r='3'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-size: 20px 20px;
        }

    .card .headers {
      font-size: 16px;
      font-weight: bold;
      text-transform: uppercase;
      border-radius: 10px;
      background: rgba(26, 26, 26, 0.2);
      padding: .3rem .9rem;
    }

    .card .content {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      gap: .9em ;
    }

    .card .content .balance {
      display: flex;
      flex-direction: column;
    }

    .card .content .balance .currency {
      font-size: 18px;
      color: #ffeb3b;
      font-weight: bold;
    }

    .card .content .balance .amount {
      font-size: 24px;
      font-weight: bold;
    }

    .myenclose,
    .card .icon {
      font-size: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(238, 245, 21, 0.4);
      width: 60px;
      height: 60px;
      border-radius: 50%;
    }
    .myenclose{
        
        background: rgba(238, 245, 21, 0.2);
        font-size: 21px;
        border: .1em solid white;
        width: 40px;
        height: 40px;
    }

    .card .icon img {
      width: 40px;
      height: 40px;
      
    }


 .ringo {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(237, 234, 233, 0.8);
            border-radius: 50%;
            animation: wave 3s infinite;
            margin-bottom: -5px;
            margin-right: -5px;
        }

    .ringo:nth-child(1) { animation-delay: 0s; }
    .ringo:nth-child(2) { animation-delay: 0.6s; }
    .ringo:nth-child(3) { animation-delay: 1.2s; }
    .ringo:nth-child(4) { animation-delay: 1.8s; }
    .ringo:nth-child(5) { animation-delay: 2.4s; }

    @keyframes wave {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        100% {
            transform: scale(5);
            opacity: 0;
        }
    }

  </style>

<div class="account">
  <div class="account1 ">
  <span class="route text-white">Dashboard > <i style="color: yellow">Home</i></span>

  <div class="welcome w-full    m-auto rounded-xl shadow-lg overflow-hidden relative pb-6">
  <div class="bg-pattern absolute inset-0 opacity-10"></div>
  <div class="p-0 relative z-10">
            <div class="border-b-4 w-full p-4 font-bold text-white items-center text-2xl flex gap-2">
            <i class="fa-regular fa-user myenclose" onClick="window.location.href='<?php echo $dev['root']; ?>/profile'"></i> 
            <p id="username">ZanyTech</p>
            <i class="fa-solid fa-circle-check text-lg text-blue-500"></i>
            </div>
            <div class="flex items-center gap-2 text-white/80 mb-4 pl-4 py-2 relative w-full">
                <i data-lucide="wallet" class="w-4 h-4"></i>
                <span class="text-sm font-bold">Your Total Profits</span>


                <div class="w-30 rounded-bl-xl  py-4 px-2 h-auto pb-4 absolute right-0 bg-gray-900/30  grid place-content-center align-item-start top-0">
                    <span class="text-base font-normal text-yellow-300 ">Total Capital:</span>
                    <div class=" text-base  text-yellow-300 text-center font-bold text-nowrap">
                    <i id="usys" class="not-italic">
  KES
  </i>
  <i id="expense" class="not-italic">
  0.00
  </i>
                    </div>
                </div>
            </div>
            <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">

            
            <div class="text-white text-xl font-bold mb-8 pl-4 flex gap-2 items-center justify-start"   style="font-family: 'Signika Negative', sans-serif;" >
                 <p id="profit">0.00</p>
                  <i class="text-sm not-italic"  id="usys" >KES</i>
            </div>

            <div class="grid grid-cols-4 gap-4 px-6 place-content-evenly">
                <button class="flex flex-col items-center gap-1">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i data-lucide="dollar-sign" class="w-5 h-5 text-white" 
                        onClick="window.location.href='<?php echo $dev['root']; ?>/withdrawal'"></i>
                    </div>
                    <span class="text-white/80 text-xs"  >Withdraw</span>
                </button>
                <button class="flex flex-col items-center gap-1">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i data-lucide="wallet" class="w-5 h-5 text-white" onClick="window.location.href='<?php echo $dev['root']; ?>/deposit'"></i>
                    </div>
                    <span class="text-white/80 text-xs" >Deposit</span>
                </button>
                <button class="flex flex-col items-center gap-1">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i data-lucide="clock" class="w-5 h-5 text-white" onClick="window.location.href='<?php echo $dev['root']; ?>/task'"></i>
                    </div>
                    <span class="text-white/80 text-xs" >Task</span>
                </button>
                <button class="flex flex-col items-center gap-1">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i data-lucide="link-2" class="w-5 h-5 text-white" onClick="window.location.href='<?php echo $dev['root']; ?>/share'"></i>
                    </div>
                    <span class="text-white/80 text-xs" >Share</span>
                </button>
                <!-- <button class="flex flex-col items-center gap-1">
                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                        <i data-lucide="percent" class="w-5 h-5 text-white"></i>
                    </div>
                    <span class="text-white/80 text-xs">Swap</span>
                </button> -->
            </div>
        </div>
    </div>


  <div class="card bg2">
  <div class="headers">Current Balance</div>
  <div class="content">
  <div class="icon">
  <img src="https://cdn-icons-png.flaticon.com/512/7826/7826512.png" alt="Wallet Icon">
  </div>
  <div class="balance">
  <span class="currency" id="usys">KES</span>
  <span class="amount" id="curbal">0.00</span>
  </div>
  </div>

  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>

  </div>

  <div class="card bg5">
  <div class="headers">Welcome Bonus </div>
  <div class="content">
  <div class="icon">
  <img src="https://cdn-icons-png.flaticon.com/512/9592/9592247.png" alt="Wallet Icon">
  </div>
  <div class="balance">
  <span class="currency" id="usys">KES</span>
  <span class="amount" id="curwel">0.00</span>
  </div>
  </div>
  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>

  </div>


  <div class="card bg9">
  <div class="headers">Total Withdrawals</div>
  <div class="content">
  <div class="icon">
  <img src="https://cdn-icons-png.flaticon.com/512/2108/2108625.png" alt="Wallet Icon">
  </div>
  <div class="balance">
  <span class="currency" id="usys">KES</span>
  <span class="amount"  id="curwithtotal" >0.00</span>
  </div>
  </div>
  <!-- <div class="splash"></div> -->

  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>

  </div>

  <div class="card bg4">
  <div class="headers">Pending Withdrawals</div>
  <div class="content">
  <div class="icon">
  <img src="https://cdn-icons-png.flaticon.com/512/9046/9046450.png" alt="Wallet Icon">
  </div>
  <div class="balance">
  <span class="currency" id="usys">KES</span>
  <span class="amount"  id="curwithpen" >0.00</span>
  </div>
  </div>
  <!-- <div class="splash"></div> -->

  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>
  <div class="ringo"></div>
  </div>

  <div class="moneydiv md1">
    <span id="inmoneyh">
    Ads  Balance
    </span>

    <span id="inmoneyb">
    <i id="usys">
    KES
    </i>
    <i id="curadd">
    0.00
    </i>
    </span>

    <span id="inmoneyi">
    <i class="fa-solid fa-rectangle-ad"></i>
    </span>

  </div>

  <div class="moneydiv md2">
  <span id="inmoneyh">
  Trivia Balance
  </span>

  <span id="inmoneyb">
  <i id="usys">
  KES
  </i>
  <i id="curtivia">
  0.00
  </i>
  </span>

  <span id="inmoneyi">
  <i class="fa fa-question"></i>
  </span>

  </div>

  <div class="moneydiv md3">
  <span id="inmoneyh">
  Youtube Balance
  </span>

  <span id="inmoneyb">
  <i id="usys">
  KES
  </i>
  <i id="curyou">
  0.00
  </i>
  </span>

  <span id="inmoneyi">
  <i class="fa-brands fa-youtube"></i>
  </span>

  </div>

  <div class="moneydiv md4">
  <span id="inmoneyh">
  Tiktok Balance
  </span>

  <span id="inmoneyb">
  <i id="usys">
  KES
  </i>
  <i id="curtiktok">
  0.00
  </i>
  </span>

  <span id="inmoneyi">
  <i class="fa-brands fa-tiktok"></i>
  </span>
  </div>


</div>

   <div class="account10">
    <span class="dbonus">DAILY BONUSES</span>
    
    <div class="balanceCard">
        <div class="headerss" >ZanyTech</div>
        
        <div class="circle" id="circles">
            <div class="percentage"id="percent" >66%</div>
            </div>
    </div>

    <div class="bonusinf">
        <span>Today's Target:  <i > <i id="points"></i> Points</i></span>
        <span>Target Reward:  <i> <i id="reward"></i> <i id="usys"></i></i></span>
        <span>Today's Progress:  <i> <i id="yourpoints"></i> Points</i></span>
        <span>How Much To Go:  <i> <i id="rempoint"></i> Points</i></span>
    </div>
    <div class="bonusbtn">
    <button class="authbtn" id="dailyclaim">Claim</button>
    </div>
   </div>

   <div class="share">
    <span class="afflink">
        Your Affilate Link:
    </span>
    <input type="text" id="linkinput" readonly value="<?php echo $admin['domain'].'/reg/'?>" disbaled>
    <!-- chill -->
    <!-- <button class="authbtn" id="linkbtn"><i class="fa-solid fa-link"></i> Copy Link</button> -->
</div>

   <div class="account12">
    <span class="account12h">Profile-Summary</span>
    <div class="account12more">
        <ul>
            <li><span>Username:</span> <i id="username">Zanytech</i></li>
            <li><span>Email:</span> <i id="email">zanytech@zanytech.site</i></li>
            <li><span>Phone:</span> <i id="phone">000000000</i></li>
            <li><span>Joined:</span> <i class="act" id="join" >24-08-2024</i></li>
            <li><span>Account Status:</span> <i id="ustatus"class="act">Active</i></li>
        </ul>
    </div>

   </div>

   <!-- <script type="module" src="<?php //echo $domain; ?>/utils/std.js?<?php //echo $newrand; ?>"></script> -->

</div>
<script>
        lucide.createIcons();
    </script>