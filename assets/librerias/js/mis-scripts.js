jQuery(document).ready(function($){

    $('#carrusel-productos').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: true,
        dots: true,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 375,
            settings: {
                slidesToShow: 1
            }
        }]
    })
     // Modificar la galería del producto
     $('.woocommerce div.product').addClass('row');
     $('.woocommerce div.product div.images.woocommerce-product-gallery').addClass('d-flex flex-row-reverse col-12 col-md-6');
     $('.woocommerce div.product div.images.flex-control-thumbs').addClass('col-12 col-md-2 d-flex justify-content-start flex-column align-items-center m-0 p-0');
     $('.woocommerce div.product div.images.flex-control-thumbs .flex-viewport').addClass('col-12 col-md-10');
     $('.woocommerce div.product div.images.flex-control-thumbs li').addClass('col-12');
   
     // Modificar el detalle del producto
     $('.woocommerce div.product div.summary').after('<div id="informacion-vendedor" class="info-vendedor col-12 col-md-3">Hola mundo</div>');
     $('.woocommerce div.product div.summary').removeClass('summary').addClass('col-12 col-md-3');


    //Página de Producto
    $('.woocommerce-breadcrumb').addClass('container mt-5 mb-2');
    $('.woocommerce-breadcrumb a').addClass('text-decoration-none');
    $('div.type-product').addClass('row p-3 bg-white border rounded');
    $('.onsale').addClass('d-none');
    $('.woocommerce-product-gallery').addClass('col-md-6 d-flex flex-row-reverse');
    $('div.type-product.flex-viewport').addClass('col-md-9');
    $('.flex-viewport').addClass('col-12');
    $('.woocommerce div.woocommerce-product-gallery ol.flex-control-nav li').addClass('p-0 m-0 w-100');
    $('.woocommerce-product-gallery__wrapper').addClass('col-8');
    $('.woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image').addClass('col-12');
    $('.wp-post-image').addClass('col-12');
    $('.woocommerce-Tabs-panel').addClass('border-top border-bottom mb-4');
    $('.woocommerce-Tabs-panel h2').addClass('h4 mt-4');
    $('.woocommerce-Tabs-panel p').addClass('text-secondary mb-4');
    $('.description_tab a').addClass('text-decoration-none');
    $('.reviews_tab a').addClass('text-decoration-none');
    $('.woocommerce-Reviews p.woocommerce-noreviews').addClass('bg-white');
    $('section.related').addClass('d-none');
    $('.related .products li').addClass('border card');
    $('.added_to_cart').addClass('btn btn-primary ms-4');
    //Página de Producto

    //Panel Información de Producto
    $('.summary').addClass('col-md-6 border rounded p-3 d-flex flex-column');
    $('.summary h1').css('font-size', '22px');
    $('.summary p.price').addClass('d-flex flex-column');
    $('.summary p.price ins').css({'font-size':'36px', 'background-color':'white'});
    $('.product_meta').addClass('d-none');
    $('.quantity input.input-text').addClass('form-control col-12 mb-3');
    $('.single_add_to_cart_button').css({'background-color':'rgba(65,137,230,.15)', 'border-color':'transparent','color':'#3483fa', 'border-radius':'10px'});
    //Panel Información de Producto

    //Carrito
    $('.entry-header').addClass('d-none');
    $('.article.type-page').addClass('h-100');
    $('article.type-page div.entry-content div.woocommerce').addClass('container mt-3 p-3');
    $('article.type-page div.entry-content .woocommerce-cart-form').addClass('col-md-7 border rounded bg-white p-3');
    $('article.type-page div.entry-content .woocommerce-cart-form .shop_table').before('<div class="border-bottom row p-1"><h3 class="h5 fw-bold">Carrito de Compras</h3></div>');
    $('article.type-page div.entry-content .woocommerce-cart-form .shop_table').addClass('table table-borderless align-middle');
    $('article.type-page div.entry-content .woocommerce-cart-form .shop_table .actions div.coupon').prependTo('.wc-proceed-to-checkout');
    $('article.type-page div.cart-collaterals').addClass('p-3');
    $('article.type-page div.cart-collaterals .cart_totals .shop_table').addClass('table table-borderless align-middle justify-content-end');
    $('article.type-page div.cart-collaterals .cart_totals h2').text('Resumen de compra');
    $('article.type-page div.cart-collaterals .cart_totals h2').addClass('h5 fw-bold border-bottom p-2');
    $('article.type-page div.cart-collaterals div.wc-proceed-to-checkout div.coupon .button').addClass('btn btn-primary');
    $('.checkout-button ').appendTo('.cart_totals');
    $('article.type-page div.cart-collaterals div.cart_totals  div.wc-proceed-to-checkout').addClass('mb-5');
    $('article.type-page div.cart-collaterals div.cart_totals a.checkout-button').addClass('btn btn-primary');
    $('article.type-page div.entry-content .woocommerce-cart-form .shop_table .actions div.coupon .button').addClass('btn btn-primary');
    $('article.type-page div.entry-content .woocommerce-cart-form .shop_table .actions .button').addClass('btn btn-primary mt-4 mb-0');
    $('article.type-page div.entry-content .woocommerce-cart-form .shop_table .cart_item .product-name a').addClass('text-decoration-none text-black');
    $('article.type-page div.entry-content .woocommerce-cart-form .shop_table .cart_item .product-remove a').text('Eliminar');
    $('article.type-page div.entry-content .woocommerce-cart-form .shop_table .cart_item .product-remove a').addClass('text-decoration-none');
    $('article.type-page div.cart-collaterals').addClass('col-md-4 offset-md-1 border rounded bg-white');
    $('footer.entry-footer').addClass('d-none');
    $('article.type-page div.entry-content .woocommerce p.woocommerce-info').css('background-color', 'transparent');
    $('article.type-page div.entry-content .woocommerce p.return-to-shop a').html('<i class="bi bi-arrow-return-left"></i> Volver a la Tienda');
    $('article.type-page div.entry-content .woocommerce p.return-to-shop a').addClass('text-decoration-none');
    //Carrito

    //Checkout
    $('.entry-content form.checkout').addClass('row p-4');
    $('.entry-content form.checkout .col2-set').toggleClass('col-md-6 bg-white border rounded p-4');
    $('.entry-content form.checkout .col-1').toggleClass('col-1 col-md-12');
    $('.entry-content form.checkout .col-2').toggleClass('col-2 col-md-12');
    $('.entry-content form.checkout h3').addClass('d-none');
    $('.entry-content form.checkout .woocommerce-checkout-review-order').addClass('col-md-5 offset-md-1 background-checkout-derecha border rounded p-4');
    $('.entry-content .woocommerce .woocommerce-form-coupon-toggle .woocommerce-info').prependTo('.woocommerce-checkout-review-order');
    $('.entry-content .woocommerce .woocommerce-info').css({'background-color':'transparent','margin-bottom':'10px'});
    $('.entry-content .woocommerce .woocommerce-info a').addClass('text-decoration-none');
    $('.checkout div.woocommerce-billing-fields div.woocommerce-billing-fields__field-wrapper').addClass('d-flex flex-column');
    $('.checkout div.woocommerce-billing-fields div.woocommerce-billing-fields__field-wrapper .form-row label').addClass('form-label');
    $('.woocommerce-input-wrapper input.input-text ').addClass('form-control');
    //Checkout


})