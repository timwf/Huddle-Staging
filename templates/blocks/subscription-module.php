<?php 
  $header = get_field('header');
  $subscriptions = get_field('subscriptions');
?>

<section class="subscription-module">
  <div class="subscription-module__inner">
    <h1><?php echo $header ?></h1>
    <div class="subscription-module__blocks-wrap">
      <?php foreach ($subscriptions as $item):
        $name = $item['subscription_name'];
        $cost = $item['cost']; 
        $button = $item['button'] ;
        ?>
        <div class="subscription-module__block ">
            <div class="subscription-module__block-inner">
              <h1><?php echo $name ?></h1>
              <p><?php echo $cost ?></p>
              <?php if ($button['button_link']): 
                _get_template_part('templates/components/_button', [
                  'copy' => $button['button_copy'],
                  'url' => $button['button_link']['url']
                ]); 
              endif; ?>
            </div>
          </div>     
      <?php endforeach; ?> 
    </div>
  </div>
</section>