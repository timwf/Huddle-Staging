<?php 
  $image = get_field('image');
  $quote = get_field('quote');
  $author = get_field('author');
?>

<section class="image-quote-divider">
  <div class="image-quote-divider__inner">
    <div class="image-quote-divider__image-wrap" style="background-image: url(<?php echo $image["url"] ?>)">     
      <div class="image-quote-divider__image-overlay">
        <p class="js-visibility reveal-slide"><?php echo $quote ?></p>
        <h4 class="image-quote-divider__autor"><?php echo $author ?></h4>
      </div>
    </div>
  </div>
</section>