
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

.mform {
  /* margin-top: 20px; */
  display: grid;
  place-items: start;
}

.mform .input {
  width: 100%;
  background: white;
  border: none;
  padding: 9px 20px;
  border-radius: 20px;
  margin-bottom: 7px;
  box-shadow: rgba(137, 29, 209, 0.63) 0px 10px 10px -5px;
  border-inline: 2px solid transparent;
}

.mform .input::-moz-placeholder {
  color: rgb(170, 170, 170);
}

.mform .input::placeholder {
  color: rgb(170, 170, 170);
}

.mform .input:focus {
  outline: none;
  border-inline: 2px solid rgb(129, 18, 202);
}
.mform .mylabel {
    color: #686565;
    margin-top: 0.5rem;
  font-family: Inter, ui-sans-serif, system-ui, sans-serif;

}


.mform .login-button {
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
  /* gap: .9em; */
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

.mform .login-button:hover {
  transform: scale(1.03);
  box-shadow: rgb(129, 18, 202) 0px 23px 10px -20px;
}

.mform .login-button:active {
  transform: scale(0.95);
  box-shadow: rgb(129, 18, 202) 0px 15px 10px -10px;
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

@media only screen and (max-width: 480px) {
  body{
    margin: 0px;
    padding: 0px;
    display: block;
    place-items: unset; 
  }

    .containerss{
        min-width: 100%;
        min-height: 100%;
        padding: 45px 9px;
        overflow: auto;
        border-radius: 0px;
    }
  
}

</style>

<body>
  
  <div class="containerss">
    <div class="heading">Sign Up</div>
    <form class="mform" action="#" id="login">
        <span class="mylabel"><a href="#">Username </a></span>
      <input
      placeholder="Username"
      id="loginusername"
      name="username"
      type="text"
      class="input"
      required=""
      />
      
      <span class="mylabel"><a href="#">Email </a></span>
      <input
      placeholder="Email"
      id="loginusername"
      name="email"
      type="text"
      class="input"
      required=""
      />
      <span class="mylabel"><a href="#">Country </a></span>
      <input
      placeholder="Username"
      id="loginusername"
      name="country"
      type="text"
      class="input"
      required=""
      />

      <span class="mylabel"><a href="#">Phone </a></span>
      <input
      placeholder="Username"
      id="loginusername"
      name="phone"
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
    <span class="mylabel"><a href="#">Retype Password</a></span>
    <input
      placeholder="*** ***"
      id="password"
      name="password"
      type="password"
      class="input"
      required=""
    />
    <button value="Sign In" type="submit" id="logins" class="login-button"> Sign In <i class="fa-solid fa-right-to-bracket"></i> </button>
    <span class="tonextlink"><a href=<?php echo $admin['domain']."/login"; ?>>Don't Have an Account? <i>SignUp</i></a></span>
  </form>


<script src="utils/home.js"></script>

</body>
</html>