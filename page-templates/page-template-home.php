<?php 
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
			<main class="main" role="main">
					    
			    <section class="intro">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-middle">
							
							<div class="copy-wrap cell small-12 medium-auto large-9">
				
							    <?php if( $intro_copy = get_field('intro_copy') ):?>
							    <?php echo $intro_copy;?>
							    <?php endif;?>
					    
							</div>
							
							<div class="cell small-12 medium-shrink large-3">
								
								<?php 
								$link = get_field('cta_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
								
							</div>
							
						</div>
					</div>
			    </section>
			    
			    <section class="home-nav">
					<div class="grid-container">
						<div class="card-wrap grid-x grid-padding-x small-up-1 medium-up-3">
							
							<div class="cell">
								
								<div class="inner text-center">
								
									<div class="icon-wrap text-center">
							    		<i class="fas fa-book-reader"></i>
									</div>
									
									<div class="bottom">
										
										<?php 
											$current_vol_year = get_field('current_archive_year');
											$volume = substr( $current_vol_year, -2) + 4;
											
											echo '<h3>Current: Volume ' . $volume . ' (' .  $current_vol_year . ')</h3>';
											
										?>
										
										<div>
											<a class="underline" href="<?php get_home_url();?>/articles/<?php echo $current_vol_year;?>" rel="bookmark" title="<?php the_title_attribute(); ?>">View most recent article</a>
										</div>	
	
									</div>
									
								</div>
								
							</div>
							
							<div class="cell">
								
								<div class="inner text-center">
								
									<div class="icon-wrap text-center">
							    		<i class="fas fa-book-open"></i>
									</div>
									
									<div class="bottom">
										<h3>All Articles 2013 - Present</h3>
										
										<div>
											<a class="underline" href="<?php echo home_url(); ?>/all-articles/">Visit all articles</a>
										</div>
										
									</div>
								
								</div>
								
							</div>
							
							<div class="cell">
								
								<div class="inner text-center">
								
									<div class="icon-wrap text-center">
							    		<i class="fas fa-bookmark"></i>
									</div>
									
									<div class="bottom">
										<h3>Archived Journal Volumes</h3>
										
										<div>
											
										<?php 
										$link = get_field('archived_journal_volumes_link');
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link['target'] : '_self';
										    ?>
										    <a class="underline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										<?php endif; ?>
																					
										</div>
										
									</div>	
									
								</div>							
								
							</div>
							
						</div>
					</div>
			    </section>
			    
			    <?php if( get_field('add_call_to_action')):?>
			    <section class="cta">
					<div class="grid-container">
						<div class="grid-x grid-margin-x">
							<div class="cell small-12">				    
				    
								<?php if( have_rows('call_to_action') ):?>
									<?php while ( have_rows('call_to_action') ) : the_row();?>	
								
									<div class="copy-wrap">
										<?php the_sub_field('copy');?>
									</div>
									
									<?php 
									$link = get_sub_field('link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									<div>
									    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									</div>
									<?php endif; ?>									
								
									<?php endwhile;?>
								<?php endif;?>
				    
							</div>
						</div>
					</div>
			    </section>
			    <?php endif;?>
					    						
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>




