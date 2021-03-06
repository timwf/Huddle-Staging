<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-name
 */
  $location = get_field('locations', 'options');
  $social = get_field('social', 'options');
  $tou = get_field('terms_of_use', 'options');
  $privacy = get_field('privacy', 'options');
?>


<!doctype html>
<html <?php language_attributes(); ?> class="is-observer">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <script>
      // Picture element HTML5 shiv
      document.createElement('picture');
    </script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <header class="page-header">
      <div class="page-header-fullscreen">   
        <div class="page-header-fullscreen__inner container"><a href=""><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/logo-outline.svg" alt=""></a>
          <div class="page-header-fullscreen__text-inner">
            <div class="page-header-fullscreen__text-wrap">
              <div class="page-header-fullscreen__col-one">
                <div class="page-header-fullscreen__sports">
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
                <div class="page-header-fullscreen__solution">            
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
              </div>
              <div class="page-header-fullscreen__col-two">
                <div class="page-header-fullscreen__pages">
                  <ul>
                  <?php
                  wp_nav_menu( array(
                    'theme_location' => 'pages-menu'
                  ) )
                  ?>
                </div>
                <div class="page-header-fullscreen__locations">
                  <h4>Locations</h4>
                  <?php foreach ($location as $item):
                    $country = $item['country'];
                    $address = $item['adress'];            
                    ?>
                    <p> <span><?php echo $country ?><br></span><?php echo  $address ?></p>     
                  <?php endforeach; ?> 
                </div>
              </div>
              <div class="page-header-fullscreen__col-three">
                <h4>Social</h4>
                <div class="page-header-fullscreen__social-images">
                <a href="<?php echo $social['youtube_link']['url']; ?>"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/youtube.svg" alt=""></a>
                  <a href="<?php echo $social['instagram_link']['url']; ?>"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/insta.svg" alt=""></a>
                  <a href="<?php echo $social['twitter_link']['url'] ?>"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/twitter.svg" alt=""></a>
                  <a href="<?php echo $social['linkedin_link']['url'] ?>"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/linkedin.svg" alt=""></a>
                  <a href="<?php echo $social['facebook_link']['url'] ?>"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/facebook.svg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="header-footnot-container container">
            <p class="header-subnote">Synergy Sports™ – &nbsp; <?php echo date('Y') ?>&nbsp; – <a href="<?php echo $privacy['url'] ?>">&nbsp; Terms of use &nbsp;</a> – <a href="<?php echo $tou['url'] ?>">&nbsp; Privacy Policy &nbsp;</a></p>
          </div>
        </div>
      </div>
      <div class="page-header__inner container">   
        <a class="page-header__logo" href="/"><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/logo-one.png" alt=""></a>
        <div class="page-header__right">
          <nav class="page-header__menu-container">
            <ul class="page-header__menu-items">


              <div class="js-container">              
                <button class="subnavbtn">                
                <a href="<?php get_site_url() ?>/sport">Sports</a>                 
                <img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/carrot-up.svg" alt="">
                </button>
                <div class="page-header__menu-sub-container">
                  <ul>
                  <?php
                  wp_nav_menu( array(
                    'theme_location' => 'sports-menu'
                  ) )
                  ?>
                </div>
              </div>
  



              <div class="js-container">
                <button class="subnavbtn">
                <a href="<?php get_site_url() ?>/solutions">Solutions</a>    
                <img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/carrot-up.svg" alt="">
                </button>
                <div class="page-header__menu-sub-container">
                  <ul>
                  <?php
                  wp_nav_menu( array(
                    'theme_location' => 'solutions-menu'
                  ) )
                  ?>
                </div>
              </div>


              <div class="js-container">
                <button class="subnavbtn login">
                <a href="<?php get_site_url() ?>/login">Login</a></button>

              </div>



            </ul>
          </nav>
          <button class="hamburger"><span>Menu</span></button>
        </div>
      </div>
    </header>
<!--[if IE]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
  your browser</a> to improve your experience and security.</p>
<![endif]-->
