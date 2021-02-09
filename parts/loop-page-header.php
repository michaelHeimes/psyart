<header class="page-header cell small-12">
	
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('
			<div class="breadcrumbs">','</div>');
		}
	?>
			
	<h1 class="page-title"><?php the_title(); ?></h1>
</header> <!-- end article header -->