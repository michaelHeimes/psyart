<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
<!-- 	<?php wp_get_archives(array('post_type'=>'article', 'type'=>'yearly'));?> -->
						
	<header class="article-header">	

		<?php get_template_part( 'parts/content', 'byline' ); ?>
		
			<div class="doc-tabs">
				
				<?php if($pdf =  get_field('pdf') ):?>
				
				<a href="<?php echo $pdf;?>" target="_blank">PDF</a><span> | </span>
				<a href="#" type="button" onclick="printJS('<?php echo $pdf;?>')">Print</a><span> | </span>
			    <?php endif;?>
			    
			    <?php 
				    global $post;
					$link = get_permalink();
				    $title = rawurlencode( get_the_title( $post ) );
				    $abstract = strip_tags( get_field('abstract'));
				    
				?>

				<a href="mailto:?&amp;subject=PsyArt Journal Article: <?php echo $title;?>&amp;body=Abstract:%0A%0A<?php echo $abstract;?>%0A%0A%0A%0AFull Article:%0A%0A<?php echo $link;?>" target="_blank">Email</a>
			</div>
				
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">

		<div class="abstact-wrap">
			<p>Abstract</p>
			<?php the_field('abstract');?>
		</div>	    
		
		<div class="keywords-wrap">
			<span>Keywords:</span> <span><?php the_field('keywords');?></span>
		</div>
	    
	    <div class="read-more-wrap"><a href="#" id="show-full-text">Read Full Text</a></div>
	    
		<div class="content-wrap" style="display: none;">
			<?php the_content(); ?>
		</div>
		
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
						
													
</article> <!-- end article -->