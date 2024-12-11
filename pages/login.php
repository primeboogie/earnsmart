
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;900&display=swap');

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

<div id="notifications" class="fixed top-4 inset-x-0 flex flex-col items-center space-y-4 z-50"></div>

  
  <div class="containerss">
    <div class="heading">Sign In</div>
    <form class="form" action="#" id="login">
        <span class="mylabel"><a href="#">Username/Email </a></span>
      <input
      placeholder="Username"
      id="loginusername"
      name="username"
      type="text"
      class="input"
      required=""
      />
      <span class="mylabel"><a href="#">Password</a></span>
    <input
      placeholder="*** ***"
      id="password"
      name="password"
      type="password"
      class="input"
      required=""
    />
    <span class="forgot-passwordss"><a href="#">Forgot Password ?</a></span>
    <button value="Sign In" type="submit" id="logins" class="login-button"> Sign In <i class="fa-solid fa-right-to-bracket"></i> </button>
    <span class="tonextlink"><a href=<?php echo $admin['domain']."/reg"; ?>>Don't Have an Account? <i>SignUp</i></a></span>
  </form>
  <div class="social-account-containerss">
    <span class="title">Or Sign in with</span>
    <div class="social-accounts">
      <button class="social-button google">
        <svg
          viewBox="0 0 488 512"
          height="1em"
          xmlns="http://www.w3.org/2000/svg"
          class="svg"
        >
          <path
            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"
          ></path>
        </svg>
      </button>
      <button class="social-button apple">
        <svg
          viewBox="0 0 384 512"
          height="1em"
          xmlns="http://www.w3.org/2000/svg"
          class="svg"
        >
          <path
            d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"
          ></path>
        </svg>
      </button>
      <button class="social-button twitter">
        <svg
          viewBox="0 0 512 512"
          height="1em"
          xmlns="http://www.w3.org/2000/svg"
          class="svg"
        >
          <path
            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"
          ></path>
        </svg>
      </button>
    </div>
  </div>

<script src="utils/home.js"></script>

</body>
</html>