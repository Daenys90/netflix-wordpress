<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package templatebase
 */

?>

<!-- aqui diagramo como se ve la pelicula /serie -->


<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- titulo  -->
<div class="container section-inicio" > 

	<span>	
	<?php
		if ( 'post' === get_post_type() ) : 	?>
	
	</span>	
		
	<?php endif; ?>
	
<div class="row" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id ($post->ID));?>'); min-height: 100vh; background-position: center; background-size:cover;">

<div class="body-entrada col-md-6 mb-5">
<span class="h3-categoria"><img src="assets/img/top10.png">SERIES</span>

<h2 class="h2-titulo"><?php echo get_the_title(); ?></h2>
<br>
<div class="botones-entrada w-100">
<a class="play btn btn-light col-sm-2" href="http://localhost/netflix/videos/destacada/" role="button"><i class="fa-sharp fa-solid fa-play"></i>   Play </a>
<i class="fa-solid fa-circle-plus"></i>
<i class="fa-solid fa-thumbs-up"></i>
</div>
<br>
</div>

<div class="descripcion11 mt-5">
<div class="row mt-5">

<h3 class="h3-extracto-entrada col"><?php the_content(); ?></h3>
<div class="info-serie d-flex col-md-2"> 
<?php get_sidebar(); ?>
</div>
</div>
</div>

</div>
</div>

<div class="container d-flex pt-5"> 
<div class="row">
<hr>
<div class="loop2">
<div class="col-md-2 d-flex justify-content-end"><a href="#" class="season-btn btn" role="button">Season 2</a></div>
<h4 class="h4-interior mb-4">Episodes</h4>

<h5 class="h5-interior">Season 2: <small>16+ violence</small></h5>
<hr>
<div class="loop2-interior">
	<?php include get_template_directory() . '/assets/modulos/modulo-videos/loop-videos-episodes.php'?></div>
</div>
</div>
</div>


<h4 class="h4-interior">More like This</h4>
<br>
<div class="loop3"><?php include get_template_directory() . '/assets/modulos/modulo-videos/loop-videos-more.php'?></div>
</div>
</div>

	<!-- <div class="contenido-entrada">
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
	</div>.entry-content -->


</section>
