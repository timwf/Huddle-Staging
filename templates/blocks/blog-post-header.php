<section class="blog-post-header">
  <div class="blog-post-header__top-section">
    <div class="blog-post-header__text-wrap container">
      <h4><?php echo get_field('category') ?></h4>
      <h1><?php the_title() ?></h1>
    </div>
  </div>
  <div class="blog-post-header__image">
    <?php the_post_thumbnail() ?>
  </div>
  </div>
</section>