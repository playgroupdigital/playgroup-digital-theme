
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
    </div>
    <div class="container-fluid container-fluid--home white-home">
      <div class="home-header--image" style="" ></div>
      <div class="container">
        <div class="row home-header">
          <div class="col-xs-15 col-sm-14 col-md-11  home-header--text">
            <h1><?php the_field('home_hero_text'); ?></h1>

            <!--<a class="btn btn-primary home-btn" href="about.html" role="button"><span>Learn more about us</span></a>-->
          </div>
        </div>
      </div>
    </div>
    <!-- /container -->
    <!-- Latest from the studio white block -->
    <div class="container">
      <div class="row block-section ">
        <div class="col-xs-18 block-section--heading work-block--heading">
          <p  id="work">Latest from the studio</p>
        </div>
      </div>
    </div>
    <!-- /Latest from the studio white block -->




    <!-- Project Block -->
    <div class="container-fluid work-block--home">
     <?php
        $num_posts = 3;
          $args = array(
              'post_type' => 'work',
              'posts_per_page' => $num_posts
            );
          $query = new WP_Query( $args );
          ?>
    <!-- Project -->
    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="work-home--large">
        <a href="<?php the_permalink(); ?>">
          <div class="work-mask" style="background: <?php the_field('color'); ?>;">
          <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
          ?>
            <div class="work-home--large--image" style="background: url('<?php echo $thumb_url ?>');">
            </div>
          </div>
          <div class="container ">
            <div class="row work-home--large--text">
              <div class="col-xs-18 col-sm-18 ">
                <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?> </a></h2>
                <p class="work-home--tags"><?php the_field('services'); ?></p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
      <!-- /Project -->
    </div>
    <!-- /Project Block -->





    <!-- Latest from the blog white block -->
    <section class="container-fluid blog-home">
      <div class="container  blog-section">
        <div class="row">
          <div class="col-xs-18 col-sm-9  blog-section--heading">
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
          <div class="col-xs-18 col-sm-9  blog-section--text">
           <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
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
              <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; wp_reset_postdata();?>
          </div>
        </div>
      </div>
    </section>
    <!-- /Latest from the blog white block -->



    <!-- Twitter -->
    <div class="container">
      <div class="row twitter-block-section">
        <div class="col-xs-18  twitter-block-section--heading">
          <h4>@PlaygroupIdeas</h4>
        </div>
      </div>
      <div class="row twitter-section">
        <div class="col-xs-16 col-sm-8 twitter-section--text">
          <p>20 May 2015</p>
          <p>Morbi fringilla convallis sapien, id pulvinar odio volutpat. Vivamus sagittis lacus vel augue laoreet rutrum faucibus. <a href="#">Test link style</a></p>
        </div>
        <div class="col-xs-16 col-sm-8 col-sm-offset-1  twitter-section--text">
          <p>20 May 2015</p>
          <p>Mercedem aut nummos unde unde extricat, amaras. Morbi odio eros, volutpat ut pharetra vitae, lobortis sed nibh.</p>
        </div>
      </div>
    </div>
    <!-- /Twitter -->
    <!-- Footer -->
    <?php get_footer(); ?>
    <!-- Footer -->

