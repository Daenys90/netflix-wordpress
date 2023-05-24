<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/templatebase/assets/modulos/modulo-videos/modulo-videos.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

    <?php   $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_per_page = -1; // -1 shows all posts
            $args = array(
                'post_type' => 'videos',
                'orderby' => 'date',
                'order' => 'ASC',
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'tipo-videos',
                        'field' => 'slug',
                        'terms' => 'episodes',
                    ),
                ),
            );
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<!-- contenido de la pelicula -->

<div class="row">
<div class="col-md-3 col-sm-1 mb-3">
<a href="<?php the_permalink(); ?>">
<img class="thumbnail-inicio img-fluid rounded" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="video">	
</a> 
</div>

<div class="texto55 col-md-6 col-sm mb-3">
<h4 class="h4-episodios pb-3"><?php echo get_the_title(); ?></h4>
<div class="duracion d-flex flex-end mb-2">
<?php the_field('duracion_del_video'); ?>
</div>

<p><?php the_content();?></p>
</div>

</div>
<?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>




