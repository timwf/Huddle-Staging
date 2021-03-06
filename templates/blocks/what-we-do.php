<?php 
  $sectionTitle = get_field('section_title');
  $title = get_field('title');
  $copy = get_field('copy');  
  $button = get_field("button");
  $stepOne = get_field("step_one");
  $stepTwo = get_field("step_two");
  $stepThree = get_field("step_three");
  $stepFour = get_field("step_four");
  $stepFive = get_field("step_five");
?>

<section class="main-section-text">
  <div class="main-section-text__inner container">
    <div class="main-section-text__left">
      <p class="js-visibility reveal-slide"><?php echo $sectionTitle ?></p>
      <h1 class="js-visibility reveal-slide"><?php echo $title ?></h1>
    </div>
    <div class="main-section-text__right">
      <p class="js-visibility reveal-slide"><?php echo $copy ?></p>
      <?php if ($button['button_link']): 
        _get_template_part('templates/components/_button', [
          'copy' => $button['button_copy'],
          'url' => $button['button_link']['url']
        ]); 
      endif; ?>
    </div>
  </div>
</section>

<section class="what-we-do">
  <div class="what-we-do__inner container">


    <div class="what-we-do__item" style="background-image: url(<?php echo $stepOne['image']['url']?>)">
      <div class="what-we-do__item-inner">
        <h2><?php echo $stepOne['number'] ?></h2>
        <p><?php echo $stepOne['title'] ?></p>
        <?php if($stepOne['link']) {?> 
        <?php  _get_template_part('templates/components/_button', ['url' => $stepOne['link']['url'] ]); ?>
        <?php
        }?>
      </div>
    </div>

    <div class="what-we-do__item" style="background-image: url(<?php echo $stepTwo['image']['url']?>)">
      <div class="what-we-do__item-inner">
        <h2><?php echo $stepTwo['number'] ?></h2>
        <p><?php echo $stepTwo['title'] ?></p>
        <?php if($stepTwo['link']) {?> 
        <?php  _get_template_part('templates/components/_button', ['url' => $stepTwo['link']['url'] ]); ?>
        <?php
        }?>
      </div>
    </div>

    <div class="what-we-do__item" style="background-image: url(<?php echo $stepThree['image']['url']?>)">
      <div class="what-we-do__item-inner">
        <h2><?php echo $stepThree['number'] ?></h2>
        <p><?php echo $stepThree['title'] ?></p>
        <?php if($stepThree['link']) {?> 
        <?php  _get_template_part('templates/components/_button', ['url' => $stepThree['link']['url'] ]); ?>
        <?php
        }?>
      </div>
    </div>

    <div class="what-we-do__item" style="background-image: url(<?php echo $stepFour['image']['url']?>)">
      <div class="what-we-do__item-inner">
        <h2><?php echo $stepFour['number'] ?></h2>
        <p><?php echo $stepFour['title'] ?></p>
        <?php if($stepFour['link']) {?> 
        <?php  _get_template_part('templates/components/_button', ['url' => $stepFour['link']['url'] ]); ?>
        <?php
        }?>
      </div>
    </div>

    <div class="what-we-do__item" style="background-image: url(<?php echo $stepFive['image']['url']?>)">
      <div class="what-we-do__item-inner">
        <h2><?php echo $stepFive['number'] ?></h2>
        <p><?php echo $stepFive['title'] ?></p>
        <?php if($stepFive['link']) {?> 
        <?php  _get_template_part('templates/components/_button', ['url' => $stepFive['link']['url'] ]); ?>
        <?php
        }?>
      </div>
    </div>



  </div>
</section>