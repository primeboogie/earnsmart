<?php


    require './auth/config.php';
    require './auth/func.php';

    $dfile = "pages/home.php";
    $dcss = "/css/home.css";
    $title =  $admin['company'];
    $desc = "🚀". $admin['company'] . " . 💰 Your success in network marketing is a reflection of your mindset. Believe in yourself, 
                stay disciplined, and never underestimate the power of consistencys! 🌐🌍 Home of Family";
    $logo = 'images/earn1.png';
    $keywords = ['Earn-Empire Connections','Empire','Earn Connection', 'Empire Connections', 'Affilate Marketting', 'Marketting'];
    $summary = $desc;

    $routes = [
        '/' => [
            'file' => 'pages/account.php',
            'style' => '/css/account.css',
            'secured' => True,
                'meta' => [
                    'title' => $title,
                    'desc' => $desc,
                    'logo' =>  $logo,
                    'keywords' => $keywords,
                    'summary' => $summary,
                    'any3' => 'Home',
                        ],
                ],
        '/home' => [
            'file' => 'pages/home.php',
            'style' => '/css/home.css',
            'secured' => False,
            'meta' => [
                'title' => $title,
                'desc' => $desc,
                'logo' =>  $logo,
                'keywords' => $keywords,
                'summary' => $summary,
                'any3' => 'Home',
            ],
        ],
        '/reg' => [
            'file' => 'pages/home.php',
            'style' => '/css/home.css',
            'secured' => False,
            'meta' => [
                'title' => $title,
                'desc' => $desc,
                'logo' =>  $logo,
                'keywords' => $keywords,
                'summary' => $summary,
                'any3' => 'Home',
            ],
        ],
        '/clientpay' => [
            'file' => 'pages/clientpay.php',
            'style' => '/css/clientpay.css',
            'secured' => True,
                ],
                
        '/deposit' => [
            'file' => 'pages/deposit.php',
            'style' => '/css/deposit.css',
            'secured' => True,
                ],
                
        '/profile' => [
            'file' => 'pages/profile.php',
            'style' => '/css/profile.css',
            'secured' => True,
                ],
                
        '/spin' => [
            'file' => 'pages/spin.php',
            'style' => '/css/spin.css',
            'secured' => True,
                ],
                
        '/team' => [
            'file' => 'pages/team.php',
            'style' => '/css/team.css',
            'secured' => True,
                ],
                
        '/tiktok' => [
            'file' => 'pages/tiktok.php',
            'style' => '/css/tiktok.css',
            'secured' => True,
                ],
                
        '/trivia' => [
            'file' => 'pages/trivia.php',
            'style' => '/css/trivia.css',
            'secured' => True,
                ],
                
        '/withdrawal' => [
            'file' => 'pages/withdrawal.php',
            'style' => '/css/withdrawal.css',
            'secured' => True,
                ],
                
        '/transactions' => [
            'file' => 'pages/transactions.php',
            'style' => '/css/transactions.css',
            'secured' => True,
                ],

        '/404' => [
                'file' => '404.php',
                'style' => '/css/404.css',
                'secured' => False,
                'meta' => [
                            'title' => '404 Unkown-Page',
                            'desc' => 'Oops Seems You lost go back to home page',
                            'logo' =>  $logo,
                            'keywords' => $keywords,
                            'summary' => $summary,
                            'any3' => 'Home',
                ],
        ],
    ];

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

    $host = $_SERVER['HTTP_HOST'];
    $request_uri = $_SERVER['REQUEST_URI'];
    $current_url = $protocol . $host . $request_uri;



    $passing = parse_url($current_url);
    
    $routepath= $passing['path'] ?? '/login';
    $local = str_replace($dev['root'], '', $routepath);
    $extracted = explode('/', trim($local, '/'));
    $routesearch = '/'.$extracted[0];

    $found = False;
    $environment = False;

    foreach ($routes as $key => $value) {
        if ($key === $routesearch) {
            if(isset($_COOKIE['token'])){

                    $token = $_COOKIE['token'];
                    $apiendpoint = "http://localhost/officialsystem/?action=auth";
                    $headers = [
                        "Content-Type: application/json",
                    ];
                    $body = [
                        "token" => $token,
                    ];
                    $response = usefetch($apiendpoint."/api/checktoken", 'POST', $headers, $body);

            
                
                    
                    if(isset($response['status']) && $response['status'] === true){
                    
                        if($value['secured']){
                            $dfile = $value['file'];
                            $dcss = $value['style'];
                            $environment = True;

                        } else {
                            header("location: ".$dev['root']."/");
                        }
                    } else {
                        setcookie("token", "", time() - 3600, "/");
                        
                        if (isset($extracted[0]) && $extracted[0] == '404'){
                            $dfile = $value['file'];
                            $dcss = $value['style'];
                        }

                        header("location: ".$dev['root']."/home");
                    }
            } 

            if (isset($extracted[0]) && $extracted[0] == 'reg'){
                $upline = $extracted[1] ?? false;
            }
            if (isset($extracted[0]) && $extracted[0] == '404'){
                $dfile = $value['file'];
                $dcss = $value['style'];
            }

            $found = True;
            break;
        }
    }
    if(!$found){
        header("location: ".$dev['root']."/404");
    } 


    $response = [
        'file' => $dfile,
        'style' => $dcss,
        'logo' => $logo,
        'title' => $title,
        'desc' => $desc,
        'keywords' => implode(", ", $keywords),
        'summary' => $summary,
        'environment' => $environment,
        'upline' => $upline ?? False,
    ];
