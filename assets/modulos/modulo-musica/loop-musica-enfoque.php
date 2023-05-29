<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/spotify/assets/modulos/modulo-musica/modulo-musica.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->
<section class="seccion-cinco p-3 row">
<h2 class="text-white fw-semibold pb-5">Enfoque</h2> 
    <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_per_page = -1; // -1 shows all posts
            $args = array(
                'post_type' => 'musica',
                'orderby' => 'date',
                'order' => 'ASC',
                'paged' => $paged,
                'posts_per_page' => $post_per_page,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'categoria-musica',
                        'field' => 'slug', 
                        'terms' => 'enfoque'
                    ),
                ),
            );
            
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<!--Aqui va el contenido-->
<div class="col-md-2 ms-4">
<figure>
<?php spotify_post_thumbnail(); ?>
<figcaption class="text-white pt-2 fw-semibold">
<h5><?php echo get_the_title();?></h5>
<span class="text-secondary contenido"><?php the_content()?></span>
</figcaption>
</figure>
</div>


<!--Aqui va el contenido-->
    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>


</section>
<!------seccion contacto---->