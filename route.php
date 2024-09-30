<?php

    require './auth/func.php';

    $dfile = "pages/home.php";
    $dcss = "/css/home.css";
    $title =  $admin['company'];
    $desc = "🚀". $admin['company'] . " . 💰 Your success in network marketing is a reflection of your mindset. Believe in yourself, 
                stay disciplined, and never underestimate the power of consistencys! 🌐🌍 Home of Family";
    $logo = 'images/earn3.jpg';
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
                '/account' => [
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
        '/share' => [
            'file' => 'pages/share.php',
            'style' => '/css/share.css',
            'secured' => True,
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
                
        '/freespins' => [
            'file' => 'pages/freespin.php',
            'style' => '/css/freespin.css',
            'secured' => True,
                ],

                
        '/forex' => [
            'file' => 'pages/forex.php',
            'style' => '/css/forex.css',
            'secured' => True,
                ],
                
        '/team' => [
            'file' => 'pages/team.php',
            'style' => '/css/team.css',
            'secured' => True,
                ],
                
        '/welcome' => [
            'file' => 'pages/welcome.php',
            'style' => '/css/welcome.css',
            'secured' => True,
                ],
                '/task' => [
                    'file' => 'pages/task.php',
                    'style' => '/css/task.css',
                    'secured' => True,
                        ],
        '/tiktok' => [
            'file' => 'pages/tiktok.php',
            'style' => '/css/tiktok.css',
            'secured' => True,
                ],
                '/youtube' => [
                    'file' => 'pages/youtube.php',
                    'style' => '/css/youtube.css',
                    'secured' => True,
                        ],
                
        '/trivia' => [
            'file' => 'pages/trivia.php',
            'style' => '/css/trivia.css',
            'secured' => True,
                ],
                
        '/transactions' => [
            'file' => 'pages/transactions.php',
            'style' => '/css/transactions.css',
            'secured' => True,
                ],
                
        '/withhistory' => [
            'file' => 'pages/withhistory.php',
            'style' => '/css/withhistory.css',
            'secured' => True,
                ],
                '/ads' => [
                    'file' => 'pages/ads.php',
                    'style' => '/css/ads.css',
                    'secured' => True,
                        ],
                
        '/withdrawal' => [
            'file' => 'pages/withdrawal.php',
            'style' => '/css/withdrawal.css',
            'secured' => True,
                ],
                
        '/agentbonus' => [
            'file' => 'pages/agentbonus.php',
            'style' => '/css/agentbonus.css',
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
    $routesearch = '/'.$extracted[0] ?? '';

    $found = false;
    $environment = false;
    $accountenv = false;
    $usercid = false;

    $actualbal = 1;
    

    foreach ($routes as $key => $value) {
        if ($key === $routesearch) {
            if(isset($_COOKIE['access_token'])){
                        $apiendpoint = $admin['backend']."/?action=auth";
                        $fetchresp = usefetch($apiendpoint);

                    if(isset($fetchresp['resultcode']) && $fetchresp['resultcode'] == true){
                    
                        $actualbal = $fetchresp['data']['actual'];

                        $usercid = $fetchresp['data']['cid'] == "KEST" ? true : false;
                        if($fetchresp['data']['env']){
                        $accountenv = true;
                    }
                        if($value['secured']){
                            $dfile = $value['file'];
                            $dcss = $value['style'];
                            $environment = true;

                        } else {
                            header("location: ".$dev['root']."/");
                        }
                    } else {
                        setcookie("access_token", "", time() - 3600, "/");
                        
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
        'upline' => $upline ?? null,
    ];



// echo "<pre>";
// print_r($response);
// echo "</pre>";