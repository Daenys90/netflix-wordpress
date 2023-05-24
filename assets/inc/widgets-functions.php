<?php

function example_theme_support() {
    remove_theme_support('widgets-block-editor');
}
add_action( 'after_setup_theme', 'example_theme_support' );


/*widget assets*/

function zona_widget(){

    register_sidebar(
        array(
        'name' => 'menu navbar',
        'id' => 'navbar', // id y nombre 
        'before_widget' => '<div id ="%1$s">', // clases y contenedor
        'after_widget'=>'</div>', //cerramos los contenedores
        'before_title' => '<h5 class="menu-navbar">', //anadimos contenedores para titulo
        'after_title' => '</h5>' //cerramos los contenedores de titulo
    ));

register_sidebar(
        array(
        'name' => 'footer columna 1',
        'id' => 'footer_1', // id y nombre del footer
        'before_widget' => '<div id ="%1$s" class="col-12 col-md-4 sidebar-1">', // clases y contenedor
        'after_widget'=>'</div>', //cerramos los contenedores
        'before_title' => '<h5 class="titulo-menu-footer">', //anadimos contenedores para titulo
        'after_title' => '</h5>' //cerramos los contenedores de titulo
    ));

    register_sidebar(
        array(
        'name' => 'footer columna 2',
        'id' => 'footer_2',
        'before_widget' => '<div id ="%1$s" class="col-12 col-md-4 sidebar-1">',
        'after_widget'=>'</div>', //cerramos los contenedores
        'before_title' => '<h5 class="titulo-menu-footer">', //anadimos contenedores para titulo
        'after_title' => '</h5>' //cerramos los contenedores de titulo
    ));

register_sidebar(
    array(
    'name' => 'footer columna 3',
    'id' => 'footer_3',
    'before_widget' => '<div id ="%1$s" class="col-12 col-md-4 sidebar-1">',
    'after_widget'=>'</div>', //cerramos los contenedores
    'before_title' => '<h5 class="titulo-menu-footer">', //anadimos contenedores para titulo
    'after_title' => '</h5>' //cerramos los contenedores de titulo
));

register_sidebar(
    array(
    'name' => 'footer columna 4',
    'id' => 'footer_4',
    'before_widget' => '<div id ="%1$s" class="col-12 col-md-4 sidebar-1">',
    'after_widget'=>'</div>', //cerramos los contenedores
    'before_title' => '<h5 class="titulo-menu-footer">', //anadimos contenedores para titulo
    'after_title' => '</h5>' //cerramos los contenedores de titulo
));




}

add_action('widgets_init', 'zona_widget');
/*widgets assets*/


