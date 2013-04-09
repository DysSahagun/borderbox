<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '-', true, 'right' ); ?></title>
       
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
       
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
      
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.5">

        <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->       
		
		<?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <div id="page" class="hfeed site">
        
            <header id="masthead" class="site-header" role="banner">
                <div id="masthead-cr">
                    
                    <div class="teleport site-info-head-teleport">
                        <div class="teleport-cr">
                            <div class="teleport-ct">
                                <hgroup class="site-info-head">
                                    <h1 class="site-title"><a class="site-title-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <h2 class="site-desc"><?php bloginfo( 'description' ); ?></h2>
                                </hgroup>
                            </div>
                        </div>
                    </div>
                    
                    <div class="teleport main-nav-teleport">
                        <div class="teleport-cr">
                            <div class="teleport-ct">
                                <nav id="site-navigation" class="main-navigation" role="navigation">
                                    <h3 class="menu-toggle"><?php _e( 'Main navigation', 'twentytwelve' ); ?></h3>
                                    <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
                                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
                                </nav><!-- #site-navigation -->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </header><!--#branding-->
            
            <div id="main">
                <div id="main-cr">