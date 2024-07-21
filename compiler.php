<link rel="stylesheet" href="<?php echo $domain;?>/css/compiler.css?<?php echo $newrand;?>">
<link rel="stylesheet" href="<?php echo $domain;?>/css/header.css?<?php echo $newrand;?>">
<link rel="stylesheet" href="<?php echo $domain;?>/css/navbar.css?<?php echo $newrand;?>">
</head>
<body>
    <div class="root">
        <div class="header">
            <div class="earnlogo">
                <img src="<?php echo $domain;?>/images/earn1.png" alt="">
            </div>
            <span class="earntitle larged">
                <?php echo  $admin['company']; ?>
            </span>
            <span class="earntitle smalld">
                <?php 
                echo  str_replace('Connections', '', $admin['company']); ;
                ?>
            </span>
            
            <div class="iconsnav">
            <i class="fa-solid fa-expand"></i>
            <i class="fa-solid fa-compress"></i>
            <i class="fa-solid fa-user"></i>
            </div>
        </div>

        <div class="navbar">
            nav
        </div>

        <div class="main">
            <?php require $routedfile; ?>
        </div>

        <div class="footer">
            <a href="<?php echo $dev['root']; ?>/trivia">

                @<?php echo date('Y') . ' ' . $admin['company']; ?>
            </a>
        </div>
        
    </div>
</body>
</html>