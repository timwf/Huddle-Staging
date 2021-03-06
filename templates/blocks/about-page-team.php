<?php 
  $title = get_field('title');
  $copy = get_field('copy');
  $blocks = get_field('blocks');
?>

<section class="about-page-team">
        <div class="about-page-team__inner container">
          <div class="about-page-team__text-wrap-left js-visibility reveal-slide">
            <h1><?php echo $title ?></h1>
            <p><?php echo $copy ?></p>
          </div>
          <div class="about-page-team__text-wrap-right">
            <div class="about-page-team__accordion-wrap">
             <?php foreach ($blocks as $item):
              $image = $item['image'];
              $title = $item['title']; 
              $copy = $item['copy'] ;
              $link = $item['link'] ;            
              ?>
              <div class="about-page-team__accordion-item">
                <div class="about-page-team__accordion-item-show">
                  <div class="about-page-team__accordion-item-brand">
                    <?php _get_template_part('templates/components/_resp-img', ['field' => $image, 'sizes' => '(max-width: 1023px) 100vw, 950px']) ?>
                  </div>
                  <div class="about-page-team__accordion-item-button clickable">       
                    <p>more info</p><img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/plus.svg" alt="">
                  </div>
                </div>
                <div class="about-page-team__accordion-item-hidden">
                  <h4><?php echo $title ?></h4>
                  <p><?php echo $copy ?></p>
                  <p><?php echo $link['link_intro'] ?> <span><?php echo $link['link_url'] ?></span></p>
                </div>
              </div>
            <?php endforeach; ?>  
            </div>
          </div>
        </div>
      </section>