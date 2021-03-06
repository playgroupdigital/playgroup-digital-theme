
<?php
/**
 * The Homepage template
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

      <!-- /hero -->

      <div class="home-header">
        <div class="home-header--row">
          <div class="home-header--text">
            <h1 data-sr="enter left"><?php the_field('home_hero_text'); ?></h1>

            <!--<a class="btn btn-primary home-btn" href="about.html" role="button"><span>Learn more about us</span></a>-->
          </div>
        </div>
      </div>

    <!-- /container -->
    <!-- Latest from the studio white block -->
    <div class="container">
      <div class="block-section">
        <div class="work-block--heading" data-sr>
          <p  id="work">Latest from the studio</p>
        </div>
      </div>
    </div>
    <!-- /Latest from the studio white block -->




    <!-- Project Block -->

     <?php
        $num_posts = 3;
          $args = array(
              'post_type' => 'work',
              'category_name' => '',
              'posts_per_page' => $num_posts
            );
          $query = new WP_Query( $args );
          ?>
    <!-- Project -->
    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="work-home" data-sr>
        <a href="<?php the_permalink(); ?>">
          <div class="work-mask" style="background: <?php the_field('color'); ?>;" >
          <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
          ?>
            <div class="work-home--image" style="background: url('<?php echo $thumb_url ?>');">
            </div>
          </div>
          <div class="work-home--content">
          <div class="client--wrapper"><div class="work-home--client"><p><?php the_field('client-name');  ?></p></div></div>
            <div class="work-home--text">
              <div class="work-home--text--inner">
                <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?> </a></h2>
                <p class="work-home--tags"><?php the_field('services'); ?></p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
      <!-- /Project -->

    <!-- /Project Block -->





    <!-- Latest from the blog white block -->
    <section class="container-fluid blog-home">
      <div class="container  blog-section" >
        <div class="block-section">
          <div class="blog-section--heading" data-sr="enter left">
            <p>Latest from the blog</p>
          </div>
          <?php
          $num_posts = 3;
          $args = array(
              'post_type' => 'post',
              'posts_per_page' => $num_posts
            );
          $query = new WP_Query( $args );
          ?>
          <div class="blog-section--text">
            <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="blog-section--text-content" data-sr="enter right">
              <h1>
              <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?> </a>
              </h1>
              <p>Posted on
                <a href="<?php echo get_day_link('', '', ''); ?>"><?php echo get_the_date(); ?></a>
                by
                <?php the_author_posts_link() ?>
                in
                <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                }?>
              </p>
            </div>
              <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; wp_reset_postdata();?>
          </div>
        </div>
      </div>
    </section>
    <!-- /Latest from the blog white block -->



    <!-- Twitter -->
    <div class="container" >
      <div class="row twitter-block-section" >
        <div class="twitter-block-section--heading" data-sr>
          <h4>@PlaygroupIdeas</h4>
        </div>
      </div>
      <div data-sr>
        <?php dynamic_sidebar( 'twitter' ); ?>
      </div>
    </div>
    <!-- /Twitter -->
    <!-- Footer -->
    <?php get_footer(); ?>
    <!-- Footer -->

