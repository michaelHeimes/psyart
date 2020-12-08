<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	
	<header class="article-header">
		<h2><?php the_title(); ?></h2>
		
		<?php if ( $date = get_field('date')):?>
			<h3><?php echo $date;?></h3>
		<?php endif;?>
		
		<section>
			
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				+ <span class="underline">Read More</span>
			</a>
			
		</section>
		
		<?php $post_id = get_queried_object_id();
			get_the_author_meta( 'nicename', $author_id );?>
	</header> <!-- end article header -->
									    						
</article> <!-- end article -->