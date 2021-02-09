<?php 
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="sidebar1" class="sidebar small-12 medium-4 large-4 cell" role="complementary">
	
	<?php if( is_singular('event') ):?>
	
<?php if( have_rows('sidebar_widget') ):?>
	<div class="widget">
	<?php while ( have_rows('sidebar_widget') ) : the_row();?>	
	
	<div class="copy-wrap">
		<?php the_sub_field('copy');?>
	</div>
	
	<?php 
	$link = get_sub_field('cta_button');
	if( $link ): 
	    $link_url = $link['url'];
	    $link_title = $link['title'];
	    $link_target = $link['target'] ? $link['target'] : '_self';
	    ?>
	    <div class="btn-wrap">
	    	<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
	    </div>
	<?php endif; ?>

	<?php endwhile;?>
	</div>
<?php endif;?>

	<?php else:?>

		<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
	
			<?php dynamic_sidebar( 'sidebar1' ); ?>
	
		<?php endif; ?>

	<?php endif; ?>

</div>