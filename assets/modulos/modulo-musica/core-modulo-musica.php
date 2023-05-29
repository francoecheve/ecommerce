<?php  /*  musica */

function musica_register() {

    $labels = array(
        'name' => _x('Música', 'post type general name'),
        'singular_name' => _x('musica', 'post type singular name'),
        'add_new' => _x('Agregar musica', 'slideshow_two item'),
        'add_new_item' => __('Agregar musica'),
        'edit_item' => __('Editar musica'),
        'new_item' => __('Nueva musica'),
        'view_item' => __('Ver la musica'),
        'search_items' => __('Buscar musica'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-format-audio',
        'hierarchical' => false,
        'menu_position' => null,
        'supports'=> array( 'title','thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'musica', 'with_front' => false)
      ); 

    register_post_type( 'musica' , $args );
}

add_action('init', 'musica_register');

 /*categorias personalizadas para musica*/
 function categoria_musica() {

	register_taxonomy(
		'categoria-musica',
		'musica',
		array(
			'label' => __( 'Categoria musica' ),
			'rewrite' => array( 'slug' => 'categoria-musica' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_musica' );


function etiqueta_musica() {

register_taxonomy(
			'etiqueta-musica','musica',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta musica' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'musicaquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-musica' ),
		)
	);

 


}
add_action( 'init', 'etiqueta_musica' );
