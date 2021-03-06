<?php 
  $sectionTitle = get_field('section_title');
  $title = get_field('title');
  $copy = get_field('copy');  
  $button = get_field("button");
?>

<section class="main-section-text">
  <div class="main-section-text__inner container">
    <div class="main-section-text__left">
      <p class="js-visibility reveal-slide"><?php echo $sectionTitle ?></p>
      <h1 class="js-visibility reveal-slide"><?php echo $title ?></h1>
    </div>
    <div class="main-section-text__right">
      <p class="js-visibility reveal-slide"><?php echo $copy ?></p>
      <h1>test</h1>
      <?php if ($button['button_link']): 
        _get_template_part('templates/components/_button', [
          'copy' => $button['button_copy'],
          'url' => $button['button_link']['url']
        ]); 
      endif; ?>
    </div>
  </div>
</section>