<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">
	<div class="grid-container">
		<div class="inner-content grid-x grid-padding-x">
			
			<?php get_template_part('parts/loop', 'page-header');?>
			
			<?php if( has_term( 'news', 'types' )):?>

			<main class="main small-12 cell" role="main">
	
			<?php else:?>
	
			<main class="main small-12 large-8 medium-8 cell" role="main">
				
			<?php endif;?>
							
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			    	<?php get_template_part( 'parts/loop', 'event' );
				    	
				    count_views(get_the_ID());?>
			    	
			    <?php endwhile; else : ?>
			
			   		<?php get_template_part( 'parts/content', 'missing' ); ?>
	
			    <?php endif; ?>
	
			</main> <!-- end #main -->
			
			
			<?php if( !has_term( 'news', 'types' )):?>
				<?php get_sidebar(); ?>
			<?php endif;?>
	
		</div> <!-- end #inner-content -->
	</div>
</div> <!-- end #content -->

<?php get_footer(); ?>