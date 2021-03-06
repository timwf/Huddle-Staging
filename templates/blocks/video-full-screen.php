<?php 
  $image = get_field('image');
  $video = get_field('video');
?>

<section class="video-full-screen">
  <div class="video-full-screen__image">
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
</section>
