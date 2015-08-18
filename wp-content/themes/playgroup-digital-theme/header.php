<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Playgroup Digital Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <div class="contact container-fluid  container-fluid--contact">
      <div class="container">
        <div class="row contact-row ">
          <div class="col-xs-18 contact-header ">
            <h4>Get in touch</h4>
          </div>
          <div class="col-xs-18 col-sm-5 contact-text">
            <?php dynamic_sidebar( 'contact-col-one' ); ?>
          </div>
          <div class="col-xs-18 col-sm-5 col-sm-offset-1  contact-text">
            <?php dynamic_sidebar( 'contact-col-two' ); ?>
          </div>
          <div class="col-xs-18 col-sm-5 col-sm-offset-1 contact-text">
            <?php dynamic_sidebar( 'contact-col-three' ); ?>
          </div>
          <div class="col-xs-2 close-button">
            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        </div>
      </div>
    </div>



 <!-- Navbar -->
    <div class="container header-nav">
      <div class="row">
        <nav class="navbar navbar-default col-xs-18">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">
              <img src="http://192.168.1.103/playgroup-digital-theme/wp-content/uploads/2015/08/playgroup-digital-logo-b.svg" alt="">
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse navbar-right" >
            <?php
          $args = array(
              'menu' => 'header-menu',
              'menu_class' => 'nav navbar-nav',
              'container' => 'false'
            );
          wp_nav_menu( $args );
         ?>
            </div><!--/.nav-collapse -->
          </nav>
        </div>
      </div>
      <!-- /Navbar -->

