<?php 
  $copy = get_field('copy');
  $links = get_field('links');
?>

<section class="main-section-conatct-summary">
  <div class="main-section-conatct-summary__top-inner container">
    <div class="main-section-conatct-summary__top-left js-visibility reveal-slide">
      <p><?php echo $copy['section_title'] ?></p>
      <h1><?php echo $copy['title'] ?></h1>
    </div>
    <div class="main-section-conatct-summary__top-right js-visibility reveal-slide">
      <p><?php echo $copy['copy'] ?></p>
      <?php if ($copy['button']['button_link']): 
        _get_template_part('templates/components/_button', [
          'copy' => $copy['button']['button_copy'],
          'url' => $copy['button']['button_link']['url'],
          'sizes' => '(max-width: 1023px) 100vw, calc(100vw - 300px)'
        ]); 
      endif; ?>
    </div>
  </div>

  <div class="main-section-conatct-summary__bottom-inner container">
    <div class="main-section-conatct-summary__text-wrap js-visibility reveal-slide">
      <h1><?php echo $links['first_link']["first_link_header"] ?></h1>
      <p><?php echo $links['first_link']["first_link_sub_header"] ?></p>
      <?php if ($links['first_link']["first_link_link"] ): 
        _get_template_part('templates/components/_button', [
          'url' => $links['first_link']["first_link_link"]['url']
        ]); 
      endif; ?>            
    </div>
    <div class="main-section-conatct-summary__text-wrap js-visibility reveal-slide">
      <h1><?php echo $links['second_link']["second_link_header"] ?></h1>
      <p><?php echo $links['second_link']["second_link_sub_header"] ?></p>
      <?php if ($links['second_link']["second_link_link"] ): 
        _get_template_part('templates/components/_button', [
          'url' => $links['second_link']["second_link_link"]['url']
        ]); 
      endif; ?>            
    </div>
    <div class="main-section-conatct-summary__text-wrap js-visibility reveal-slide">
      <h1><?php echo $links['third_link']["third_link_header"] ?></h1>
      <p><?php echo $links['third_link']["third_link_sub_header"] ?></p>
      <?php if ($links['third_link']["third_link_link"] ): 
        _get_template_part('templates/components/_button', [
          'url' => $links['third_link']["third_link_link"]['url']
        ]); 
      endif; ?>            
    </div>     
  </div>
</section>