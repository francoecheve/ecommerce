<?php
function comercio_framework(){
    
    
    
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', 'all');
    wp_register_style('icons-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', 'all');
    wp_register_style('estilos', get_template_directory_uri() . '/assets/librerias/css/estilos.css', 'all');
    


    wp_enqueue_style('bootstrap');
    wp_enqueue_style('icons-bootstrap');
    wp_enqueue_style('estilos');
 
    
    
}


add_action('wp_enqueue_scripts', 'comercio_framework');


/*assets styles*/