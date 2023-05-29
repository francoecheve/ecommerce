<?php 

function example_theme_support() {
    remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'example_theme_support');

/*widget assets*/
function zona_widget()
{
//Widget 1
register_sidebar(array(
    'name'=> 'Footer columna 1', 
    'id'=> 'footer_uno', //le damos Id y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //Añadimos clases y contenedor
    'after_widget' => '</div>', //cerramos los contenedores
    'before_title'=> '<h5 class="titulo-menu-footer">', //añadimos contenedores para titulo
    'after_title'=> '</h5>', //cerramos contenedores para titulo
));

//Widget 1

//Widget 2
register_sidebar(array(
    'name'=> 'Footer columna 2', 
    'id'=> 'footer_dos', //le damos Id y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //Añadimos clases y contenedor
    'after_widget' => '</div>', //cerramos los contenedores
    'before_title'=> '<h5 class="titulo-menu-footer">', //añadimos contenedores para titulo
    'after_title'=> '</h5>', //cerramos contenedores para titulo
));

//Widget 2

//Widget 3
register_sidebar(array(
    'name'=> 'Footer columna 3', 
    'id'=> 'footer_tres', //le damos Id y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //Añadimos clases y contenedor
    'after_widget' => '</div>', //cerramos los contenedores
    'before_title'=> '<h5 class="titulo-menu-footer">', //añadimos contenedores para titulo
    'after_title'=> '</h5>', //cerramos contenedores para titulo
));

//Widget 3

//Widget 4
register_sidebar(array(
    'name'=> 'Footer columna 4', 
    'id'=> 'footer_cuatro', //le damos Id y nombre al footer
    'before_widget'=> '<div id="%1$s" class="col-12 col-md-4">', //Añadimos clases y contenedor
    'after_widget' => '</div>', //cerramos los contenedores
    'before_title'=> '<h5 class="titulo-menu-footer">', //añadimos contenedores para titulo
    'after_title'=> '</h5>', //cerramos contenedores para titulo
));

//Widget 4

}

add_action ('widgets_init', 'zona_widget');
/*Widget assets*/

