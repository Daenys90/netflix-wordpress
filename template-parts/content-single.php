<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package templatebase
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="imagen videos">	


	<header class="entry-header">
	<span>	
	<?php
		if ( 'post' === get_post_type() ) : 	?>
			<div class="entry-meta-1 text-white">
	</span>	
		
	<?php endif; ?>
	<h1><?php echo get_the_title();?></h1>

	<p</p><?php echo get_the_excerpt();?></p>
	</header><!-- .entry-header -->

	<div>
		<?php the_content(
			 sprintf(
			 	wp_kses(
			 		/* translators: %s: Name of current post. Only visible to screen readers */
			 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'templatebase' ),
			 		array(
			 			'span' => array(
			 				'class' => array(),
			 			),
			 		)
			 	),
			 	wp_kses_post( get_the_title() )
			 )
		);

		
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php templatebase_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
