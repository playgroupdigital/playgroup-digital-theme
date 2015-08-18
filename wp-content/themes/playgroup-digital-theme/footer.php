<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Playgroup Digital Theme
 */

?>

<footer class="container-fluid footer">
      <div class="container"><div class="row footer-text">
        <div class="col-xs-18 col-sm-4 footer-text--address">
          <?php dynamic_sidebar( 'footer-address' ); ?>
        </div>
        <div class="col-xs-18 col-sm-8  col-sm-push-5 footer-text--address mailchimp-form">
          <form action="//playgroup.us1.list-manage.com/subscribe/post?u=023203ff7770f58c466883713&amp;id=9eb90a74cd" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
              <p class="">Subscribe to our newsletter</p>
              <input type="text" name="NAME" class="required name" id="mce-NAME" placeholder="Name">
              <input type="email" name="EMAIL" class="required email"  id="mce-EMAIL" placeholder="Email">
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;">
                  <input type="text" name="b_023203ff7770f58c466883713_9eb90a74cd" tabindex="-1" value="">
                </div>
                <div class="clear">
                  <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row footer-text">
          <div class="col-xs-18 col-sm-4 footer-text--copyright">
            <p>©Playgroupdigital 2015 </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->
    <div class="container-fluid sub-footer">
      <div class="container">
        <div class="row ">
          <div class="col-xs-18 sub-footer--logo sub-footer--link">
            <img src="http://localhost/playgroup-digital-theme/wp-content/uploads/2015/08/playgroup-logo.svg" alt="" width="26" height="26">
            <p class="text-right pull-right">Part of <a href="http://playgroup.com">Playgroup</a></p>
          </div>
        </div>
      </div>
    </div>

<?php wp_footer(); ?>
<script type="text/javascript">
   svgeezy.init(false, 'png');
</script>

</body>
</html>
