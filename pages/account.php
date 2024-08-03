<div class="account">
   <div class="account1">
        <span class="route">Dashboard > <i>Home</i></span>

        <div class="welcome">
            <span class="inwelcome">Hello <i id="username">Zanytech</i>,</span>
            <p>
            Welcome back to   <?php echo  str_replace(' Connections', '', $admin['company']); ?>. Your success in network marketing is a reflection of your mindset. 
            Believe in yourself, stay disciplined, and never underestimate the power of consistency.
            </p>
            <div class="exe">
                <div class="exe1 exedot">
                    <span class="exe1icon exeicon2"><i class='bx bx-cart-add'></i></span>
                    <span class="exeh">Expenses.</span>
                    <span class="exebal exebalr">
                        <i id="usys">KSH</i>
                        <i id="expense">500</i>
                    </span>
                </div>

                <div class="exe1">
                    <span class="exe1icon"><i class='bx bx-dollar'></i></span>
                    <span class="exeh">Profit</span>
                    <span class="exebal exebalg">
                        <i id="usys">KSH</i>
                        <i id="profit">000</i>
                    </span>
                </div>


            </div>
        </div>
        git remote set-url --add git@github.com:primeboogie/earnempire
        git remote set-url --delete origin git@github.com:primeboogie/earnempire

        <div class="moneydiv bg1">
            <span id="inmoneyh">
            Current Balance
            </span>

            <span id="inmoneyb">
            <i id="usys">
                KES
            </i>
            <i id="curbal">
                86,555
            </i>
            </span>

            <span id="inmoneyi">
                <i class="fa-solid fa-wallet"></i>
            </span>
            
        </div>

        <div class="moneydiv bg2">
            <span id="inmoneyh">
            Welcome Bonus 
            </span>

            <span id="inmoneyb">
            <i id="usys">
                KES
            </i>
            <i id="curwel">
                86,555
            </i>
            </span>

            <span id="inmoneyi">
            <i class="fa-solid fa-hand-holding-heart"></i>
            </span>
            
        </div>

        
    
        <div class="moneydiv bg3">
            <span id="inmoneyh">
                Total Withdarawals
            </span>
            
            <span id="inmoneyb">
            <i id="usys">
                KES
            </i>
            <i id="curwithtotal">
                86,555
            </i>
            </span>
            
            <span id="inmoneyi">
                <i class="fa fa-money-bill-alt"></i>
            </span>
        </div>

        <div class="moneydiv bg4">
            <span id="inmoneyh">
            Pending  Withdarawals
            </span>

            <span id="inmoneyb">
            <i id="usys">
                KES
            </i>
            <i id="curwithpen">
                86,555
            </i>
            </span>

            <span id="inmoneyi">
            <i class="fa-solid fa-money-bill-trend-up"></i>
            </span>
            
        </div>

        <div class="moneydiv bg5">
            <span id="inmoneyh">
            Trivia Balance
                </span>
                
                <span id="inmoneyb">
                    <i id="usys">
                        KES
                    </i>
                    <i id="curtivia">
                        86,555
            </i>
            </span>

            <span id="inmoneyi">
            <i class="fa fa-question"></i>
            </span>
            
        </div>

        <div class="moneydiv bg6">
            <span id="inmoneyh">
                Youtube Balance
            </span>
            
            <span id="inmoneyb">
                <i id="usys">
                    KES
                </i>
                <i id="curyou">
                86,555
            </i>
        </span>
        
        <span id="inmoneyi">
        <i class="fa-brands fa-youtube"></i>
        </span>
            
        </div>

        <div class="moneydiv bg7">
            <span id="inmoneyh">
                Tiktok Balance
                </span>
            
            <span id="inmoneyb">
                <i id="usys">
                    KES
            </i>
            <i id="curtiktok">
                86,555
            </i>
        </span>

            <span id="inmoneyi">
            <i class="fa-brands fa-tiktok"></i>
            </span>
            
        </div>
        
        <div class="moneydiv bg8">
            <span id="inmoneyh">
                Spin Balance
            </span>

            <span id="inmoneyb">
            <i id="usys">
                KES
            </i>
            <i id="curspin">
                86,555
            </i>
            </span>

            <span id="inmoneyi">
            <i class="fa fa-spinner"></i>
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
        <span>Today's Progress:  <i> <i id="yourpoints"></i>2 Points</i></span>
        <span>How Much To Go:  <i> <i id="rempoint">3</i> Points</i></span>
    </div>
    <div class="bonusbtn">
        <button class="authbtn" >Info</button>
        <button class="authbtn" id="activateme">Claim</button>
    </div>
   </div>

   <div class="share">
    <span class="afflink">
        Your Affilate Link:
    </span>
    <input type="text" id="linkinput" readonly value="<?php echo $admin['domain'].'/reg/'?>" disbaled>
    <button class="authbtn" id="linkbtn"><i class="fa-solid fa-link"></i> Copy Link</button>
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
<!-- 


git add .
git commit -m "Updated Dashboard"
git push

-->