<?php 
  $copy = get_field('copy');
  $links = get_field('links');
  $left = get_field('locations_left');
  $right = get_field('locations_right');
?>

<section class="main-section-conatct-summary main-section-conatct-summary--locations ">
  <div class="main-section-conatct-summary__top-inner container">
    <div class="main-section-conatct-summary__top-left js-visibility reveal-slide">
      <h1><?php echo $copy['title'] ?></h1>
      <p><?php echo $copy['copy'] ?></p>
    </div>
    
    <div class="locations">
      <div class="locations__left">
        <?php foreach ($left as $leftCopy): ?>
          <h4><?php echo $leftCopy['country'] ?></h4>
          <h2><?php echo $leftCopy['city'] ?></h2>
        <?php endforeach; ?>

      </div>
      <div class="locations__right">
        <?php foreach ($right as $rightCopy): ?>
          <h4><?php echo $rightCopy['country'] ?></h4>
          <h2><?php echo $rightCopy['city'] ?></h2>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>