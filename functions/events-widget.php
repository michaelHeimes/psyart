<?php
	
// Creating the widget 
class wpb_events_widget extends WP_Widget {
  
function __construct() {
parent::__construct(
  
// Base ID of your widget
'wpb_events_widget', 
  
// Widget name will appear in UI
__('Events Widget', 'wpb_events_widget_domain'), 
  
// Widget description
array( 'description' => __( 'Shows upcoming events', 'wpb_events_widget_domain' ), ) 
);
}
  
// Creating widget front-end
  
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
  
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
  
// This is where you run the code and display the output

// $currentdate = current_time('Ymd');

// get posts			
$args = [
    'post_type' => 'event',
    'posts_per_page' => -1, // Unlimited posts
    'orderby' => 'meta_value',
    'meta_key' => 'date_the_event_will_be_hidden',
    'order' => 'ASC',
    'meta_query' => [
        'relation' => 'AND',
        [
            'key' => 'date_the_event_will_be_hidden',
            'value' => date('Y-m-d'), //<-- replace this with your correct date format
            'compare' => '>',
            'type' => 'DATE'
        ],
    ],
];

$queryEvent = new WP_Query($args);
if ($queryEvent->have_posts()) :
    /* Start the Loop */
    while ($queryEvent->have_posts()) : 
    $queryEvent->the_post();?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	
	<header class="article-header">
		<h2 class="underline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
		<?php if ($headerText = get_field('heading_copy')):?>
			<p><?php echo $headerText;?></p>
		<?php endif;?>
		
		<section>
			
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				
				<?php if(has_term( 'news', 'types' )):?>
					>> <span class="underline">Read More</span>
				<?php endif;?>

				<?php if(has_term( 'events', 'types' )):?>
					>> <span class="underline">Event Details</span>
				<?php endif;?>
				
			</a>
			
		</section>
		
		<?php $post_id = get_queried_object_id();
			get_the_author_meta( 'nicename', $author_id );?>
	</header> <!-- end article header -->
									    						
</article> <!-- end article -->

<?php
    endwhile;
endif;	

echo $args['after_widget'];
}
          
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'New title', 'wpb_events_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
      
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
 
// Class wpb_events_widget ends here
} 
 
 
// Register and load the widget
function wpb_load_events_widget() {
    register_widget( 'wpb_events_widget' );
}
add_action( 'widgets_init', 'wpb_load_events_widget' );