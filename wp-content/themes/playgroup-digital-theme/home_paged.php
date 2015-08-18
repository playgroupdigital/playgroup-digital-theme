
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



<div class="container blog-entry">
  <div class="row blog-entry--list clearfix">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-xs-18 col-sm-9  blog-entry--single">
    <a href="<?php the_permalink(); ?>">
     <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
          ?>
     <div class="blog-entry--image" style="background: url('<?php echo $thumb_url ?>');">
      </div>
      </a>
      <div class="blog-entry-text">
      <div class="blog-entry--excerpt">
            <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?> </a></h2>
            <?php the_excerpt(); ?>
            </div>
            <div class="blog-entry--meta">
            <p>Posted in:
            <?php $categories = get_the_category();
                      if ( ! empty( $categories ) ) {
                      echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                      }?>
             by
              <?php the_author_posts_link() ?>
             on
              <a href="<?php echo get_day_link('', '', ''); ?>"><?php echo get_the_date(); ?></a></p>
            </div>
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
