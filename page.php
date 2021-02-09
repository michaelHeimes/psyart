<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
		
		<div class="grid-container">
	
			<div class="inner-content grid-x grid-padding-x">
		
				<?php get_template_part('parts/loop', 'breadcrumbs');?>
		
				<?php get_template_part('parts/loop', 'page-header');?>
		
			    <main class="main cell small-12" role="main">
				    
				   <?php the_content();?>
				   	 						    					
				</main> <!-- end #main -->
				    
			</div> <!-- end #inner-content -->
			
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>