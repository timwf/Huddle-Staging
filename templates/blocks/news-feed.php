<?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 40,
   )); 
?>

<section class="news-feed">
  <div class="news-feed__inner container">
  <?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?> 
  <?php endif; ?>  

    <div class="news-feed__item">
      <a href="<?php the_permalink()?>">
        <div class="news-feed__image">
          <img src="<?php echo $image[0]; ?>" alt=""/>
        </div>
        <h1><?php the_title(); ?></h1>
        <?php the_excerpt(); ?>
        <div class="featured-news__details">
          <?php echo get_avatar( get_the_author_email(), '60' ); ?>
          <div class="featured-news__details--name">
            <h4><?php echo get_author_name()?></h4>
            <p> <?php echo get_the_date('F j, Y'); ?></p>
          </div>
        </div>
      </a>
    </div>  

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    
  <?php else : ?>
    <p><?php __('No News'); ?></p>
  <?php endif; ?> 
  </div>
  <div class="news-feed__load-more">
    <h1>LOAD MORE ARTICLES</h1>
    <img src="<?php  echo esc_url( get_template_directory_uri() ); ?>/img/plus.svg" alt="">
  </div>
</section>








