<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">

        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!--<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />

        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr.js"></script>


        <?php wp_head(); ?>


    </head>
    <body>
       
        <header class="header">
            <div class="top-bar">
                <div class="row cfx">
                    <div class="top-bar-contact">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/at.svg" alt="">
                        <a href="mailto:hello@wedovoodoo.co" target="_blank"> hello@wedovoodoo.co</a>
                    </div>
                    <div class="top-bar-contact">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/phone.svg" alt="">
                        <p>01234 567 890</p>
                    </div>

                    <ul class="social-icons">
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="facebook"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" alt="twitter"></a></li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/google.svg" alt="google"></a></li>
                    </ul>
                            
                </div>
            </div>
                <div class="hero">
                    <img class="hero-image" src="<?php echo get_template_directory_uri(); ?>/img/bedroom.jpg" alt="">
                    <div class="row cfx">
                        <h1 class="logo">We do B&B</h1>
                        <div class="hero-text">
                            <h2>Introducing a new service for bed & breakfasts</h2>
                        <a href="#" class="button">Learn More</a>
                        </div>
                        
                        <nav class="cfx">

                            <div class="hamburger-container">
                                <div class="hamburger">
                                    <div class="line line-1"></div>
                                    <div class="line line-2"></div>
                                    <div class="line line-3"></div>
                                </div>
                            </div>

                            <div class="nav-container">

                    <?php wp_nav_menu( array( 'menu' => 'menu','sort_column' => 'menu_order', 'container_class' => 'nav' ) ); ?>
                            </div>

                        </nav>
                    </div>
                    
                </div>

            

            </header>