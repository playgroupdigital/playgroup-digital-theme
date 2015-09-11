<?php
/**
* The template for displaying all single posts.
*
* @package Playgroup Digital Theme
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>
<div class="blog-single--featured" style="background: url('<?php echo $thumb_url ?>');"></div>
<div class="container">
	<div class="blog-single">
		<div class="blog-single--heading" data-sr>
			<h1><?php the_title(); ?></h1>
			<div class="blog-single--meta">
				<p>Written by: <?php the_author_posts_link() ?></p>
				<p>Category: <?php $categories = get_the_category();
					if ( ! empty( $categories ) ) {
					echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
				}?></p>
				<p class="hidden-xs">Date: <a href="<?php echo get_day_link('', '', ''); ?>"><?php echo get_the_date(); ?></a></p>
			</div>
		</div>
		<div class="blog-single--content" data-sr="vFactor 0.01">
			<?php the_content(); ?>
		</div>
		<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; wp_reset_query(); ?>
	</div>
</div>


<!-- Pagination -->
<div class="blog-navigation">
	<div class="container">
		<div class="block-section ">
			<div class="blog-navigation--links link-left " data-sr="enter right">
				<p>
					<?php next_post_link('%link', 'Previous Post'); ?>
				</p>
			</div>
			<div class="blog-navigation--links link-right text-right" data-sr="enter left">
				<p>
					<?php previous_post_link('%link', 'Next Post'); ?>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- /Pagination -->
<?php get_footer(); ?>
