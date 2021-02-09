<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

<?php
	$year = get_the_date('Y');
	$volume = substr( $year, -2) + 4;	
?> 
				
	<div class="content">
		<div class="grid-container">	
			<div class="inner-content grid-x grid-padding-x">
				
				<header class="page-header cell small-12">
					<div class="breadcrumbs">
						<span>
							<span>
								<a href="<?php get_home_url();?>">Home</a> &gt; <a href="<?php get_home_url();?>/all-articles/">All Articles</a> &gt; <span class="breadcrumb_last" aria-current="page">Year</span>
							</span>
						</span>
					</div>

					<h1 class="page-title"><?php echo 'Volume ' . $volume . ' (' .  $year . ')'?></h1>
					
				</header>
		
			    <main class="main small-12 cell" role="main">
			    
				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'article-archive' ); ?>
					    
					<?php endwhile; ?>	
	
						<?php joints_page_navi(); ?>
						
					<?php else : ?>
												
						<?php get_template_part( 'parts/content', 'missing' ); ?>
							
					<?php endif; ?>
																									
			    </main> <!-- end #main -->
			    	
			</div> <!-- end #inner-content -->
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>