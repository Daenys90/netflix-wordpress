<?php
function js_script()
{
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer

        // Register the script like this for a theme:

    //wp_register_scrip( $handle, $src, $deps, $ver, $in_footer ); 
    wp_register_script('bootstrap-js','	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', true);
    wp_register_script('miarchivo-js', get_bloginfo('template_directory') . '/assets/librerias/js/mi-archivo.js', array('jquery'), '1', true);
    wp_register_script('font-awesome', 'https://kit.fontawesome.com/70e0b19f51.js', true);


        /*encolamos los JS*/
        wp_enqueue_script('miarchivo-js', array('jquery'), true);
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('font-awesome');
               
    }
}
add_action("wp_enqueue_scripts", "js_script", 1);


