<?php
/**
* The template for displaying all pages.
*
* @package Playgroup Digital Theme
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container page-wrap">
	<div class="page-row">
		<div class="page--heading" >
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="page--content">
			<?php the_content(); ?>
		</div>
		<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; wp_reset_query(); ?>
	</div>
</div>



<?php get_footer(); ?>
