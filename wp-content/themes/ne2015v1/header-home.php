<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta name="google-site-verification" content="Xeg0wRsLl-DvWocK5OwX-__5LHbHmd6nBf1juiqVSRI" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <title>Dra. Anna Cecília Andriolo</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    
    <?php wp_head(); ?>

	<!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/plugins/ml-slider/assets/metaslider/public.css">

    <!-- JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>

    <!-- FONT -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>

    
</head>
<body <?php body_class(); ?> id="home">

<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div id="logo" class="xs-center">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_bloginfo ( 'name' );  ?>" class="logo">
                        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-ana-cecilia.png" alt="<?php echo get_bloginfo ( 'name' );  ?>" title="Dra. Ana Cecília"></div>
                    </a>                
                </div>
            </div>

            <div class="col-md-8 col-sm-12 col-xs-12">
                <div id="menu">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle menu-button" data-toggle="collapse" data-target=".navbar-1-collapse">
                                MENU
                            </button>
                        </div>

                        <?php
                        wp_nav_menu( array(
                                'theme_location'    => 'main_menu',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse navbar-1-collapse',
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                        );
                        ?>
                    </nav>
    		    </div>
            </div>
        </div>
    </div>

</header><!-- .header -->

    <div id="slider" class="hidden-xs">
        <?php
            echo do_shortcode("[metaslider id=26]"); 
        ?>
    </div>