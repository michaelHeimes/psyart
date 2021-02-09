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
				
				<?php get_template_part('parts/loop', 'breadcrumbs');?>
		
				<?php get_template_part('parts/loop', 'page-header');?>
		
			    <main class="main small-12 large-8 medium-8 cell" role="main">
				    
				    <?php the_content();?>
				    
				    <?php if($form_id = get_field('contact_form_id')):?>
						<?php gravity_form( $form_id, false, false, false, '', true );?>
					<?php endif;?>
							
					          
				    </ul>
	 						    					
				</main> <!-- end #main -->
	
			    <?php get_sidebar(); ?>
			    
			</div> <!-- end #inner-content -->
			
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>