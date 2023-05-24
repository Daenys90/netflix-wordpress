<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package templatebase
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card col-12 col-md-4'); ?>>
	<div class="card-body">
	<?php templatebase_post_thumbnail(); ?>
	<a href="<?php the_permalink();?>"></a>
	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
