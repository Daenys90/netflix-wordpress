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
                        'terms' => 'destacada',
                    ),
                ),
            );
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<!-- contenido de la pelicula -->
<a href="<?php the_permalink(); ?>">
     <img class="img-fluid destacada" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="video">	  
     <h2 clas="h2-destacada"><?php echo get_the_title(); ?></h2> 
</a>      



<?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>




