<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
	
	<header class="article-header">
		<h2><a class="underline" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
		<div class="byline">
					
		<?php 
			
/*
			if( !is_archive()):
				the_post();
			endif;
*/
			

			get_template_part( 'parts/content', 'byline' );
		?>
		
		</div>
		
		<?php $post_id = get_queried_object_id();
			get_the_author_meta( 'nicename', $author_id );?>
	</header> <!-- end article header -->
									    						
</article> <!-- end article -->