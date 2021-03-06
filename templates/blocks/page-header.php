<?php 
  $image = get_field('image');
  $video = get_field('video');
  $copy = get_field('copy');
  $links = get_field('include_links_to_sections');
?>

<section class="page-header-hero">
  <div class="page-header-hero__arrow">
    <svg xmlns="http://www.w3.org/2000/svg" width="23.335" height="12.374" viewBox="0 0 23.335 12.374">
      <path id="page-header-arrow" d="M38.2-451.917,49.509-440.6,38.2-429.29" transform="translate(-428.936 -37.841) rotate(90)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"/>
    </svg>
  </div>
  <div class="page-header-hero__image">

  <?php
    if($video) { ?>
      <video class="hero-vid" playsinline autoplay muted loop id="myVideo">
      <source src="<?php echo $video["url"] ?>" type="video/mp4">
    </video> 
    <?php } else { ?>    
      <?php _get_template_part('templates/components/_resp-img', ['field' => $image, 'class' => 'page-header-hero__image--img', 'sizes' => '(max-width: 1023px) 100vw, 950px']) ?>
      <div class="page-header-hero__image-overlay"></div>
    <?php
    }
  ?>              
  </div>
  <div class="page-header-hero__text-wrap"></div>
  <div class="page-header-hero__text-container container">
    <h4><?php echo $copy['page_category'] ?></h4>
    <h1><?php echo $copy['page_title'] ?></h1>
    <p><?php echo $copy['page_copy'] ?></p>
    <?php if($links) : ?>
    <div class="page-header-hero__scroll-wrapper">
      <a href="#teams">
       <p>Go to Teams</p>
       <img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/arrow-right.svg" alt="">
      </a>
      <a href="#leagues">
        <p>Go to Leagues</p>
        <img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/arrow-right.svg" alt="">
      </a>
    </div>
    <?php endif ?>
  </div>
</section>
