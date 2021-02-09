<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	
	<div class="cell small-12">
	
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle align-justify">
			
				<div class="left cell shrink">
					<ul class="menu">
						
					<?php 
					$image = get_field('header_logo', 'option');
					if( !empty( $image ) ): ?>
					    <li>
					    	<a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					    		<span>Psy<br>Art</span>	
					    	</a>
					    </li>
					<?php endif; ?>
						
					</ul>
				</div>
				
				<div class="right cell auto show-for-tablet">
					
					<div class="nav-search-wrap grid-x grid-padding-x align-bottom align-right">
						
						<div class="cell small-12 text-right">
							<div class="form-wrap">
								<form method="get" action="/" _lpchecked="1">
									<input type="text" name="s" placeholder="Search by author or keyword" class="">
									<input type="hidden" name="" value="">
									<button class="no-style" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" alt="search"></button>
								</form>
							</div>
						</div>
						
						<div class="nav-wrap cell small-12">
							<?php joints_top_nav(); ?>
						</div>	
					
					</div>
					
				</div>
				
				<div class="right cell shrink hide-for-tablet">
					
					<ul class="menu">
						<li><a data-toggle="off-canvas">
							<span></span><span></span><span></span>
						</a></li>
					</ul>
							
				</div>
			
			</div>
		
		<div class="bottom-line"></div>
			
		</div>
						
	</div>
	
</div>