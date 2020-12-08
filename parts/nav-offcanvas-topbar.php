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
					    		<span><strong>Psyart</strong> Journal</span>	
					    	</a>
					    </li>
					<?php endif; ?>
						
					</ul>
				</div>
				
				<div class="right cell auto show-for-medium">
					
					<div class="nav-search-wrap grid-x grid-padding-x align-bottom">
						
						<div class="nav-wrap cell shrink">
							<?php joints_top_nav(); ?>
						</div>	
						
						<div class="form-wrap cell shrink">
							<form method="get" action="/" _lpchecked="1">
								<input type="text" name="s" placeholder="Search" class="">
								<input type="hidden" name="" value="">
								<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" alt="search"></button>
							</form>
						</div>
					
					</div>
					
				</div>
				
				<div class="right cell shrink show-for-small-only">
					
					<ul class="menu">
						<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
						<li><a data-toggle="off-canvas">
							<span></span><span></span><span></span>
						</a></li>
					</ul>
					
<!--
					<div class="form-wrap cell shrink">
						<form method="get" action="/" _lpchecked="1">
							<input type="text" name="s" placeholder="Search" class="">
							<input type="hidden" name="" value="">
							<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" alt="search"></button>
						</form>
					</div>
-->
							
				</div>
			
			</div>
		</div>
				
	</div>
	
</div>
<div class="header-accent-wrap grid-x grid-padding-x align-middle small-up-5">
	<div class="cell"></div>
	<div class="cell"></div>
	<div class="cell"></div>
	<div class="cell"></div>
	<div class="cell"></div>
</div>