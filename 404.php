<?php 

require './auth/config.php';



// print_r($dev)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/404.css">
</head>
<body>

<h1>404</h1>
<div class="cloak__wrapper">
  <div class="cloak__container">
    <div class="cloak"></div>
  </div>
</div>
<div class="info">
  <h2>We can't find that page</h2>
  <p>We're fairly sure that page used to be here, but seems to have gone missing. 
    We do apologise on it's behalf.</p><a href="<?php echo $dev['root'] ?>" target="_blank" rel="noreferrer noopener">Home</a>
</div>

</body>
</html>