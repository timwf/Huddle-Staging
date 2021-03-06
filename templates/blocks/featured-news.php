<?php 
   // the query
   $the_query = new WP_Query( array(
    'category_name' => 'featured',
      'posts_per_page' => 1,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?> 
  <?php endif; ?>

    <section class="featured-news">
      <div class="featured-news__inner container">
        <div class="featured-news__carousel-wrap">
          <div class="featured-news__image">
            <div class="featured-news__slide-img">
              <img src="<?php echo $image[0]; ?>" alt="">
              <a class="btn" href="<?php the_permalink()?>">
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
        </div>
        <div class="featured-news__text-wrap">
        <a href="<?php the_permalink()?>">
          <h1 class="js-visibility reveal-slide"><?php the_title(); ?></h1>
        </a>
          <p class="js-visibility reveal-slide"><?php the_excerpt(); ?></p>
          <div class="featured-news__details">
            <?php echo get_avatar( get_the_author_email(), '60' ); ?>
            <div class="featured-news__details--name">
              <h4><?php echo get_author_name()?></h4>
              <p><?php the_date() ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>

