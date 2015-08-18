<?php
/* Template Name: Work */
get_header(); ?>
<!-- Page Heading -->
<div class="container">
  <div class="row block-section">
    <div class="col-xs-18 blog-frontpage--meta">
      <p class="categories-p">Categories:&nbsp;&nbsp;</p>
      <ul class="list-unstyled category-list">
        <?php wp_list_categories('exclude=&title_li=' ); ?>
      </ul>
    </div>
  </div>
</div>
<!-- /Page Heading -->
<div class="container work-block">
  <div class="row clearfix">
    <?php
    $num_posts = 6;
    $args = array(
    'post_type' => 'work',
    'posts_per_page' => $num_posts
    );
    $query = new WP_Query( $args );
    ?>
    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="col-xs-18 col-sm-9  work-item">
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
<!-- Pagination -->
<div class="container-fluid blog-navigation">
  <div class="container">
    <div class="row block-section ">
      <div class="col-xs-9 blog-navigation--links link-left ">
        <p>
          <?php echo get_previous_posts_link( 'Previous Blog Entries'); ?>
        </p>
      </div>
      <div class="col-xs-9  blog-navigation--links link-right text-right">
        <p>
          <?php echo get_next_posts_link( 'Next Blog Entries'); ?>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- /Pagination -->
<!-- Footer -->
<?php get_footer(); ?>
<!-- Footer -->
