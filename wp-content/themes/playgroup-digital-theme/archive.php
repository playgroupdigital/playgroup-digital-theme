<?php
/**
 * The Blog page Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Playgroup Digital Theme
 */

get_header(); ?>


<?php
{include (TEMPLATEPATH . '/home_paged.php');
}
?>



<!-- Footer -->
<?php get_footer(); ?>
<!-- Footer -->
