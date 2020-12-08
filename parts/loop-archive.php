<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	
	
	
		<header class="article-header">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><span class="title underline"><?php the_title(); ?></span></a></h2>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
		</header> <!-- end article header -->
		
		<?php if( !is_author()):?>
						
			<section class="entry-content" itemprop="text">
				<?php the_excerpt();?>
			</section> <!-- end article section -->
								
			<footer class="article-footer">
		    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointswp') . '</span> ', ', ', ''); ?></p>
			</footer> <!-- end article footer -->	
		
		<?php endif;?>
					    	
						
</article> <!-- end article -->
