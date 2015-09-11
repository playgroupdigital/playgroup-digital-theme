<?php
/* Template Name: Work */
get_header(); ?>
<!-- Page Heading -->
<!-- /Page Heading -->
<div class="work-block">
  <div class="block-section grid">
    <?php
    $num_posts = 6;
    $args = array(
    'post_type' => 'work',
    'posts_per_page' => $num_posts
    );
    $query = new WP_Query( $args );
    ?>
    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div <?php post_class('work-item'); ?> data-sr>
      <a href="<?php the_permalink(); ?>">
        <div class="work-mask" style="background: <?php the_field('color'); ?>;">
          <?php
          $thumb_id = get_post_thumbnail_id();
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
          $thumb_url = $thumb_url_array[0];
          ?>
          <div class="work-item--image" style="background: url('<?php echo $thumb_url ?>');">
          </div>
        </div>
      </a>
      <span class="work-item--client hidden-xs"><?php the_field('client-name'); ?></span>
      <div class="work-item--text">
        <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?> </a></h2>
        <p class="work-item--tags"><?php the_field('services'); ?></p>
      </div>
    </div>
    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; wp_reset_query(); ?>
  </div>
</div>

<!-- Footer -->
<?php get_footer(); ?>
<!-- Footer -->
