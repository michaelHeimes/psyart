<?php 
/**
 * Template Name: News + Events Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="breadcrumbs cell small-12">
				<a href="<?php echo home_url();?>">Home</a> > <span><?php the_title();?></span>
			</div>		
		</div>
	</div>	
	
	<div class="content">
		<div class="grid-container">
			<div class="inner-content grid-x grid-padding-x">
		
			    <main class="main small-12 cell" role="main">
				    
				    <ul class="accordion" data-accordion>
					
					   <?php 
					    $args = array(  
					        'post_type' => 'event',
					        'post_status' => 'publish',
					        'posts_per_page' => -1,
					            'tax_query' => array(
						        array (
						            'taxonomy' => 'types',
						            'field' => 'slug',
						            'terms' => 'news',
						        )
						    ),
					    );
					
					    $loop = new WP_Query( $args ); 
					        
					    while ( $loop->have_posts() ) : $loop->the_post(); 
								
							get_template_part( 'parts/loop', 'event-archive' );
					    
					    endwhile;
					
					    wp_reset_postdata();
						
						
						
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
	    $queryEvent->the_post();
	
			get_template_part( 'parts/loop', 'event-archive' );
	
	    endwhile;
	endif;	
						
						
						?>
	      
				    </ul>
	 						    					
				</main> <!-- end #main -->
	
			    
			</div> <!-- end #inner-content -->
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>