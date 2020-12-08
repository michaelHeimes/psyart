<?php 
/**
 * Template Name: Articles Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
		<div class="grid-container">	
			<div class="inner-content grid-x grid-padding-x">
		
			    <main class="main small-12 large-8 medium-8 cell" role="main">
				    
				    <?php if($heading = get_field('heading')):?>
				    <h1><?php echo $heading;?></h1>
				    <?php endif;?>
				    
				    <ul class="accordion" data-allow-all-closed="true" data-accordion>
					
					   <?php 
						   $args = array(
						    'posts_per_page' => -1,
						    'post_type' => 'article'
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
						
						    <li class="accordion-item" data-accordion-item>
						    
							    <a href="#" class="accordion-title">Volume <span><?php echo $volume; ?></span> (<?php echo $post_date; ?>)</a>
							    
							    <div class="accordion-content" data-tab-content>
							        <?php foreach ($posts as $post): ?>
							        
										<?php get_template_part( 'parts/loop', 'article-archive' ); ?>
							            
							        <?php endforeach; ?>
							    </div>
						        
						    </li>
						    
						<? }
						
						?>
	      
				    </ul>
	 						    					
				</main> <!-- end #main -->
	
			    <?php get_sidebar(); ?>
			    
			</div> <!-- end #inner-content -->
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>