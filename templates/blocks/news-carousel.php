<?php 
  $copy = get_field('copy');
  $carousel = get_field('carousel');
  $category = get_field('category_to_use')
?>

<?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 40,
      'category_name' => $category,
   )); 
?>

<section class="news-carousel">
  <div class="news-carousel__inner container">
    <div class="news-carousel__left">
      <p class="js-visibility reveal-slide"><?php echo $copy['section_title'] ?></p>
      <h1 class="js-visibility reveal-slide"><?php echo $copy['news_title'] ?></h1>
    </div>
    <div class="news-carousel__right">
      <p class="js-visibility reveal-slide"><?php echo $copy['copy'] ?></p>
      <?php if ($copy['button']['button_link']): 
        _get_template_part('templates/components/_button', [
          'copy' => $copy['button']['button_copy'],
          'url' => $copy['button']['button_link']['url']
        ]); 
      endif; ?>
      <?php _get_template_part('templates/components/_left-right-buttons');?>

    </div>
  </div>
</section>

<div class="news-carousel__slider-wrapper">
  <div class="news-carousel__range-slider">
    <input class="news-carousel__slider clickable" type="range" min="1" max="6" value="1" id="myRange">
    <div class="news-carousel__range-counter">
      <p class="range__current">0</p>
      <p>/</p>
      <p class="range__max">8</p>
    </div>
  </div>

  <div class="news-carousel__slide-container">


<?php if ($category) :?>
  <?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?> 
  <?php endif; ?>  


  <div class="news-carousel__slide-img draggable">
  <a href="<?php the_permalink()?>">
  <img src="<?php echo $image[0]; ?>" alt=""/>
 
      <div class="news-carousel__slide-img-overlay">
        <p><?php echo $category ?></p>
        <h2><?php echo the_title();?></h2>
        <a class="btn" href="<?php the_permalink()?>">
        <p>find out more</p>
                <div class="btn-ani-wrap " >
                <svg class="btn-crc-left" width="19" height="35" viewBox="0 0 4.617 9.26">
                  <path d="M38.282,94.752a4.5,4.5,0,0,0-.018,9" transform="translate(-33.666 -94.62)" fill="none" stroke="#0a1c2b" stroke-width="0.264"></path>
                </svg>
                <svg class="btn-arrow" width="50px" height="16px" viewBox="0 0 13.535 2.876">
                  <g>
                    <line x2="13.346" transform="translate(0 1.344)" fill="none" stroke="red" stroke-miterlimit="10" stroke-width="0.265"></line>
                    <path d="M10.107-119.568l1.344,1.344-1.344,1.344" transform="translate(1.896 119.568)" fill="none" stroke="red" stroke-miterlimit="10" stroke-width="0.265"></path>
                  </g>
                </svg>
                <svg class="btn-crc-right" width="19" height="35" viewBox="0 0 4.689 9.261">
                  <path d="M38.258,94.752a4.5,4.5,0,1,1-.021,9" transform="translate(-38.235 -94.62)" fill="none" stroke="#0a1c2b" stroke-width="0.264"></path>
                </svg>
                </div>
              </a>
      </div>
    </div>   
    </a>
  <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    
  <?php else : ?>
    <p><?php __('No News'); ?></p>
  <?php endif; ?>
  
  <?php else : ?>
    <?php foreach ($carousel as $item):
        $category = $item['category'];
        $title = $item['title']; 
      $button = $item['button'] ;
    $image = $item['image']             
      ?>


    <div class="news-carousel__slide-img draggable">
      <a href="<?php echo $button['button_link']['url'] ?>">
    <?php _get_template_part('templates/components/_resp-img', ['field' => $image, 'sizes' => '(max-width: 1023px) 100vw, 950px']) ?>
    </a>
    <a href="<?php echo $button['button_link']['url'] ?>">
     <div class="news-carousel__slide-img-overlay">
        <p><?php echo $category ?></p>
        <h2><?php echo $title ?></h2>
            <?php if ($button['button_link']): 
            _get_template_part('templates/components/_button', [
              'copy' => $button['button_copy'],
              'url' => $button['button_link']['url'],
              'dark' => 'dark'
            ]); 
          endif; ?>
      </div>
  
    </div> 
    </a>

    <?php endforeach; ?> 
    <?php endif; ?>
  </div>

</div>









