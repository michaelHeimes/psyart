<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>
	<?php joints_off_canvas_nav(); ?>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>
	
	<div class="form-wrap cell shrink">
		<form method="get" action="/" _lpchecked="1">
			<input type="text" name="s" placeholder="Search" class="">
			<input type="hidden" name="" value="">
			<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" alt="search"></button>
		</form>
	</div>

</div>
