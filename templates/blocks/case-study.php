<?php 
  $image = get_field('image');
  $sectionTitle = get_field('section_title');
  $title = get_field('case_study_title');
  $copy = get_field('copy');
  $button = get_field('button');
  $statistics = get_field('statistics')
?>

<section class="case-study">
  <div class="case-study__inner container">
    <div class="case-study__left">
      <p><?php echo $sectionTitle ?></p>
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
    <div class="case-study__right">
      <?php _get_template_part('templates/components/_resp-img', ['field' => $image, 'sizes' => '(max-width: 1023px) 100vw, 950px']) ?>
      <div class="case-study__stat-containet-mobile-left">
      <?php foreach ($statistics as $item):
        $number = $item['stat_number'];
        $title = $item['stat_title'];
        $plus = $item['include_plus'];
        ?>
          <div class="case-study__stat-container">
            <div class="case-study__stat-container-plus" style="display: flex">
              <h1 class="js-visibility"><?php echo $number ?></h1>
              <?php if($plus === true): ?> <h2>+</p> <?php endif ?>
            </div>
            <p><?php echo $title ?></p>
        </div>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>