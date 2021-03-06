<?php 
  $left = get_field('left_column');
  $right = get_field('right_column');
?>

<section class="two-col-text">
  <div class="two-col-text__inner container">
    <div class="two-col-text__left-wrap js-visibility reveal-slide">
    <?php if($left['title']) : ?>
      <h1><?php echo $left['title'] ?></h1>
    <? endif ?>
    <?php if($left['comment']) : ?>
      <h2><?php echo $left['comment'] ?></h2>
    <? endif ?>
      <p class=""><?php echo wpautop(  $left['paragraph'] ) ?></p>
    </div>

    <div class="two-col-text__right-wrap js-visibility reveal-slide">

      <?php if ($right['title']) : ?>
      <h1 class="<?php if ($right['double_title']): echo 'grey'; endif ?> "><?php echo $right['title'] ?>
      <?php if ($right['double_title']['black_sub_header']) : ?>
        <span><br><?php echo $right['double_title']['black_sub_header']?></span>
        <? endif ?> </h1>
      <?php endif?>
      
      <?php echo wpautop( $right['paragraph'] ) ?>

      <?php if ($right['button']['button_link']): 
        _get_template_part('templates/components/_button', [
          'copy' => $right['button']['button_copy'],
          'url' => $right['button']['button_link']['url']
        ]); 
      endif; ?>

      <?php if ($right['quote']['quote']) : ?>
      <div class="two-col-text__right-quote">
        <h1><?php echo $right['quote']['quote'] ?></h1>
        <p><?php echo $right['quote']['author'] ?></p>
      </div>
      <?php endif?>
      
    </div>
  </div>
</section>