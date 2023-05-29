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
<section class="seccion-cinco mb-5 p-3 m-0 row">
<div class="row border-secondary border-bottom">
<div class="col-md-1">
<p class="ms-5 text-secondary">#</p>
</div>
<div class="col-md-1">
<p class="text-secondary">Titulo</p>
</div>
<div class="col-md-3">
<p class="text-secondary"></p>
</div>
<div class="col-md-3">
<p class="text-secondary">Álbum</p>
</div>
<div class="col-md-3">
<p class="text-secondary">Fecha en que se agrego</p>
</div>
<div class="col-md-1">
<p class="text-secondary"><i class="bi bi-clock"></i></p>
</div>
</div>

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
                        'terms' => 'cancion'
                    ),
                ),
            );
            
            $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<!--Aqui va el contenido-->
<div class="row mt-2">
<div class="col-md-1">
<p class="text-light ms-5 mt-4"><?php the_field('numero_cancion'); ?></p>
</div>

<div class="col-md-1">
<div class="mt-2">
<?php 
$image = get_field('portada_cancion');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</div>
</div>

<div class="col-md-3 canciones">
<p class="text-light mt-1"><?php the_field('titulo_cancion'); ?></p>
<p class="text-secondary mt-1"><?php the_field('artista_cancion'); ?></p>
</div>

<div class="col-md-3">
<p class="text-secondary mt-4"><?php the_field('album_cancion'); ?></p>
</div>

<div class="col-md-3">
<p class="text-secondary mt-4"><?php the_field('fecha_cancion'); ?></p>
</div>

<div class="col-md-1">
<p class="text-secondary mt-4"><?php the_field('duracion_cancion'); ?></p>
</div>
</div>
<!--Aqui va el contenido-->
    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>


</section>
<!------seccion contacto---->