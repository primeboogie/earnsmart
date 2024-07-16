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
            <span class="earntitle">
                <?php echo $admin['company']; ?>
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
            <div class="footer">
                @<?php echo date('Y') . ' ' . $admin['company']; ?>
            </div>
        </div>
    </div>
</body>
</html>