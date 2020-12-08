<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	
	
	<?php
	if( has_term( 'news', 'types' )):?>
	
		<header class="article-header">
			<h2><?php the_title(); ?></h2>
		</header>
		
		<?php the_content();?>
	
	<?php else:?>	
	
		<header class="article-header">
			<h2><?php the_title(); ?></h2>
			
			<?php if($location = get_field('location')):?>
				<h2 class="location">
					<?php echo $location;?>
				</h2>
			<?php endif;?>
	
			<?php if($date = get_field('date')):?>
				<h2 class="date">
					<?php echo $date;?>
				</h2>
			<?php endif;?>
			
			<?php if($heading_copy = get_field('heading_copy')):?>
				<p class="heading-copy">
					<?php echo $heading_copy;?>
				</p>
			<?php endif;?>
	
			
			<section>
				
				<ul class="accordion" data-allow-all-closed="true" data-accordion>
					
					<?php if($about = get_field('about')):?>
					<li class="accordion-item is-active" data-accordion-item>	    
						<a href="#" class="accordion-title">About</a>
							    
						<div class="accordion-content" data-tab-content>
							<?php echo $about;?>
						</div>
						
					</li>
					<?php endif;?>
	
					<?php if($papers = get_field('about')):?>
					<li class="accordion-item" data-accordion-item>	    
						<a href="#" class="accordion-title">Papers</a>
							    
						<div class="accordion-content" data-tab-content>
							<?php echo $papers;?>
						</div>
						
					</li>
					<?php endif;?>
					
					<?php if($fees = get_field('fees')):?>
					<li class="accordion-item" data-accordion-item>	    
						<a href="#" class="accordion-title">Fees</a>
							    
						<div class="accordion-content" data-tab-content>
							<?php echo $fees;?>
						</div>
						
					</li>
					<?php endif;?>
					
					<?php if($hotels = get_field('hotels')):?>
					<li class="accordion-item" data-accordion-item>	    
						<a href="#" class="accordion-title">Hotels</a>
							    
						<div class="accordion-content" data-tab-content>
							<?php echo $hotels;?>
						</div>
						
					</li>
					<?php endif;?>
					
					<?php if($agenda = get_field('agenda')):?>
					<li class="accordion-item" data-accordion-item>	    
						<a href="#" class="accordion-title">Agenda</a>
							    
						<div class="accordion-content" data-tab-content>
							<?php echo $agenda;?>
						</div>
						
					</li>
					<?php endif;?>
					
					<?php if($register = get_field('register')):?>
					<li class="accordion-item" data-accordion-item>	    
						<a href="#" class="accordion-title">Register</a>
							    
						<div class="accordion-content" data-tab-content>
							<?php echo $register;?>
						</div>
						
					</li>
					<?php endif;?>
					
				</ul>
				
			</section>
		
		<?php endif;?>
		
		<?php $post_id = get_queried_object_id();
			get_the_author_meta( 'nicename', $author_id );?>
	</header> <!-- end article header -->
									    						
</article> <!-- end article -->