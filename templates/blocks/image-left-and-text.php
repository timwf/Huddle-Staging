
<?php 
  $number = get_field('number');
  $category = get_field('category');
  $title = get_field('title');
  $copy = get_field('paragraph');
  $button = get_field('button');
  $stats = get_field('stats');
  $carousel = get_field('carousel');
  $multi = get_field('multiple_sub_titles');
  $id = get_field('section_name');
?>


<section class="image-left-and-text" id="<?php echo $id['section'] ?>">
  <div class="image-left-and-text__inner container">
    <div class="image-left-and-text__carousel-wrap">
      <div class="image-left-and-text__carousel">
      <?php foreach ($carousel as $item):
          $image = $item['image'];
          $video = $item['video'];
          ?>
        <div class="image-left-and-text__slide-img">
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
    <div class="image-left-and-text__text-wrap">
      <?php if ($category) : ?>
      <h2 class="js-visibility reveal-slide"><?php echo $number ?><span><?php echo $category ?></span></h2>
      <?php endif ?>
      <?php if ($title) : ?>
      <h1 class="js-visibility reveal-slide"><?php echo $title ?></h1>
      <?php endif ?>
      <?php echo wpautop( $copy )?> 
      <?php if ($stats['stat_number']) :
          foreach ($stats['stat_number'] as $item):
          $stat = $item['stat_number'];
          $title = $item['stat_title'];
          ?>
          <div class="image-left-and-text__stats">
            <h4><?php echo $stat ?></h4>
            <p><?php echo $title ?></p>
          </div>
      <?php endforeach; endif ?>
      <?php if ($multi) :
          foreach ($multi as $item):
          $title = $item['title'];
          $copy = $item['copy'];
          ?>
          <div class="image-left-and-text__multi-title">
            <h4><?php echo $title ?></h4>
            <p><?php echo $copy ?></p>
          </div>
      <?php endforeach; endif ?>           
      <?php if ($button['button_link']): 
        _get_template_part('templates/components/_button', [
          'copy' => $button['button_copy'],
          'url' => $button['button_link']['url']
        ]); 
      endif; ?>
    </div>
  </div>
</section>