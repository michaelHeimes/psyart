<?php

// Disable Gutenberg

if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
	
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 10);
	
} else {
	
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
	
}

// ACF Options
add_action( 'after_setup_theme', 'joints_theme_support' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
if( function_exists('acf_set_options_page_title') ) {
    acf_set_options_page_title( __('Theme Options') );
}

// Get Post Views
if ( ! function_exists( 'count_views' ) ) :    
/**     * get the value of view.     */ 
function count_views($postID) {   
$count_key = 'wpb_post_views_count';    
$count = get_post_meta($postID, $count_key, true);    
if($count ==''){        
$count = 1;        
delete_post_meta($postID, $count_key);        
add_post_meta($postID, $count_key, '1');    
} else {        
$count++;        
update_post_meta($postID, $count_key, $count);    
}
}
endif; 


/* Add CPTs to author archives */
function custom_post_author_archive($query) {
    if ($query->is_author)
        $query->set( 'post_type', array('custom_type', 'article') );
    remove_action( 'pre_get_posts', 'custom_post_author_archive' );
}
add_action('pre_get_posts', 'custom_post_author_archive'); 


// Create a URL for filtering press releases by year.
function press_releases_rewrite_rules() {
  add_rewrite_rule(
    'articles/([0-9]{4})/?$',
    array(
      'year_filter' => '$matches[1]',
      'post_type'   => 'article',
    ),
    'top'
  );
}
add_action( 'init', 'press_releases_rewrite_rules', 11, 0 );

// Register the 'year_filter' query variable so we can filter by it.
function register_year_filter_query_var( $vars ) {
  $vars[] = 'year_filter';
  return $vars;
}
add_filter( 'query_vars', 'register_year_filter_query_var' );

// Alter WP query to support year filter for press releases and media coverage.
function add_year_filter_to_articles( $query ) {
  // Exit if this is the admin, not the main query, or not a press release query.
  if ( is_admin()
    || ! $query->is_main_query() 
    || empty( get_query_var( 'post_type' ) )
    || 'article' !== get_query_var( 'post_type' ) ) {
    return;
  }

  if ( ! empty( get_query_var( 'year_filter' ) ) ) {
    set_query_var( 'year', get_query_var( 'year_filter' ) );
  }
}
add_filter( 'pre_get_posts', 'add_year_filter_to_articles' );