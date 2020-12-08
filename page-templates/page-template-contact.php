<?php 
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
		
		<div class="grid-container">
	
			<div class="inner-content grid-x grid-padding-x">
		
			    <main class="main small-12 large-8 medium-8 cell" role="main">
				    
				    <?php the_content();?>
					          
				    </ul>
	 						    					
				</main> <!-- end #main -->
	
			    <?php get_sidebar(); ?>
			    
			</div> <!-- end #inner-content -->
			
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>