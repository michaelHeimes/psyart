<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div class="grid-container">
	<div class="grid-x grid-padding-x">
		<div class="breadcrumbs cell small-12">
			<a href="<?php echo home_url();?>">Home</a> > <a href="<?php echo home_url(); ?>/news-events/">News + Events</a> > <span><?php the_title();?></span>
		</div>		
	</div>
</div>		
			
<div class="content">
	<div class="grid-container">
		<div class="inner-content grid-x grid-padding-x">
	
			<main class="main cell small-12 medium-10 large-9" role="main">
							
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			    	<?php get_template_part( 'parts/loop', 'event' );
				    	
				    count_views(get_the_ID());?>
			    	
			    <?php endwhile; else : ?>
			
			   		<?php get_template_part( 'parts/content', 'missing' ); ?>
	
			    <?php endif; ?>
	
			</main> <!-- end #main -->
	
		</div> <!-- end #inner-content -->
	</div>
</div> <!-- end #content -->

<?php get_footer(); ?>