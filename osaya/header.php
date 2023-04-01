<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>OSAYA</title>

    <script type="text/javascript" src="wp-content\themes\osaya\assets\js\jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="wp-content\themes\osaya\assets\llib\bxslider\jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="wp-content\themes\osaya\assets\js\script.js"></script>

    <?php
    wp_head();
    ?>
</head>

<body>


    <div id="topSite" class="resetStyle">
        <div class="inner clearfix">
        <div class="hstopInfo">
                <p class="myAccount"><a href="<?php echo get_permalink(48); ?>">マイアカウント</a></p>
                <p class="cartBox"><a href="<?php echo get_permalink(46); ?>">カート</a><span class="cartCount"><?php echo WC()->cart->get_cart_contents_count() ; ?></span></p>
            </div>
            <!-- stopInfo -->
            <div id="nav-icon1" class="sp">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <?php get_search_form( ); ?>
           
            <!-- stopSearch -->
        </div>
    </div>
    <!-- #siteTop -->

    <div id="header">
        <div class="inner clearfix">
            <div class="logo">
                <a class="hoverJS" href="<?php echo get_home_url(); ?>"><img src="/osaya_test/wp-content/themes/osaya/assets/img/common/logo.png" alt="OSAYA"></a>
            </div>
            <!-- logo -->
            <div class="htopSearch sp">
                <form action="" method="get">
                    <input class="searchText" type="text" placeholder="検索キーワードを入力" name="s">
                    <button type="submit" class="searchBtn"><img src="/osaya_test/wp-content/themes/osaya/assets/img/common/search_icon.png" alt="Search"></button>
                </form>
            </div>
            <!-- stopSearch -->
            <div class="mainMenu">

                <?php

                wp_nav_menu(
                    array(
                        'menu' => 'header',
                        'menu_class' => 'menu',


                    )
                );
                ?>

            </div>


            <!-- mainMenu -->
        </div>
        <!-- inner -->
    </div>
    <!-- #header -->