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
			
			if( !is_archive()):
				the_post();
			endif;
						
			the_author(); /* the_author_posts_link(); */ ?> | <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?>
			
			
		<?php
			
		if ( get_post_meta( get_the_ID() , 'wpb_post_views_count', true) == '') {
			echo 'Views: (0)' ;                            
			} else { 
			echo '(Views: ' . get_post_meta( get_the_ID() , 'wpb_post_views_count', true) . ')'; };
			
		?>
		
		</div>
		
		<?php $post_id = get_queried_object_id();
			get_the_author_meta( 'nicename', $author_id );?>
	</header> <!-- end article header -->
									    						
</article> <!-- end article -->