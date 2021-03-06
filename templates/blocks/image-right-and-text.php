<?php 
$number = get_field('number');
$category = get_field('category');
$title = get_field('title');
$copy = get_field('paragraph');
$button = get_field('button');
$carousel = get_field('carousel');
$id = get_field('section');
?>

<section class="image-right-and-text" id="<?php echo $id['select'] ?>">
  <div class="image-right-and-text__inner container">
    <div class="image-right-and-text__text-wrap js-visibility reveal-slide">
      <?php if($category ) : ?>
      <h2 ><?php echo $number ?><span><?php echo $category ?></span></h2>
      <?php endif ?>
      <h1 class="js-visibility reveal-slide"><?php echo $title ?></h1> 
      <?php echo wpautop( $copy) ?>    
      <?php if ($button['button_link']): 
        _get_template_part('templates/components/_button', [
          'copy' => $button['button_copy'],
          'url' => $button['button_link']['url']
        ]); 
      endif; ?>
    </div>
    <div class="image-right-and-text__carousel-wrap">
      <div class="image-right-and-text__carousel">
        <?php foreach ($carousel as $item):
          $image = $item['image'];
          $video = $item['video'];
          ?>
          <div class="image-right-and-text__slide-img">
          <?php if($video) { ?>
              <div class="image-right-and-text__slide-img--video" >
                <video playsinline autoplay muted loop id="myVideo">
                  <source src="<?php echo $video["url"] ?>" type="video/mp4">
                </video> 
              </div>
              <?php } else { ?>    
                <?php _get_template_part('templates/components/_resp-img', ['field' => $image, 'sizes' => '(max-width: 1023px) 100vw, 950px']) ?>
              <?php
              }
            ?> 
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>