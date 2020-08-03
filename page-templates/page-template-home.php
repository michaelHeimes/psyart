<?php 
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 large-8 medium-8 cell" role="main">
			    
			    <?php echo '<h1><span>' . get_bloginfo( "name" ) . '</span> ' . get_bloginfo( "description" ) .  '</h1>' ;?>
			    
			   <?php 
				   $getdate = getdate();
				   $args = array(
				    'posts_per_page' => -1,
				    'post_type' => 'article',
			        'post_status' => 'publish',
			        'posts_per_page' => -1, 
					    'date_query' => array(
					        array(
					            'year'  => $getdate["year"]
					        ),
						),
				);
				
				$wpquery = new WP_Query($args);
				$posts = $wpquery->get_posts();
				$ordered_posts = array();
				
				foreach ($posts as $post) {
				    $year = get_the_date('Y');
				    $ordered_posts[$year][] = $post;
				}
				;
				
				foreach ($ordered_posts as $post_date => $posts) { 
					$volume = substr( $post_date, -2) + 4;
				?>
				

					        <?php foreach ($posts as $post): ?>
					        
								<?php get_template_part( 'parts/loop', 'archive' ); ?>
					            
					        <?php endforeach; ?>
				    
				<? }
				
				?>
			    						
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>




