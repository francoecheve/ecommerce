<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="mx-0 px-0">
    <!--carrusel-->
    <div class="carrusel">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="d-block w-100" alt="imagen uno carrusel">
          </div>
          <div class="carousel-item">
            <img src="" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!--carrusel-->
    <!--metodos de pago-->
    <section class="container bg-white mt-5 rounded">
<div class="row">
   <div class="col-lg-3 col-md-6 col-12 d-flex mg-lg-0 nb-md-0 border-end border-1">
   <div class="d-flex flex-column p-3">
   <?php the_field('pago_seguro'); ?> 
    <span class="text-secondary fw-light">con Mercado Pago</span>
   </div>
   
    </div>
    <div class="col-lg-3 col-md-6 col-12 d-flex mg-lg-0 nb-md-0 border-end border-1">
    <div class="pe-2 d-flex align-items-center">
    <?php
                        $image = get_field('img_cuotas');
                        if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
    </div>
   
   <div class="d-flex flex-column p-3">
   <?php the_field('cuotas');?>
   <a class="text-decoration-none text-primary" href="">Ver más</a>
   </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12 d-flex mg-lg-0 nb-md-0 border-end border-1">
    <div class="pe-2 d-flex align-items-center">
    <?php
                        $image = get_field('img_debito');
                        if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
    </div>
   
   <div class="d-flex flex-column p-3">
   <?php the_field('debito');?>
   <a class="text-decoration-none text-primary" href="">Ver más</a>
   </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12 d-flex mg-lg-0 nb-md-0">
    <div class="pe-2 d-flex align-items-center">
    <?php
                        $image = get_field('img_mas');
                        if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
    </div>
   
   <div class="d-flex flex-column p-3">
   <?php the_field('mas_medios');?>
   <a class="text-decoration-none text-primary" href="">Ver todos</a>
   </div>
    </div>
 </div>
    </section>
    <!--metodos de pago-->
    <!--Modulo Productos-->
    <div class="container">
     <?php include get_template_directory() . '/assets/modulos/modulo-productos/loop-productos.php'; ;?>
    </div>
    <!--Modulo Productos-->
      <!--suscribete-->
      <section class="container bg-white mt-5 rounded">
     <article class="row pt-4 suscribete d-flex align-items-center rounded-top">
     <div class="col-md-10 col-12">
     <h4 class="d-flex align-items-center fw-normal">Suscribete al nivel 6</h4>
     </div>
     <div class="d-flex flex-column col-md-2 border-start border-1 border-light">
     <span class="d-flex justify-content-start text-decoration-line-through">$15.000</span>
     <h5 class="d-flex justify-content-start">$5.990 al mes</h5>
     </div>
     </article>
     <article class="row">
     <div class="col-md-12 col-12 p-4">
     <p>Consigue los mejores beneficios en mercado libre</p>
     </div>
     <div class="col-md-4 col-12 d-flex mg-lg-0 nb-md-0 align-items-center">
    <div class="pe-2">
    <?php
                        $image = get_field('disney_plus');
                        if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
    </div>
   
   <div class="d-flex flex-column p-3">
   <?php the_field('disney_texto');?>
   </div>
    </div>
    <div class="col-md-4 col-12 d-flex mg-lg-0 nb-md-0 align-items-center">
    <div class="pe-2">
    <?php
                        $image = get_field('star');
                        if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
    </div>
   
   <div class="d-flex flex-column p-3">
   <?php the_field('star_texto');?>
   </div>
    </div>
    <div class="col-md-4 col-12 d-flex mg-lg-0 nb-md-0 border-end border-1 align-items-center">
    <div class="pe-2">
    <?php
                        $image = get_field('envio_gratis');
                        if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
    </div>
   
   <div class="d-flex flex-column p-3">
   <?php the_field('envio_gratis_texto');?>
   </div>
    </div>
    <div class="col-12 d-flex justify-content-end border-top border-1">
    <a class="btn btn-primary rounded text-white mt-3 mb-3 " href="">Suscribete</a>
    </div>
     </article>
     </section>
      <!--suscribete-->
      <!--Beneficios de mercado puntos-->
      <section class="container mt-5">
      <div class="d-flex align-items-center">
      <h3 class="text-secondary fw-light">Beneficios de Mercado Puntos</h3>
      <a class="text-primary text-decoration-none ms-3" href="#">Ver todos los beneficios</a>
      </div>
      <article class="row mt-2 d-flex flex-wrap justify-content-between mx-auto">
      <div style="background-image: url(<?php echo get_field('beneficio_1'); ?>); background-size:100%; background-position:center; height:30vh; cursor:pointer;" class="beneficio_1 col-md-4 align-items-end">
      <div class="pe-2">
    <?php
                        $image = get_field('disneystar');
                        if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
    </div>
      </div>
      <div  style="background-image: url(<?php echo get_field('beneficio_2'); ?>); background-size:100%; background-position:center; cursor:pointer;" class="beneficio_1 col-md-4">
      <div class="pe-2">
    <?php
                        $image = get_field('hbomax');
                        if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
    </div>
    <div>
    <p class="fw-medium">Sin Cargo con el nivel 6</p>
    </div>
      </div>
      <div  style="background-image: url(<?php echo get_field('beneficio_3'); ?>); background-size:100%; background-position:center; cursor:pointer;" class="beneficio_1 col-md-4">
      <div class="pe-2">
    <?php
                        $image = get_field('paramount');
                        if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
    </div>
      </div>
      </article>
      </section>
       <!--Beneficios de mercado puntos-->
        <!--Publicidad-->
        <section class="container mt-5 rounded mb-5">
        <article class="row">
        <div class="col-md-8 mx-0 px-0">
    <?php
                        $image = get_field('publicidad');
                        if( !empty( $image ) ): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
    </div>
    <div class="col-md-4 publicidad d-flex flex-column justify-content-center">
    <p class="text-light fw-light text-uppercase spacing">¡Comete un snickers!</p>
    <h4 class="text-light fw-semibold text-uppercase">Disfrutalos con un 10% off</h4>
    <h5> <a class="text-light text-decoration-none mt-5" href="">Ver Productos</a></h5>
    </div>
        </article>
        </section>
         <!--Publicidad-->
         <!--Descubre-->
         <section class="container mt-5">
  <h3 class="text-secondary fw-light">Descubre</h3>
  <article class="row">
    <div class="card mb-3 col-md-6 mx-0 px-0">
      <div class="row g-0">
        <div class="col-md-6 d-flex justify-content-center">
          <div class="card-body d-flex flex-column justify-content-center">
            <p class="card-text text-uppercase spacing">Especial Invierno</p>
            <h5 class="card-title text-uppercase">Prepara tu auto para la nieve</h5>
            <a class="btn btn-primary col-md-6"><small class="text-light">Ver Más</small></a>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <?php
            $image = get_field('rueda');
            if (!empty($image)):
          ?>
            <img class="img-fluid descubre" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="card mb-3 col-md-6 mx-0 px-0">
      <div class="row g-0">
        <div class="col-md-6 d-flex justify-content-center">
          <div class="card-body d-flex flex-column justify-content-center">
            <p class="card-text text-uppercase spacing">Especial Invierno</p>
            <h5 class="card-title text-uppercase">Calientacamas plumones y más</h5>
            <a class="btn btn-primary col-md-6"><small class="text-light">Ver Más</small></a>
          </div>
        </div>
        <div class="col-md-6 mx-0 px-0 d-flex justify-content-end">
          <?php
            $image = get_field('cama');
            if (!empty($image)):
          ?>
            <img class="img-fluid descubre" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </article>
