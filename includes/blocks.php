<?php
/**
 * Register custom gutenberg blocks
 */

 function theme_acf_block_render_callback( $block ) {
  // convert name ("acf/testimonial") into path friendly slug ("testimonial")
  $slug = str_replace('acf/', '', $block['name']);

  // include a template part from within the "template-parts/block" folder
  if( file_exists( get_theme_file_path("/templates/blocks/{$slug}.php") ) ) {
    include( get_theme_file_path("/templates/blocks/{$slug}.php") );
  }
}

function theme_acf_blocks_init() {

	// check function exists
	if( function_exists('acf_register_block_type') ) {

		// ******************* XXX Block *******************************
   
    acf_register_block_type(array(
			'name'				=> 'image-right-and-text',
			'title'				=> __('Image Right and Text'),
			'description'		=> __('Image Right and Text'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/image-right-and-text.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'text', 'header' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'image-left-and-text',
			'title'				=> __('Image Left and Text'),
			'description'		=> __('Image Left and Text'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/image-left-and-text.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'carousel', 'text' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'spacer',
			'title'				=> __('Spacer'),
			'description'		=> __('spacer'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/spacer.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'spacer' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'two-column-text',
			'title'				=> __('Two Column Text'),
			'description'		=> __('spacer'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/two-column-text.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'spacer' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'case-study',
			'title'				=> __('Case Study'),
			'description'		=> __('Case Study'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/case-study.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'case study' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'news-carousel',
			'title'				=> __('News carousel'),
			'description'		=> __('News carousel'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/news-carousel.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'news carousel' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'image-and-quote-divider',
			'title'				=> __('Image and Quote Divider'),
			'description'		=> __('News carousel'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/image-and-quote-divider.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'image-and-quote-divider' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'main-section-contact-summary',
			'title'				=> __('Main Section Contact Summary'),
			'description'		=> __('Main Section Contact Summary'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/main-section-contact-summary.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'image-and-quote-divider' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'page-header',
			'title'				=> __('Page Header'),
			'description'		=> __('Page Header'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/page-header.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'Page Header' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'map-left',
			'title'				=> __('Map left'),
			'description'		=> __('Page Header'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/map-left.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'map-left' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'main-section-text',
			'title'				=> __('Main Section Text'),
			'description'		=> __('Main Section Text'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/main-section-text.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'main', 'text' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'subscription-module',
			'title'				=> __('Subscription Module'),
			'description'		=> __('Subscription Module'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/subscription-module.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'subsription', 'statistic' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'case-study-stats-module',
			'title'				=> __('Case Study Stats Module'),
			'description'		=> __('ase Study Stats Module'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/case-study-stats-module.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'case', 'statistic', 'study', 'stats' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'animated-list-four-blocks',
			'title'				=> __('Animated List Four Blocks'),
			'description'		=> __('Animated List Four Blocks'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/animated-list-four-blocks.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'animated', 'list', 'scroll', 'four' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'animated-list-five-blocks',
			'title'				=> __('Animated List Five Blocks'),
			'description'		=> __('Animated List Five Blocks'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/animated-list-five-blocks.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'animated', 'list', 'scroll', 'five' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'about-page-team',
			'title'				=> __('About Page - Team'),
			'description'		=> __('About Page - Team'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/about-page-team.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'about', 'team' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'previous-next-page',
			'title'				=> __('Previous Next Page'),
			'description'		=> __('About Page - Team'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/previous-next-page.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'previous', 'next' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'double-carousel',
			'title'				=> __('Double Carousel'),
			'description'		=> __('Double Carousel'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/double-carousel.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'double', 'carousel' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'map-right',
			'title'				=> __('Map Right'),
			'description'		=> __('Map Right'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/map-right.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'map', 'right' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'current-vacancies',
			'title'				=> __('Current Vacancies'),
			'description'		=> __('current vacancies'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/current-vacancies.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'current', 'vacancies' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'contact-form',
			'title'				=> __('Contact Form'),
			'description'		=> __('Contact Form'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/contact-form.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'contact', 'form' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'featured-news',
			'title'				=> __('Featured News'),
			'description'		=> __('Featured News'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/featured-news.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'featured', 'news' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'news-feed',
			'title'				=> __('News Feed'),
			'description'		=> __('News Feed'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/featured-news.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'news', 'feed' ),
      'mode' 	=> 'edit',
    ));

    acf_register_block_type(array(
			'name'				=> 'blog-post-header',
			'title'				=> __('Blog Post Header'),
			'description'		=> __('Blog Post Header'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/featured-news.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'blog-', 'post' ),
      'mode' 	=> 'edit',
    )); 

    acf_register_block_type(array(
			'name'				=> 'blog-content',
			'title'				=> __('Blog Content'),
			'description'		=> __('Blog Content'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/blog-content.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'blog', 'content' ),
      'mode' 	=> 'edit',
    )); 


    acf_register_block_type(array(
			'name'				=> 'video-full-screen',
			'title'				=> __('Video Full Screen'),
			'description'		=> __('Video Full Screen'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/video-full-screen.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'video', 'full' ),
      'mode' 	=> 'edit',
    )); 

    acf_register_block_type(array(
			'name'				=> 'salesforce',
			'title'				=> __('salesforce'),
			'description'		=> __('salesforce'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/salesforce.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'video', 'full' ),
      'mode' 	=> 'edit',
    )); 

    acf_register_block_type(array(
			'name'				=> 'wysiwyg',
			'title'				=> __('wysiwyg'),
			'description'		=> __('wysiwyg'),
      'render_callback'	=> 'theme_acf_block_render_callback',
      'render_template' => 'templates/blocks/wysiwyg.php',
			'icon'				=> 'align-center',
			'keywords'			=> array( 'video', 'full' ),
      'mode' 	=> 'edit',
    )); 
    
  }
}
add_action('acf/init', 'theme_acf_blocks_init');

// Remove the default gutenberg block
// https://rudrastyh.com/gutenberg/remove-default-blocks.html
function theme_allowed_block_types($allowed_blocks, $post) {

  // if(get_page_template_slug( $post ) === 'template-name.php') {
  //   return array();
  // }

  return array(
    'acf/image-right-and-text',
    'acf/spacer',
    'acf/image-left-and-text',  
    'acf/two-column-text', 
    'acf/case-study', 
    'acf/news-carousel', 
    'acf/image-and-quote-divider',
    'acf/main-section-contact-summary',
    'acf/page-header',
    'acf/map-left',
    'acf/main-section-text',
    'acf/subscription-module',
    'acf/case-study-stats-module',
    'acf/animated-list-four-blocks', 
    'acf/animated-list-five-blocks', 
    'acf/about-page-team',  
    'acf/previous-next-page',  
    'acf/double-carousel',  
    'acf/map-right',  
    'acf/current-vacancies', 
    'acf/contact-form', 
    'acf/featured-news', 
    'acf/news-feed', 
    'acf/blog-post-header', 
    'acf/blog-content',  
    'acf/video-full-screen',   
    'acf/salesforce',  
    'acf/wysiwyg',  
    



    


    
 
    
  );
}
add_filter('allowed_block_types', 'theme_allowed_block_types', 10, 2);
