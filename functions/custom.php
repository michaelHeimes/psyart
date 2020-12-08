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