</section>
         <!--Descubre-->
         <!--Mejores Tiendas-->
         <section class="container mt-5 mb-5">
  <h3 class="text-secondary fw-light">Las mejores tiendas te esperan</h3>
  <article>
  <div class="card-group">
    <div class="card mx-3">
      <div class="col-md-12 mx-0 px-0 position-relative">
        <?php
        $image = get_field('oralb_portada');
        if (!empty($image)):
        ?>
        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <?php
        $image = get_field('oralb_logo');
        if (!empty($image)):
        ?>
        <img class="img-fluid position-absolute top-100 start-50 translate-middle mt-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="card-body d-flex justify-content-center flex-column">
        <div class="mt-5 mx-0 px-0 text-center">
          <h4>Oral B</h4>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <?php
          $image = get_field('oralb_producto1');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php
          $image = get_field('oralb_producto2');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php
          $image = get_field('oralb_producto3');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="d-flex justify-content-center mt-4">
          <a class="text-decoration-none text-secondary text-center" href="">Ver Tienda</a>
        </div>
      </div>
    </div>
    <div class="card mx-3">
      <div class="col-md-12 mx-0 px-0 position-relative">
        <?php
        $image = get_field('xiaomi_portada');
        if (!empty($image)):
        ?>
        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <?php
        $image = get_field('xiaomi_logo');
        if (!empty($image)):
        ?>
        <img class="img-fluid position-absolute top-100 start-50 translate-middle mt-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="card-body d-flex justify-content-center flex-column">
        <div class="mt-5 mx-0 px-0 text-center">
          <h4>Xiaomi</h4>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <?php
          $image = get_field('xiaomi_producto1');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php
          $image = get_field('xiaomi_producto2');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php
          $image = get_field('xiaomi_producto3');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="d-flex justify-content-center mt-4">
          <a class="text-decoration-none text-secondary text-center" href="">Ver Tienda</a>
        </div>
      </div>
    </div>

    <div class="card mx-3">
      <div class="col-md-12 mx-0 px-0 position-relative">
        <?php
        $image = get_field('adidas_portada');
        if (!empty($image)):
        ?>
        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <?php
        $image = get_field('adidas_logo');
        if (!empty($image)):
        ?>
        <img class="img-fluid position-absolute top-100 start-50 translate-middle mt-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="card-body d-flex justify-content-center flex-column">
        <div class="mt-5 mx-0 px-0 text-center">
          <h4>Adidas Performance</h4>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <?php
          $image = get_field('adidas_producto1');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php
          $image = get_field('adidas_producto2');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php
          $image = get_field('adidas_producto3');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="d-flex justify-content-center mt-4">
          <a class="text-decoration-none text-secondary text-center" href="">Ver Tienda</a>
        </div>
      </div>
    </div>

    <div class="card mx-3">
      <div class="col-md-12 mx-0 px-0 position-relative">
        <?php
        $image = get_field('hp_portada');
        if (!empty($image)):
        ?>
        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <?php
        $image = get_field('hp_logo');
        if (!empty($image)):
        ?>
        <img class="img-fluid position-absolute top-100 start-50 translate-middle mt-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="card-body d-flex justify-content-center flex-column">
        <div class="mt-5 mx-0 px-0 text-center">
          <h4>HP</h4>
        </div>
        <div class="d-flex justify-content-center mt-3">
          <?php
          $image = get_field('hp_producto1');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php
          $image = get_field('hp_producto2');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
          <?php
          $image = get_field('hp_producto3');
          if (!empty($image)):
          ?>
          <img class="img-fluid mx-1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="d-flex justify-content-center mt-4">
          <a class="text-decoration-none text-secondary text-center" href="">Ver Tienda</a>
        </div>
      </div>
    </div>
  </div>
