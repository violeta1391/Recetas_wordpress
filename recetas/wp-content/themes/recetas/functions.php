<?php 

function cargar_css(){
    wp_enqueue_style("font-google", "https://fonts.googleapis.com/css2?family=Montserrat:wght@500;800&display=swap");
    wp_enqueue_style("normalize", get_stylesheet_directory_uri()."/css/normalize.css");
    wp_enqueue_style("estilos", get_stylesheet_directory_uri()."/css/estilos.css");
}

add_action("wp_enqueue_scripts", "cargar_css");

function cargar_js(){
    wp_enqueue_script("modernizr", get_stylesheet_directory_uri()."/js/modenizr.js");
}
add_action("wp_enqueue_scripts", "cargar_js");

add_theme_support("menus");
add_theme_support("post-thumbnails");

function registrar_menus(){

    register_nav_menus( array(
        'menu_cabecera' => 'menu en cabecera'
    ));
}
add_action( 'init', 'registrar_menus' );