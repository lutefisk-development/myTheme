<?php

 /*
 =======================================================
 					ACTIONS:
 =======================================================
 */

require('inc/bs4Navwalker.php');
require('inc/pagination.php');

function mt_register_menus() {
	register_nav_menus([
		'main-menu' => 'Main Menu'
	]);
}
add_action('init', 'mt_register_menus');




function mt_widgets_init() {
	register_sidebar( array(
		'name'          => 'Blog Sidebar',
		'id'            => 'blog-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => 'Page Sidebar',
		'id'            => 'page-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => 'Footer Sidebar',
		'id'            => 'footer-sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'mt_widgets_init' );




function mt_register_scripts_and_styles() {
	
	/**
	 *  Styles
	 */


	// Add Bootstrap CSS
	wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', [], '4.3.1', 'all');

	// Add Theme CSS
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', ['bootstrap']);

	// ====================================================================================

	/**
	 *  Scripts
	 */


	// Remove WordPress jQuery
	wp_deregister_script('jquery');

	// Add Bootstrap JS
	wp_enqueue_script(
		'jquery', 
		'https://code.jquery.com/jquery-3.3.1.slim.min.js', 
		[],
		'3.3.1',
		true
	);
	
	wp_enqueue_script(
		'popper', 
		'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', 
		['jquery'],
		'1.14.7',
		true
	);
	
	wp_enqueue_script(
		'bootstrap-js', 
		'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', 
		['jquery', 'popper'],
		'4.3.1',
		true
	);

	wp_enqueue_script(
		'script', 
		get_stylesheet_directory_uri() . '/assets/js/script.js', 
		['jquery', 'popper', 'bootstrap-js'],
		false,
		true
	);
}
add_action('wp_enqueue_scripts', 'mt_register_scripts_and_styles');

/**
 *  Theme Setup Declaration
 */

 function mt_theme_setup() {
	// Add support for Featured Imeage
	add_theme_support('post-thumbnails');

	// Add image size for Blog Thumbnail
	set_post_thumbnail_size(180, 0, false);

	// Add image size for Single Post Featured Image
	add_image_size('featured-image', 1110, 0, false);


	/**
 	* Theme Setup Custom Logo
 	*/
	add_theme_support( 'custom-logo', [
		'height'      => 40,
		'width'       => 200,
		'flex-height' => false,
		'flex-width'  => true,
		'header-text' => [ 'site-title', 'site-description' ],
	 ]);

	 
	 /**
	  * Theme Setup Custom Header
	  */
	add_theme_support( 'custom-header', [
		'default-image'      => get_stylesheet_directory_uri() . '/assets/img/default-image.jpg',
		'default-text-color' => '000',
		'width'              => 2560,
		'height'             => 350,
		'flex-width'         => true,
		'flex-height'        => true,
	]);

	// add i18n
	load_theme_textdomain( 'mytheme', get_template_directory() . '/languages' );
}
add_action('after_setup_theme', 'mt_theme_setup');

function mt_the_custom_logo() {
	$custom_logo_id = get_theme_mod('custom_logo');

	$logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');

	if(has_custom_logo()) {
		echo '<img src="'. $logo_url[0] .'" class="img-fluid" alt="Site-Logo" title="' . get_bloginfo('name') . '">';
	} else {
		bloginfo('name');
	}
}

 /*
 =======================================================
 					FILTERS:
 =======================================================
 */

 /**
  * Filter the content()
  */
  function mt_filter_the_content($content) {
	// $content = "<div style='color: fuchsia;'>{$content}</div>";
	return $content;
  }
  add_filter('the_content', 'mt_filter_the_content', 10, 1);

  /**
   * Filter content for profanity
   */
  	function mt_filter_the_content_for_profanity($content) {
		$badWords = file(get_stylesheet_directory() . "/profanity.txt", FILE_IGNORE_NEW_LINES);

		$cleanWords = [];
		foreach($badWords as $badWord) {
			$len = strlen($badWord);
			$cleanWord = str_repeat("*", $len);
			array_push($cleanWords, $cleanWord);
		}
		
		return str_ireplace($badWords, $cleanWords, $content);
	}
	add_filter('the_content', 'mt_filter_the_content_for_profanity', 10, 1);
	add_filter('the_title', 'mt_filter_the_content_for_profanity', 10, 1);
	add_filter('the_excerpt', 'mt_filter_the_content_for_profanity', 10, 1);

  /**
   * Restrict the_excerpt to 20 words
   */
  function mt_filter_excerpt_length($length) {
	return 20;
  }
  add_filter('excerpt_length', 'mt_filter_excerpt_length', 999, 1);

  /**
   * Modify excerpt suffix
   */
  function mt_filter_excerpt_more($more) {
	return "";
  }
  add_filter('excerpt_more', 'mt_filter_excerpt_more', 999, 1);

  /**
   * Adding link to the excerpt
   */
  function mt_filter_excerpt_more_link($excerpt) {
	$post = get_post();
	$excerpt .= '<a href="'. get_permalink($post->ID) .'" class="btn btn-primary float-right"> Läs mer &raquo; </a>';
	
	return $excerpt;
  }
  add_filter('the_excerpt', 'mt_filter_excerpt_more_link', 999, 1);

  /**
   * Modify all get posts queries
   */
  function mt_exclude_faq_posts($query) {
	if($query->is_home() /* && $query->is_main_query() */) {
		$faq_category = get_category_by_slug('faq');
		$faq_category_id = $faq_category->term_id;
		$query->set('cat', '-' . $faq_category_id);
	}
  }
  add_action('pre_get_posts', 'mt_exclude_faq_posts');

