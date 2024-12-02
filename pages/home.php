
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;900&display=swap');

<<<<<<< HEAD
.containerss {
  max-width: 350px;
  background: #f8f9fd;
  background: linear-gradient(
    0deg,
    rgb(255, 255, 255) 0%,
    rgb(244, 247, 251) 100%
  );
  border-radius: 40px;
  padding: 25px 35px;
  border: 5px solid rgb(255, 255, 255);
  box-shadow: rgb(129, 18, 202) 0px 30px 30px -20px;
  margin: 0 auto;
}
=======
    <div class="overs" id="overs"> </div>
    <div class="jump">
        <span class="eec">Earn Smart Connections</span>
        <p>Welcome back to Earn-Sart Connections
            <br>
            The family awaits inside! ✨ 
        </p>
        <div class="actions">
            <button class="authbtn" id="showLogin">Login <i class="fa-solid fa-right-to-bracket"></i></button>
            <button class="authbtn"  id="showSignup" >SignUp <i class="fa-solid fa-user-plus"></i> </button>
        </div>
    </div>
<!-- handletrans -->
    <div class="container " id="containerin">
    <div class="ftitle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="killlogin" id="killlogin" >
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
                
                        <span class="title">Earn Smart Connections</span> 
        </div>
>>>>>>> 313ece8 (Save local changes before pull)

.heading {
  text-align: center;
  font-weight: 900;
  font-size: 30px;
  color: rgb(129, 18, 202);
  font-family: Inter, ui-sans-serif, system-ui, sans-serif;
}

.form {
  margin-top: 20px;
}

.form .input {
  width: 100%;
  background: white;
  border: none;
  padding: 15px 20px;
  border-radius: 20px;
  margin-top: 5px;
  margin-bottom: 15px;
  box-shadow: rgba(137, 29, 209, 0.63) 0px 10px 10px -5px;
  border-inline: 2px solid transparent;
}

.form .input::-moz-placeholder {
  color: rgb(170, 170, 170);
}

.form .input::placeholder {
  color: rgb(170, 170, 170);
}

.form .input:focus {
  outline: none;
  border-inline: 2px solid rgb(129, 18, 202);
}
.form .mylabel {
    color: #686565;
    margin-top: 1rem;
  font-family: Inter, ui-sans-serif, system-ui, sans-serif;

}

.form .forgot-passwordss {
  display: block;
  margin-top: 10px;
  margin-left: 10px;
  text-align: right;
  width: 100%;
  padding-right: 1rem;
}

.form .forgot-passwordss a {
  font-size: 14px;
  color: red;
  text-decoration: none;
  font-weight: 500;
}

.form .login-button {
  display: block;
  width: 100%;
  font-weight: bold;
  background: linear-gradient(
    45deg,
    rgb(129, 18, 202) 0%,
    rgb(168, 69, 234) 100%
  );
  color: white;
  padding-block: 15px;
  margin: 20px auto;
  border-radius: 20px;
  box-shadow: rgb(129, 18, 202) 0px 20px 10px -15px;
  border: none;
  transition: all 0.2s ease-in-out;
  font-family: Inter, ui-sans-serif, system-ui, sans-serif;
  display: flex;
  gap: .9em;
  justify-content: center;
  align-items: center;
  
}
.tonextlink i{
    font-size: 14px;
    color: blue;
    text-decoration: underline ;
    text-align: center;
    margin: 0 auto;
    width: 100%;
  font-style: normal;
}

.form .login-button:hover {
  transform: scale(1.03);
  box-shadow: rgb(129, 18, 202) 0px 23px 10px -20px;
}

.form .login-button:active {
  transform: scale(0.95);
  box-shadow: rgb(129, 18, 202) 0px 15px 10px -10px;
}

.social-account-containerss {
  margin-top: 25px;
  display: none;
}

.social-account-containerss .title {
  display: block;
  text-align: center;
  font-size: 10px;
  color: rgb(170, 170, 170);
}

.social-account-containerss .social-accounts {
  width: 100%;
  display: flex;
  justify-content: center;
  gap: 15px;
  margin-top: 5px;
}

.social-account-containerss .social-accounts .social-button {
  background: linear-gradient(45deg, rgb(0, 0, 0) 0%, rgb(112, 112, 112) 100%);
  border: 5px solid white;
  padding: 5px;
  border-radius: 50%;
  width: 40px;
  aspect-ratio: 1;
  display: grid;
  place-content: center;
  box-shadow: rgb(129, 18, 202) 0px 12px 10px -8px;
  transition: all 0.2s ease-in-out;
}

.social-account-containerss .social-accounts .social-button .svg {
  fill: white;
  margin: auto;
}

.social-account-containerss .social-accounts .social-button:hover {
  transform: scale(1.2);
}

.social-account-containerss .social-accounts .social-button:active {
  transform: scale(0.9);
}

.agreement {
  display: block;
  text-align: center;
  margin-top: 15px;
}

.agreement a {
  text-decoration: none;
  color: #0099ff;
  font-size: 9px;
}

</style>

<body>
  
<h1>hOME pAGE</h1>
<span class="tonextlink"><a href=<?php echo $admin['domain']."/login"; ?>><i>Login</i></a></span>
<span class="tonextlink"><a href=<?php echo $admin['domain']."/reg"; ?>><i>SignUp</i></a></span>



<<<<<<< HEAD
=======
    <div class="container <?php echo $upline ? 'handletrans' : ''; ?>" id="containerup">
        <div class="ftitle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="killlogin" id="killlSignup" >
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg>
                
                        <span class="title">Earn Smart Connections</span> 
        </div>

        <form class="form" id="register" autocomplete="off">

            
            <span class="fromtitle">Sign Up</span>
            <span class="upline">
                 <?php echo $upline ? "Invited By: $upline" : ''; ?>
            </span>
            <div class="allinputs">
                    <div class="singleinput"  id="username">
                        <label for="username">Username</label>
                        <input placeholder="Username" name="username"  id="sinusername" autocomplete="off" required  type="text">
                    </div>

                    <div class="singleinput" id="email" >
                        <label for="email">Email</label>
                        <input placeholder="Email" name="email"  id="sinemail" autocomplete="off" required class="" type="email">
                    </div>

                    <div class="singleinput">
                        <label for="country"> Country</label>
                        <span  name="countryid"  autocomplete="off" required id="countryid" class="likeInput" type="text">Choose Country</span>
                    </div>

                    <div class=" singleinput" id="phones">
                        <label for="phone">Phone</label>
                        <div class="forphone">
                        <span  id="phone">(+000)</span>
                        <input placeholder="Phone"  required name="phone" autocomplete="off"  id="sinphone" class="" type="number">
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
        <span class="dont" id="changesigin">Already Have An Account? <i>Signin</i></span>

        </div>
        </form>

    </div>
    <div class="countrylist" id="countrylist">
        <i class="closeC" id="closeC">x</i>
        <span class="chead">Select your Country</span>
        <div class="allc" id="allist">
        </div>
    </div>


    <!-- <img class="colorset" src="<?php echo $admin['domain']; ?>/images/glow_evn.svg" alt=""> -->
    
    <script type="module" src="<?php echo $domain; ?>/utils/home.js?<?php echo $newrand; ?>"></script>
>>>>>>> 313ece8 (Save local changes before pull)
</body>
</html>