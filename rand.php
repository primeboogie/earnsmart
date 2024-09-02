<?php
require "./route.php";

$file = $response['file'];
$style = $response['style'];
$logo = $response['logo'];
$title = $response['title'];
$desc = $response['desc'];
$keywords = $response['keywords'];
$summary = $response['summary'];
$environment = $response['environment'];
$upline = $response['upline'];
$domain = $admin['domain'];
$backend = $admin['backend'];

$newrand = rand(rand("0","80000"),"99000");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo $domain; ?>/<?php echo $logo; ?>">
    <link rel="shortcut icon"  href="<?php echo $domain; ?>/<?php echo $logo; ?>" type="image/x-icon">
    <meta name="keywords" content="<?php echo htmlspecialchars($keywords, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="author" content="Boogie-Coin">
    <meta name="description" content="<?php echo $desc; ?>">

    <link rel="canonical" href="<?php echo $domain; ?>">

    <meta name="robots" content="index, follow">

    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $desc; ?>">
    <meta property="og:image" content="<?php echo $domain; ?>/<?php echo $logo; ?>">
    <meta property="og:url" content="<?php echo $domain; ?><?php $nfile = trim($file, "."); echo $nfile; ?>">

    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $desc; ?>">
    <meta name="twitter:image" content="<?php echo $domain; ?>/<?php echo $logo; ?>"> 
    <meta name="twitter:hashtags" content="<?php echo $keywords; ?>">
    <meta name="twitter:card" content="<?php echo $summary; ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>      
    <script
           src="https://kit.fontawesome.com/0b7d271d94.js"
           crossorigin="anonymous"
         ></script>

         <link rel="stylesheet" href="<?php  echo $domain; ?>/css/screen.css?<?php  echo $newrand; ?>">
        <link rel="stylesheet" href="<?php  echo $domain;  echo $style."?".$newrand; ?>">
        <link rel="stylesheet" href="<?php  echo $domain; ?>/css/device.css?<?php  echo $newrand; ?>">   
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script type="application/ld+json">
    {
        "@context": " "https://boogiecoin.com",
        "@type": "WebPage",
        "name": "Boogie Coin",
        "description": "Quality In Every Byte.",
        "url": " "https://boogiecoin.com",
        "datePublished": "2024-02-03",
        "author": {
            "@type": "Person",
            "name": "Boogie Coin"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Boogie coin",
            "logo": {
                "@type": "ImageObject",
                "url":  "https://boogiecoin.com/siteimage/bcpng.png",
            }
        },
        "image": {
            "@type": "ImageObject",
            "url":  "https://boogiecoin.com/siteimage/bcpng.png";
            "height": 800,
            "width": 1200
        }
    }
</script>
    <?php 
    if($environment){
        $routedfile = $file;
        require "compiler.php";
    } else {
        require $file;
    }
    ?>
