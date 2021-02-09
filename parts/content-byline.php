<?php
/**
 * The template part for displaying an author byline
 */
?>

<p class="byline">
	
	<?php if( $author = get_field('authors_name') ):?>
	
		<?php echo $author;?> |
	
	<?php else:?>
		
		<?php the_author();?> | 
	
	<?php endif;

	$year = get_the_date('Y');
	$ordered_posts[$year][] = $post;
	$post_date = get_the_date();
	
	$volume = substr( $post_date, -2) + 4;?>

	<a href="/<?php echo $year;?>/?post_type=article"><?php echo $post_date; ?></a>
	
	<?php
	if ( get_post_meta( get_the_ID() , 'wpb_post_views_count', true) == '') {
		echo 'Views: (0)' ;                            
		} else { 
		echo '(Views: ' . get_post_meta( get_the_ID() , 'wpb_post_views_count', true) . ')'; };
	?>
	
</p>