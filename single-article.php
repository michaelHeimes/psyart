<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<main class="main small-12 cell" role="main">
			
			<div class="breadcrumbs">
				
				<?php
				$year = get_the_date('Y');
				$ordered_posts[$year][] = $post;
				$post_date = get_the_date();
				
				$volume = substr( $post_date, -2) + 4;?>
			
				<a href="/<?php echo $year;?>/?post_type=article">Volume <span><?php echo $volume; ?></span> (<?php echo $year; ?>)</a> > <span><?php the_title();?></span>
			
			</div>
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' );
			    	
			    count_views(get_the_ID());?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->


	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>