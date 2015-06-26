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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <div class="contact">
        <div class="container-fluid container-fluid--contact max-width">
          <div class="row contact-row">
          <div class="col-xs-16 col-xs-push-1">
            <p>A communi observantia non est recedendum. Me non paenitet nullum festiviorem excogitasse ad hoc. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Etiam habebis sem dicantur magna mollis euismod. Unam incolunt Belgae, aliam Aquitani, tertiam.
Ab illo tempore, ab est sed immemorabili. Quis aute iure reprehenderit in voluptate velit esse. Mercedem aut nummos unde unde extricat, amaras. Morbi odio eros, volutpat ut pharetra vitae, lobortis sed nibh.</p>
          </div>
          </div>
          <div class="row contact-row">
          <div class="col-xs-2 col-xs-push-1">
            <a class="contact-close" href="#">✕</a>
          </div>
          </div>
          </div>
        </div>
      </div>

        <!-- Navbar -->
    <div class="container-fluid container-fluid--page" >
        <div class="row">
          <nav class="navbar navbar-default col-xs-16 col-xs-push-1">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">
                <img src="img/playgroup-digital-logo-b.svg" alt="">
              </a>
            </div>

            <div id="navbar" class="navbar-collapse collapse" >
               <?php
          $args = array(
              'menu' => 'header-menu',
              'menu_class' => 'nav navbar-nav navbar-right',
              'container' => 'false'
            );
          wp_nav_menu( $args );
         ?>
            </div><!--/.nav-collapse -->
        </nav>
      </div>
    </div>
     <!-- /Navbar -->

  <div id="content" class="site-content">
