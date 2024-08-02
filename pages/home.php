
</head>
<body id="body">
<section class="dots-container" id="loaderrr">
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
</section>

    <div class="overs" id="overs"> </div>
    <div class="jump">
        <span class="eec"><i>EEC</i> - Earnempire.com</span>
        <span class="jumphead">Lets Jump back in!</span>
        <p>Welcome back to Earn-Empire Connections
            <br>
            The family awaits inside! ✨ 
        </p>
        <div class="actions">
            <button class="btn" id="showLogin">Login</button>
            <button class="btn"  id="showSignup" >Create-Account</button>
        </div>
    </div>
<!-- handletrans -->
    <div class="container " id="containerin">
    <div class="ftitle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="killlogin" id="killlogin" >
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
                
                        <span class="title">Earn Empire Connections</span> 
        </div>

        <form class="form" id="login">
        <span class="fromtitle">Sign In</span>
            <div class="allinputs">
                    <div class="singleinput"  id="logusername">
                        <label for="username">Username</label>
                        <input placeholder="Username" name="username"  id="loginusername" autocomplete="off" required  type="text">
                    </div>
                    <div class="singleinput">
                        <label for="password" >Password</label>
                        <input placeholder="Password"  autocomplete="off" required name="password" class="password input" type="password">
                    </div>
            <button class="authbtn" type="submit"  id="logins">Login</button>
        </div>
        </form>
    </div>



    <div class="container <?php echo $upline ? 'handletrans' : ''; ?>" id="containerup">
        <div class="ftitle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="killlogin" id="killlSignup" >
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
                
                        <span class="title">Earn Empire Connections</span> 
        </div>

        <form class="form" id="register">

            
            <span class="fromtitle">Sign Up</span>
            <span class="upline">
                Invited By: <?php echo $upline?? 'None'; ?>
            </span>
            <div class="allinputs">
                    <div class="singleinput"  id="username">
                        <label for="username">Username</label>
                        <input placeholder="Username" name="username"  id="sinusername" autocomplete="off" required  type="text">
                    </div>

                    <div class="singleinput" id="email" >
                        <label for="email">Email</label>
                        <input placeholder="Email" name="email"  id="sinemail" required class="" type="email">
                    </div>

                    <div class="singleinput">
                        <label for="country">Country</label>
                        <input placeholder="--Choose Country--" name="countryid" required id="countryid" class="" type="text">
                    </div>

                    <div class=" singleinput" id="phones">
                        <label for="phone">Phone</label>
                        <div class="forphone">
                        <span  id="phone">(+000)</span>
                        <input placeholder="Phone"  required name="phone" id="sinphone" class="" type="number">
                        </div>
                    </div>

                    <div class="singleinput">
                        <label for="password" >Password</label>
                        <input placeholder="Password" autocomplete="off"  autocomplete="new-password" required name="password" class="password input" type="password">
                    </div>

                    <div class="singleinput">
                        <label for="repassword">Confrim Password</label>
                        <input placeholder="Confirm Password" autocomplete="new-password" name="repassword" id="repassword" required class="" type="password">
                    </div>

            <input  name="country" id="country" hidden type="text">
            <input  name="upline" hidden  type="text" value="<?php echo $upline ?? 'EarnEmpire';  ?>">
            <button class="authbtn" type="submit">SignUp</button>
        </div>
        </form>

    </div>
    <div class="countrylist" id="countrylist">
        <span class="chead">Select your Country</span>
        <div class="allc" id="allist">
        </div>
    </div>

    <div class="ball white"></div>
    <div class="ball white" style="animation-delay: 1s;"></div>
    <div class="ball white" style="animation-delay: 2s;"></div>
    
    <div class="ball green"></div>
    <div class="ball green" style="animation-delay: 1.5s;"></div>
    <div class="ball green" style="animation-delay: 3s;"></div>
    
    <div class="ball blue"></div>
    <div class="ball blue" style="animation-delay: 2s;"></div>
    <div class="ball blue" style="animation-delay: 4s;"></div>

    <img class="colorset" src="<?php echo $admin['domain']; ?>/images/glow_evn.svg" alt="">
    
    <script type="module" src="<?php echo $domain; ?>/utils/home.js?<?php echo $newrand; ?>"></script>
</body>
</html>