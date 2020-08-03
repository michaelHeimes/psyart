<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
<!-- 	<?php wp_get_archives(array('post_type'=>'article', 'type'=>'yearly'));?> -->
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>

		<?php if($pdf =  get_field('pdf') ): ?>
		
			<div class="doc-tabs">
				
				<a href="<?php echo $pdf;?>" target="_blank">
					PDF
				</a>

				<a href="#" type="button" onclick="printJS('<?php echo $pdf;?>')">
					Print
			    </a>

				<a href="mailto:<?php echo $pdf;?>" target="_blank">PDF</a>
				
				
				
<!--
						<a class="c-shares__method o-button o-button--unstyled u-text--heading-tiny" href="mailto:?&amp;subject=Blog post: <?php echo $title . ', from ' .  $yoast_primary;?>&amp;body=<?php echo $yoast_primary;?>%0D%0A %0D%0A<?php echo $title?>%0D%0A %0D%0A<?php echo $excerpt; ?>... %0A%0A Read More: <?php echo $url_link; ?>" target="_blank">
			<span class="screen-reader-text">Share via email</span><i class="fas fa-envelope"></i>
		</a>
-->

				
			</div>
		
		<?php endif;?>
		
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
						
	<?php comments_template(); ?>	
													
</article> <!-- end article -->