<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
    <!-- Begin Head -->
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Amazon販売（中国輸入）の先進企業　ディージェンス合同会社 Diigence</title>
        <meta name="keywords" content="Amazon販売,AmazonSEO対策,中国輸入,Diigence"/>
        <meta name="description" content="ディージェンス合同会社(Diigence)は、Amazon販売（中国輸入、サプリメント販売）、Amazonのコンサルティングを行っているデジタルマーケティング会社です。">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>
        <link href="css/my-style.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- WP feed取得（ブログ情報） -->
        <?php
        $rss = simplexml_load_file('http://diigence.com/blog/feed/');

        $news_list = array();
        $news_cnt = 0;
        foreach($rss->channel->item as $item){
            $news_list[] = array(
                'title'   => $item->title, //記事タイトル
                'date'    => date("Y/m/d", strtotime($item->pubDate)), //日付
                'link'    => $item->link, //リンク,
                'description'=> $item->description, //ディスクリプション
                'url'   => $item->url
            );
            $news_cnt++;
            
            if ($news_cnt==3) {
                break;
            }
        }
        ?>
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="index.php" class="s-header__logo-link">
                                    <img class="s-header__logo-img s-header__logo-img-default" src="img/logo.png" alt="Logo">
                                    <img class="s-header__logo-img s-header__logo-img-shrink" src="img/logo-dark.png" alt="Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item close-menu"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index.php#corporate">Corporate</a></li>
                            <li class="s-header__nav-menu-item close-menu"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index.php#events">Events</a></li>
                            <li class="s-header__nav-menu-item close-menu"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index.php#mail">メアド会員</a></li>
                            <!-- PC用リンク -->
                            <li class="s-header__nav-menu-item close-menu"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider hidden-xs" href="index.php#voice">推薦の声</a></li>
                            <!-- SP用リンク -->
                            <li class="s-header__nav-menu-item close-menu"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider visible-xs" href="index.php#sp-voice">推薦の声</a></li>
                            <!-- <li class="s-header__nav-menu-item close-menu"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#">お客様の声</a></li> -->
                           <li class="s-header__nav-menu-item close-menu"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index.php#faq">FAQ</a></li>
                            <li class="s-header__nav-menu-item close-menu"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index.php#contacts">Contacts</a></li>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->

            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->