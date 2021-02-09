<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	
	
	<?php
	if( has_term( 'news', 'types' )):?>
	
		<?php the_content();?>
	
	<?php else:?>	
			
			<section>
				
				<ul class="accordion" data-allow-all-closed="true" data-accordion>
					
					<?php if($about = get_field('about')):?>
					<li class="accordion-item is-active entry-content" data-accordion-item>	    
						<a href="#" class="accordion-title">About</a>
							    
						<div class="accordion-content entry-content" data-tab-content>
							<?php echo $about;?>
						</div>
						
					</li>
					<?php endif;?>
	
					<?php if($papers = get_field('papers')):?>
					<li class="accordion-item entry-content" data-accordion-item>	    
						<a href="#" class="accordion-title">Papers</a>
							    
						<div class="accordion-content" data-tab-content>
							<?php echo $papers;?>
						</div>
						
					</li>
					<?php endif;?>
					
					<?php if($agenda = get_field('agenda')):?>
					<li class="accordion-item entry-content" data-accordion-item>	    
						<a href="#" class="accordion-title">Agenda</a>
							    
						<div class="accordion-content entry-content" data-tab-content>
							<?php echo $agenda;?>
						</div>
						
					</li>
					<?php endif;?>
					
					<?php if($hotels = get_field('hotels')):?>
					<li class="accordion-item entry-content" data-accordion-item>	    
						<a href="#" class="accordion-title">Hotels</a>
							    
						<div class="accordion-content" data-tab-content>
							<?php echo $hotels;?>
						</div>
						
					</li>
					<?php endif;?>
					
					<?php if($fees = get_field('fees')):?>
					<li class="accordion-item entry-content" data-accordion-item>	    
						<a href="#" class="accordion-title">Fees</a>
							    
						<div class="accordion-content" data-tab-content>
							<?php echo $fees;?>
						</div>
						
					</li>
					<?php endif;?>
					
					<?php if($register = get_field('register')):?>
					<li class="accordion-item entry-content" data-accordion-item>	    
						<a href="#" class="accordion-title">Register</a>
							    
						<div class="accordion-content" data-tab-content>
							<?php echo $register;?>
							
							<?php if($form_id = get_field('registration_form_id')):?>
								<?php gravity_form( $form_id, false, false, false, '', true );?>
							<?php endif;?>
							
						</div>
						

						
					</li>
					<?php endif;?>
					
				</ul>
				
			</section>
		
		<?php endif;?>

	</header> <!-- end article header -->
									    						
</article> <!-- end article -->