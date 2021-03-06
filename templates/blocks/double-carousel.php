<?php 
  $left = get_field('left_carousel');
  $right = get_field('right_carousel');
?>

<section class="home-page-sports">
  <div class="home-page-sports__inner"> 
    <div class="home-page-sports__left">
      <div class="home-page-sports__left-carousel">
      <?php foreach ($left['slides'] as $item):
          $image = $item['image'];
          $title = $item['title']; 
          $button = $item['button'] ;
          $copy = $item['copy']             
          ?>
        <div class="home-page-sports__slide home-page-sports__slide-left-one" style="background: linear-gradient(-90deg, #ffffff00,#000000),url(<?php echo $image['url'] ?>) ">
          <div class="home-page-sports__accordian">
            <h1><?php echo $title ?></h1>
            <p><?php echo $copy ?></p>
            <?php if ($button['button_link']): 
              _get_template_part('templates/components/_button', [
                'copy' => $button['button_copy'],
                'url' => $button['button_link']['url'],
                'dark' => 'dark'
              ]); 
            endif; ?>
          </div>
          <div class="home-page-sports-expand clickable">
            <img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/plus-white.svg" alt="">
          </div>
        </div>     
      <?php endforeach; ?> 
      </div>
    </div>
    <div class="home-page-sports__right">
      <div class="home-page-sports__right-carousel">
      <?php foreach ($right['slides'] as $item):
          $image = $item['image'];
          $title = $item['title']; 
          $button = $item['button'] ;
          $copy = $item['copy']             
          ?>
        <div class="home-page-sports__slide home-page-sports__slide-left-one" style="background: linear-gradient(-90deg, #ffffff00,#000000),url(<?php echo $image['url'] ?>) ">
          <div class="home-page-sports__accordian">
            <h1><?php echo $title ?></h1>
            <p><?php echo $copy ?></p>
            <?php if ($button['button_link']): 
              _get_template_part('templates/components/_button', [
                'copy' => $button['button_copy'],
                'url' => $button['button_link']['url'],
                'dark' => 'dark'
              ]); 
            endif; ?>
          </div>
          <div class="home-page-sports-expand clickable">
            <img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/plus-white.svg" alt="">
          </div>
        </div>     
      <?php endforeach; ?> 
      </div>
    </div>
  </div>
</section>