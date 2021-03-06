<?php 
  $one = get_field('statistic_one');
  $two = get_field('statistic_two');
  $three = get_field('statistic_three');
  $four = get_field('statistic_four');
?>

<section class="case-study-stats-module">
  <div class="case-study-stats-module__inner">
    <div class="case-study-stats-module__blocks-wrap">
      <div class="case-study-stats-module__block case-study-stats-module__block-one">
        <div class="case-study-stats-module__block-text">
          <div style="display: flex">
            <h1><?php echo $one['stat_number'] ?></h1>
            <?php if($one['include_+'] === true): ?> <h2>+</p> <?php endif ?>
          </div>
          <p><?php echo $one['title'] ?></p>
        </div>
      </div>
      <div class="case-study-stats-module__block case-study-stats-module__block-two">
        <div class="case-study-stats-module__block-text">
          <div style="display: flex">
            <h1><?php echo $two['stat_number'] ?></h1>
            <?php if($two['include_+'] === true): ?> <h2>+</p> <?php endif ?>
          </div>
          <p><?php echo $two['title'] ?></p>
        </div>
      </div>
      <div class="case-study-stats-module__block case-study-stats-module__block-three">
        <div class="case-study-stats-module__block-text">
        <div style="display: flex">
            <h1><?php echo $three['stat_number'] ?></h1>
            <?php if($three['include_+'] === true): ?> <h2>+</p> <?php endif ?>
          </div>
          <p><?php echo $three['title'] ?></p>
        </div>
      </div>
      <div class="case-study-stats-module__block case-study-stats-module__block-four">
        <div class="case-study-stats-module__block-text">
        <div style="display: flex">
            <h1><?php echo $four['stat_number'] ?></h1>
            <?php if($four['include_+'] === true): ?> <h2>+</p> <?php endif ?>
          </div>
          <p><?php echo $four['title'] ?></p>
        </div>
      </div>
    </div>
  </div>
</section>