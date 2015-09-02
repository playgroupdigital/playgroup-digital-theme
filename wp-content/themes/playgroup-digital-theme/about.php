<?php
/* Template Name: About */
get_header(); ?>


    <!-- /container -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="about-header">
    <div class="about-header--mask" style="background: <?php the_field('blog-colour'); ?>;">
        <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
          ?>
      <div class="about-header--image" style="background: url('<?php echo $thumb_url ?>');"></div>
      </div>
      <div class="container">
      <div class="about-header--row">
       <div class="about-header--text">
         <h1>About the studio —</h1>
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
      <div class=" two-col-text--heading">
        <h5><?php the_sub_field('methodology_title');?></h5>
        <p><?php the_sub_field('methodology_brief');?></p>
      </div>
      <div class="two-col-text--body">
        <?php the_sub_field('methodology_text');?>
      </div>
  </div>
    <?php endwhile;?>

<?php else :?>

    // no rows found

<?php endif;?>
  </section>



  <section class="container-fluid about-banner about-banner--image" style="background: url('<?php the_field('banner_image'); ?>');">
    <div class="row " >
    </div>
    <div class="col-xs-14 col-xs-push-2 about-banner--text">
      <p>Great things happen when we work together</p>
      <a class="btn btn-primary about-banner--btn " href="about.html" role="button">View case studies</a>
    </div>
  </section>


  <section class="about-section">
    <div class="about-section--capabilities">
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




    <section class="container-fluid about-instagram">
      <div class="row about-container">
        <div class="half-wrap">
        <a href="#">
          <div class="about-instagram-half " style="background: url('https://unsplash.it/4133/2745?image=534');">
          </div>
        </a>
        </div>
        <div class="quarter-wrap">
                <div class="about-instagram-quarter" style="background: url('https://unsplash.it/700/700');">
                </div>
                <div class="about-instagram-quarter" style="background: url('https://unsplash.it/600/600');">
                </div>
                <div class="about-instagram-quarter" style="background: url('https://unsplash.it/500/500');">
                </div>
                <div class="about-instagram-quarter" style="background: url('https://unsplash.it/1000/1000');">
                </div>
          </div>
      </div>
    </section>

  <section class="about-section">
   <div class="row about-section--people">
    <div class="col-xs-18 col-sm-6 people-title"><h5>People</h5></div>
    <div class="col-xs-18 col-sm-12">
      <div class="row people">
        <div class="col-sm-6 people-profile">
           <div class="people-profile--image" style="background: url('https://unsplash.it/800/500');"></div>
          <h5>Firstname Lastname</h5>
          <p>Job title</p>
        </div>
        <div class="col-sm-6 people-profile">
           <div class="people-profile--image" style="background: url('https://unsplash.it/800/880');"></div>
          <h5>Firstname Lastname</h5>
          <p>Job title</p>
        </div>
        <div class="col-sm-6 people-profile">
           <div class="people-profile--image" style="background: url('https://unsplash.it/800/570');"></div>
          <h5>Firstname Lastname</h5>
          <p>Job title</p>
        </div>
        <div class="col-sm-6 people-profile">
           <div class="people-profile--image" style="background: url('https://unsplash.it/680/500');"></div>
          <h5>Firstname Lastname</h5>
          <p>Job title</p>
        </div>
        <div class="col-sm-6 people-profile">
           <div class="people-profile--image" style="background: url('https://unsplash.it/900/500');"></div>
          <h5>Firstname Lastname</h5>
          <p>Job title</p>
        </div>
        <div class="col-sm-6 people-profile">
           <div class="people-profile--image" style="background: url('https://unsplash.it/800/800');"></div>
          <h5>Firstname Lastname</h5>
          <p>Job title</p>
        </div>

      </div>
    </div>

   </div>

  </section>

<section class="container-fluid about-section--dark">
<div class="container">
   <div class="row about-section--clients">
    <div class="col-xs-18 col-sm-6 clients-title"><h5>Clients</h5></div>
    <div class="col-xs-18 col-sm-12 clients-logos">
      <div class="row">
        <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/07/0000s_0006_unilever.png');"></div>
        </div>
        <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/07/0000s_0034_Adnams.png');"></div>
        </div>
        <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/07/0000s_0004_vivo.png');"></div>
        </div>
        <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/04/0000s_0032_bbc.png');"></div>
        </div>
        <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/07/0000s_0025_Kings-Cross.png');"></div>
        </div>
         <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/07/0000s_0010_smith.png');"></div>
        </div>
         <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/07/0000s_0025_Kings-Cross.png');"></div>
        </div>
         <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/07/0000s_0010_smith.png');"></div>
        </div>
         <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/07/0000s_0006_unilever.png');"></div>
        </div>
         <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/07/0000s_0001_WSPA.png');"></div>
        </div>
         <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/04/0000s_0032_bbc.png');"></div>
        </div>
         <div class="col-xs-9 col-sm-6 col-md-3">
           <div class="client-section--logo" style="background: url('http://playgroup.com/wp-content/uploads/2013/07/0000s_0010_smith.png');"></div>
        </div>
      </div>
    </div>

   </div>
</div>
  </section>

    <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; wp_reset_query(); ?>




<?php get_footer(); ?>
