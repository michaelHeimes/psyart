<?php 
/**
 * Template Name: About Page
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
						
						<?php if($aim_and_scopes = get_field('aim_and_scopes')):?>
					    <li class="accordion-item is-active" data-accordion-item>
					    
						    <a href="#" class="accordion-title">Aim and Scopes</a>
						    
						    <div class="accordion-content" data-tab-content>
								<?php echo $aim_and_scopes;?>
						    </div>
					        
					    </li>
					    <?php endif;?>
	
						<?php if($editor_and_chief = get_field('editor_and_chief')):?>
					    <li class="accordion-item is-active" data-accordion-item>
					    
						    <a href="#" class="accordion-title">Editor and Chief</a>
						    
						    <div class="accordion-content" data-tab-content>
								<?php echo $editor_and_chief;?>
						    </div>
					        
					    </li>
					    <?php endif;?>
					    
						<?php if($editors = get_field('editors')):?>
					    <li class="accordion-item" data-accordion-item>
					    
						    <a href="#" class="accordion-title">Editors</a>
						    
						    <div class="accordion-content" data-tab-content>
								<?php echo $editors;?>
						    </div>
					        
					    </li>
					    <?php endif;?>
					          
				    </ul>
	 						    					
				</main> <!-- end #main -->
	
			    <?php get_sidebar(); ?>
			    
			</div> <!-- end #inner-content -->
			
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>