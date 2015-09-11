<?php
/* Template Name: About */
get_header(); ?>


    <!-- /container -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="about-header" >
    <div class="about-header--mask" style="background: <?php the_field('blog-colour'); ?>;" data-sr="enter fade">
        <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
          ?>
      <div class="about-header--image" style="background: url('<?php echo $thumb_url ?>');"></div>
      </div>
      <div class="container">
      <div class="about-header--row" >
       <div class="about-header--text" data-sr>
         <h1 >About the studio —</h1>
         <p>
           <?php the_content(); ?>
         </p>
       </div>
      </div>
      </div>

      </div>
  </div>





  <section class="about-section">
<?php if( have_rows('methodology') ): ?>
    <?php while ( have_rows('methodology') ) : the_row();?>

<div class="two-col-text">
      <div class=" two-col-text--heading" data-sr="enter left">
        <h5><?php the_sub_field('methodology_title');?></h5>
        <p><?php the_sub_field('methodology_brief');?></p>
      </div>
      <div class="two-col-text--body" data-sr="enter right">
        <?php the_sub_field('methodology_text');?>
      </div>
  </div>
    <?php endwhile;?>

<?php else :?>

    // no rows found

<?php endif;?>
  </section>



  <section class="container-fluid about-banner about-banner--image"  style="background: url('<?php the_field('banner_image'); ?>');">
    <div class="row" >

    <div class="col-xs-14 col-xs-push-2 about-banner--text">
      <p data-sr>Great things happen when we work together</p>
      <span data-sr><a class="btn btn-primary about-banner--btn" href="about.html" role="button" data-sr="" >View case studies</a></span>
    </div>
    </div>
  </section>


  <section class="about-section">
    <div class="about-section--capabilities" data-sr>
      <div class="capabilities-title">
        <h5>What we do</h5>
      </div>

      <div class="capabilities-items">
        <div class="capabilities-items--row">

        <?php if( have_rows('capabilities') ): ?>
          <?php while ( have_rows('capabilities') ) : the_row();?>
            <div class="capabilities-text">
                  <h5><?php the_sub_field('capabilities_heading');?></h5>
                  <p><?php the_sub_field('capabilities_text');?></p>
            </div>

                <?php endwhile;?>

<?php else :?>

    // no rows found

<?php endif;?>


        </div>
      </div>


    </div>
  </section>



  <section class="about-section" >
   <div class="about-section--people" >
    <div class="people-title" data-sr><h5>People</h5></div>
    <div class="about-people--items">
      <div class="people">

      <?php
    $args = array(
    'post_type' => 'team'
    );
    $query = new WP_Query( $args );
    ?>
    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="people-profile" data-sr>
        <?php
          $thumb_id = get_post_thumbnail_id();
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
          $thumb_url = $thumb_url_array[0];
          ?>
           <div class="people-profile--image" style="background: url('<?php echo $thumb_url ?>');"></div>
          <h5><?php echo get_the_title(); ?> </h5>
          <p><?php echo get_the_content(); ?> </p>
        </div>
    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; wp_reset_query(); ?>
      </div>
    </div>

   </div>

  </section>

<section class="container-fluid about-section--dark">
<div class="container">
   <div class="row about-section--clients">
    <div class="clients-title" data-sr><h5>Clients</h5></div>
    <div class="clients-logos">
      <div class="clients-row">
      <?php
    $args = array(
    'post_type' => 'client'
    );
    $query = new WP_Query( $args );
    ?>
    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="client-logo-wrap" >
           <img src="<?php the_field('client_logo'); ?>" alt="" class="img-responsive" data-sr>
        </div>
            <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; wp_reset_query(); ?>









      </div>
    </div>

   </div>
</div>
  </section>

    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; wp_reset_query(); ?>




<?php get_footer(); ?>