</article>
</section>
          <!--Mejores Tiendas-->
            <!--Te puede interesar-->
         <section class="container mt-5">
  <h3 class="text-secondary fw-light">Te puede interesar</h3>
  <article class="row">
    <div class="card mb-3 col-md-6 mx-0 px-0">
      <div class="row g-0">
        <div class="col-md-6 d-flex justify-content-center">
          <div class="card-body d-flex flex-column justify-content-center">
            <p class="card-text text-uppercase spacing">Especial Invierno</p>
            <h5 class="card-title text-uppercase">Calientacamas y plumones</h5>
            <a class="btn btn-primary col-md-6"><small class="text-light">Ver Más</small></a>
          </div>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <?php
            $image = get_field('cama');
            if (!empty($image)):
          ?>
            <img class="img-fluid descubre" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="card mb-3 col-md-6 mx-0 px-0">
      <div class="row g-0">
        <div class="col-md-6 d-flex justify-content-center">
          <div class="card-body d-flex flex-column justify-content-center">
            <p class="card-text text-uppercase spacing">No te lo pierdas</p>
            <h5 class="card-title text-uppercase">Ofertas solo por hoy</h5>
            <a class="btn btn-primary col-md-6"><small class="text-light">Ver Más</small></a>
          </div>
        </div>
        <div class="col-md-6 mx-0 px-0 d-flex justify-content-end">
          <?php
            $image = get_field('nescafe');
            if (!empty($image)):
          ?>
            <img class="img-fluid descubre" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </article>
</section>
         <!--Te puede interesar-->
  </div>
</article><!-- #post-<?php the_ID(); ?> -->

