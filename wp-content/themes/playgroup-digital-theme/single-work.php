<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>
<div class="work-single--featured" style="background: url('<?php echo $thumb_url ?>');"></div>
  <div class="work-single work-single--overview">
   <div class="container">
   <div class="block-section">
           <div class="work-single--project-info" >
             <p><?php the_field('client-name'); ?></p>
             <h1><?php the_title(); ?></h1>
          </div>
         <div class="work-single--project-brief">
             <h4>Overview —</h4>
             <p><?php the_field('overview'); ?></p>
             <h4>Services —</h4>
             <p><?php the_field('services'); ?></p>
         </div>
       </div>
      </div>
  </div>





<?php while(the_flexible_field("work_content")): ?>

                <?php if(get_row_layout() == "1col"): ?>
                  <div class="work-content--block">
                        <div class="work-content">
                            <div class="work-content--1col">
                               <?php the_sub_field("full_column_1col"); ?>
                            </div>
                        </div>
                  </div>
                 <?php elseif(get_row_layout() == "2col"): ?>
                  <div class="work-content--block">
                        <div class="work-content">
                            <div class="work-content--2col">
                               <?php the_sub_field("two_column_1"); ?>
                            </div>
                            <div class="work-content--2col">
                               <?php the_sub_field("two_column_2"); ?>
                            </div>
                        </div>
                      </div>
                    <?php elseif(get_row_layout() == "3col"): ?>
                      <div class="work-content--block">
                        <div class="work-content">
                            <div class="work-content--3col">
                               <?php the_sub_field("three_column_1"); ?>
                            </div>
                            <div class="work-content--3col">
                               <?php the_sub_field("three_column_2"); ?>
                            </div>
                            <div class="work-content--3col">
                               <?php the_sub_field("three_column_3"); ?>
                            </div>
                        </div>
                      </div>
                    <?php elseif(get_row_layout() == "2col-thirds"): ?>
                  <div class="work-content--block">
                        <div class="work-content">
                            <div class="work-content-one--third">
                               <?php the_sub_field("third-1"); ?>
                            </div>
                            <div class="work-content-two--third">
                               <?php the_sub_field("third-2"); ?>
                            </div>
                        </div>
                      </div>
                        <?php elseif(get_row_layout() == "2col-thirds-reverse"): ?>
                  <div class="work-content--block">
                        <div class="work-content">
                            <div class="work-content-two--third-reverse">
                               <?php the_sub_field("third-1-reverse"); ?>
                            </div>
                            <div class="work-content-one--third-reverse">
                               <?php the_sub_field("third-2-reverse"); ?>
                            </div>
                        </div>
                      </div>
                  <?php elseif(get_row_layout() == "1col-dark"): ?>
                     <div class="work-content--block-dark">
                       <div class="work-content--block">
                        <div class="work-content">
                                <div class="work-content--1col">
                                   <?php the_sub_field("full_column_1col-dark"); ?>
                                </div>
                             </div>
                         </div>
                      </div>
                    <?php elseif(get_row_layout() == "2col-dark"): ?>
                  <div class="work-content--block-dark">
                        <div class="work-content--block">
                        <div class="work-content">
                            <div class="work-content--2col">
                               <?php the_sub_field("two_column_1-dark"); ?>
                            </div>
                            <div class="work-content--2col">
                               <?php the_sub_field("two_column_2-dark"); ?>
                            </div>
                        </div>
                        </div>
                      </div>
                    <?php elseif(get_row_layout() == "3col-dark"): ?>
                      <div class="work-content--block-dark">
                        <div class="work-content--block">
                        <div class="work-content">
                            <div class="work-content--3col">
                               <?php the_sub_field("three_column_1-dark"); ?>
                            </div>
                            <div class="work-content--3col">
                               <?php the_sub_field("three_column_2-dark"); ?>
                            </div>
                            <div class="work-content--3col">
                               <?php the_sub_field("three_column_3-dark"); ?>
                            </div>
                        </div>
                      </div>
                      </div>
                       <?php elseif(get_row_layout() == "full-width"): ?>
                     <div class="full-width--image">
                            <img src="<?php the_sub_field("full-width-image"); ?>" class="img-responsive"/>
                      </div>
                    <?php elseif(get_row_layout() == "full-width-content"): ?>
                     <div class="full-width-content">
                            <?php the_sub_field("full-width-content-field"); ?>
                      </div>
                <?php endif; ?>


        <?php endwhile; ?>

        <?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; wp_reset_query(); ?>

</div>

<?php get_footer(); ?>
