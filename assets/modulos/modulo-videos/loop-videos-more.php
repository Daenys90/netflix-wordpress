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
<div class="container">
<div class="row">
    <?php   $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_per_page = 5; // -1 shows all posts
            $args = array(
                'post_type' => 'videos',
                'orderby' => 'date',
                'order' => 'ASC',
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'genero-videos',
                        'field' => 'slug',
                        'terms' => 'more',
                    ),
                ),
            );
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<!-- contenido de la pelicula -->



<div class="card card-loop1 col-log-6 col-md-4 col-sm-12">
  <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="card-img-top" alt="series recomendadas">
  <div class="card-body card-loop2">
        <p class="card-text card-loop3"><?php the_content()?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-black"><i class="fa-solid fa-circle-plus"></i></a>
  </div>
</div>

    

<?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>



</div>
</div>
