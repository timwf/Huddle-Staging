<?php
/**
 * The template for displaying the footer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-name
 */
  $location = get_field('locations', 'options');
  $social = get_field('social', 'options');
    $tou = get_field('terms_of_use', 'options');
  $privacy = get_field('privacy', 'options');
  $open = get_field('open_source', 'options')
?>

    <footer class="page-footer">
      <div class="page-footer-fullscreen">
        <div class="page-footer-fullscreen__inner container">
          <div class="page-footer-fullscreen__text-inner">
            <div class="page-footer-fullscreen__text-wrap">
              <div class="page-footer-fullscreen__col-one">
                <div class="page-footer-fullscreen__sports"> 
                <a href="<?php get_site_url() ?>/sport">
                  <h1>Sports</h1>
                </a>
                  <ul>
                  <?php
                  wp_nav_menu( array(
                    'theme_location' => 'sports-menu'
                  ) )
                  ?>
                </div>
                <div class="page-footer-fullscreen__solution">            
                <a href="<?php get_site_url() ?>/solutions">
                  <h1>Solutions</h1>
                </a>
                  <ul>
                  <?php
                  wp_nav_menu( array(
                    'theme_location' => 'solutions-menu'
                  ) )
                  ?>
                </div>
                <p class="footer-footnote">Synergy Sports™ &nbsp; – &nbsp; <?php echo date('Y') ?>&nbsp; – <a href="<?php echo $tou['url'] ?>">&nbsp; Terms of use &nbsp;</a> – <a href="<?php echo $open['url'] ?>">&nbsp; Open Source &nbsp;</a> – <a href="<?php echo $privacy['url'] ?>">&nbsp; Privacy Policy &nbsp;</a> | <span style="font-style: italic;">&nbsp; <a href="https://www.huddlecreative.com/">Website design by Huddle Creative </a></span> </p>
              </div>
              <div class="page-footer-fullscreen__col-two">
                <div class="page-footer-fullscreen__pages">
                  <ul>
                  <?php
                  wp_nav_menu( array(
                    'theme_location' => 'pages-menu'
                  ) )
                  ?>                    
                </div>
                <div class="page-footer-fullscreen__locations">
                  <h4>Locations</h4>
                  <?php foreach ($location as $item):
                    $country = $item['country'];
                    $address = $item['adress'];            
                    ?>
                    <p> <span><?php echo $country ?><br></span><?php echo  $address ?></p>     
                  <?php endforeach; ?> 
                </div>
              </div>
              <div class="page-footer-fullscreen__col-three">
                <h4>Social</h4>
                <div class="page-footer-fullscreen__social-images">
                  <a href="<?php echo $social['youtube_link']['url']; ?>"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/youtube.svg" alt=""></a>
                  <a href="<?php echo $social['instagram_link']['url']; ?>"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/insta.svg" alt=""></a>
                  <a href="<?php echo $social['twitter_link']['url'] ?>"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/twitter.svg" alt=""></a>
                  <a href="<?php echo $social['linkedin_link']['url'] ?>"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/linkedin.svg" alt=""></a>
                  <a href="<?php echo $social['facebook_link']['url'] ?>"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/facebook.svg" alt=""></a>
                </div>
                <a href=""><img class="footer-logo" src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/logo-outline.svg" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="cursor"></div>
    <div class="spinner-container">
      <div class="spinner">
        <div class="spinner-right"></div>
        <div class="spinner-left"></div>
      </div>
    </div>

  <?php wp_footer(); ?>

  </body>
</html>
