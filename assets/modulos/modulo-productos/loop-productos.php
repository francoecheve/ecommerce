<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url = '<?php echo get_site_url() . '/wp-content/themes/ecommerce/assets/modulos/modulo-productos/modulo-productos.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>
<!--Script que permite llamar a la hoja de estilos cuando se muestre el custom post type-->


<!--Sección 1-->
<section>
    <h2 class="mt-5 text-secondary fw-light">Ofertas</h2>
    <div id="carrusel-productos" class="row pe-0 ps-0 d-flex justify-content-between ms-0 me-0">
    <!--Custom Loop-->
    <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; //Número de paginas
            $post_per_page = 5; // -1 shows all posts Cantidad de post a mostrar
            $args = array(
                'posts_per_page' => 5, // Número máximo de publicaciones a mostrar
                'post_type'     => 'product', // Tipo de publicación a consultar
                'post_status'   => 'publish', // Estado de la publicación
             //   'tax_query'     => array(
            //      array(

            //            'taxonomy' => 'product_visibility', // Taxonomía a filtrar
            //            'field'   => 'name', // Campo de la taxonomía a comparar
            //            'terms'   => 'featured', // Valor de la taxonomía a buscar
            //            'operator' => 'IN', // Operador para comparar términos (puede ser IN, NOT IN, etc.)
             //       ),
             //   ),
            );

    $featured_product = new WP_Query( $args ); // Realizar la consulta de publicaciones
    if ( $featured_product->have_posts() ) { // Comprobar si hay publicaciones encontradas
        while ( $featured_product->have_posts() ) : $featured_product->the_post();
        // Inicio del bucle para mostrar cada publicación encontrada
    ?>

        <div class="card col-md-2 col-6 slidel d-flex justify-content-center">
            <?php wc_get_template_part( 'content', 'product' ); ?>
        </div>

    <?php
    endwhile; // Fin del bucle para mostrar cada publicación
    } else {
    echo __( 'Lo sentimos no hay productos' ); // Mostrar mensaje si no se encuentran productos
    }
    wp_reset_postdata(); // Restablecer los datos de la consulta original
    ?>
    </div>
</section>
<!--Sección 1-->
    
       


<!--Aqui va el contenido-->
    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>


</section>
<!------seccion contacto---->