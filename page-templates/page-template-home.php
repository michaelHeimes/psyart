<?php 
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content grid-container">
	
		<div class="inner-content grid-x grid-padding-x">
	
		    <main class="main small-12 large-8 medium-8 cell" role="main">
			    
			    <?php echo '<h1><span><strong>' . get_bloginfo( "name" ) . '</strong></span> ' . get_bloginfo( "description" ) .  '</h1>' ;
				    $getdate = getdate();
				    $year = date('Y');
				    $volume = substr( $year, -2) + 4;
			    ?>
			    
			    <h2 class="current-title">Current: <?php echo 'Volume ' . $volume . ' (' .  $year . ')'?></h2>
			    
			    <h2 class="recent-title">Most Recent Article:</h2>
			    
			   <?php 
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

		        foreach ($posts as $post):
		        
					get_template_part( 'parts/loop', 'archive' );
		            
		        endforeach;
				    
				}
				
				?>
			    						
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>




