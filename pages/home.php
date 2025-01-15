<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;900&display=swap');
  
  body {
    margin: 0;
    font-family: 'Inter', sans-serif;
    background-color: #f4f4f4;
    color: #333;
  }

  /* Header styles */
  header {
    background-color: #6a0dad; /* Purple theme */
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%; /* Ensures full width */
  }

  header nav {
    width: 100%; /* Makes sure links span full width */
    display: flex;
    justify-content: space-between;
  }

  header a {
    text-decoration: none;
    font-size: 16px;
    color: #fff;
    font-weight: bold;
    margin: 0 10px; /* Adjust spacing */
    transition: color 0.3s ease, text-shadow 0.3s ease;
  }

  header a:hover {
    color: #ffe600;
    text-shadow: 0px 2px 5px rgba(255, 230, 0, 0.6);
  }

  /* Home page styles */
  h1 {
    text-align: center;
    font-size: 36px;
    color: orangered;
    margin: 50px 0;
  }

  h1 span {
    font-weight: bold;
    color: purple;
  }

  .tonextlink {
    display: inline-block;
    text-align: center;
    margin: 10px 0;
  }

  .tonextlink a {
    font-size: 14px;
    color: #6a0dad; /* Purple theme */
    text-decoration: underline;
    text-align: center;
    font-style: normal;
    transition: color 0.3s ease;
  }

  .tonextlink a:hover {
    color: orangered;
  }
</style>
</head>
<body>

<header>
  <nav>
    <a href="<?php echo $admin['domain'].'/login'; ?>">Login</a>
    <a href="<?php echo $admin['domain'].'/reg'; ?>">SignUp</a>
  </nav>
</header>

<h1>Welcome to <span>Earn-Power Connections</span></h1>

</body>
</html>
