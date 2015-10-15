<?php
/**
 * The header for our theme.
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
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <style>
    @media screen and (min-width: 481px) {
      [data-sr] {
        visibility: hidden;
      }
    }
    </style>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="body-wrap">
<div class="container-fluid nav-wrap  navbar-fixed">

    <div class="contact">
      <div class="contact-container">
        <div class="contact-row ">
          <div class="contact-header ">
            <h4>Get in touch</h4>
          </div>
          <div class="contact-text">
            <?php dynamic_sidebar( 'contact-col-one' ); ?>
          </div>
          <div class=" contact-text">
            <?php dynamic_sidebar( 'contact-col-two' ); ?>
          </div>
          <div class="contact-text">
            <?php dynamic_sidebar( 'contact-col-three' ); ?>
          </div>
          <div class="close-button">
            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
        </div>
      </div>
    </div>



 <!-- Navbar -->
<div class="header-nav" >
      <div class="header-nav--row">
        <nav class="navbar navbar-default ">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">

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
    </div>
      <!-- /Navbar -->

