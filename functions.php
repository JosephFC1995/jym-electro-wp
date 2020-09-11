<?php

add_action('wp_enqueue_scripts', 'template_scripts');

function template_scripts()
{
    // CSS DEL SITIO

    wp_enqueue_style('Mi sitio Estilo', get_template_directory_uri() . '/style.css', 'null', 'false', 'all');

    wp_enqueue_style('Adition CSS', get_template_directory_uri() . '/library/css/style.css', 'null', 'false', 'all');

    // UIKIT
    wp_enqueue_style('Uikit CSS', "//cdn.jsdelivr.net/npm/uikit@3.4.6/dist/css/uikit.min.css", 'null', 'false', 'all');

    wp_enqueue_script('Uikit JS', '//cdn.jsdelivr.net/npm/uikit@3.4.6/dist/js/uikit.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_script('UikitIcon JS', '//cdn.jsdelivr.net/npm/uikit@3.4.6/dist/js/uikit-icons.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_script('Slick JS', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_style('Slick CSS', "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css", 'null', 'false', 'all');
    wp_enqueue_style('SlickTheme CSS', "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css", 'null', 'false', 'all');

    // GOOGLE FONT

    wp_enqueue_style('Google Font', '//fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap', 'null', 'false', 'all');

    // Google Map API

    // wp_enqueue_script('Googlemapapi', '//maps.googleapis.com/maps/api/js?key=AIzaSyAyPrqZb9nl5EJhvnxMhnZ1Y0lLIUbKe8I', array('jquery'), 'false', 'true');

    //IZI toast

    // wp_enqueue_script('SVG', get_template_directory_uri() . '/library/js/SVGMaker/SVGMarker.min.js', array('jquery'), false, true);

    wp_enqueue_style('fontawa CSS', get_template_directory_uri() . '/font/css/font-awesome.css', 'null', 'false', 'all');

    wp_enqueue_style('BootstrapGrid CSS', "//cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap-grid.min.css", 'null', 'false', 'all');

    wp_enqueue_style('IZItoast CSS', "//cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css", 'null', 'false', 'all');

    wp_enqueue_script('IziToast', '//cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js', array('jquery'), 'false', 'false');

    // Fancy JS

    wp_enqueue_style('fancybox CSS', get_template_directory_uri() . '/library/css/jquery.fancybox.min.css', 'null', 'false', 'all');

    wp_enqueue_script('fancybox JS', get_template_directory_uri() . '/library/js/jquery.fancybox.min.js', array('jquery'), 'false', 'false');

    wp_enqueue_script('Debounce JS', get_template_directory_uri() . '/library/js/debounce.js', array('jquery'), 'false', 'false');

    wp_enqueue_script('Themes JS', get_template_directory_uri() . '/library/js/master.js', array('jquery'), 'false', 'false');

    wp_localize_script('Themes JS', 'ajax_option', array(
        'ajaxurl'        => admin_url('admin-ajax.php'),
        'home_url'       => home_url(),
        'products'       => null,
        'loadingmessage' => __('Enviando información'),
    ));
}

add_action('init', 'mis_menus');

function mis_menus()
{
    register_nav_menus(
        array(
            'navegation' => __('Menú de navegación'),
        )
    );
}

add_action('widgets_init', 'dcms_widget_footer_1');

function dcms_widget_footer_1()
{

    register_sidebar(array(

        'name'          => 'Columna footer',

        'id'            => 'widget-footer-1',

        'description'   => 'Área para las widget en el footer',

        'before_widget' => '<section id="%1$s" class="widget %2$s con_tew-widget-area con_tew"><div class="cont-filter-brand filter-cl">',

        'after_widget'  => '</div></section>',

        'before_title'  => '<h4 class="title_w font-weight-bold text-uppercase">',

        'after_title'   => '</h4>',

    ));

}

add_action('widgets_init', 'dcms_widget_footer_2');

function dcms_widget_footer_2()
{

    register_sidebar(array(

        'name'          => 'Columna footer',

        'id'            => 'widget-footer-2',

        'description'   => 'Área para las widget en el footer',

        'before_widget' => '<section id="%1$s" class="widget %2$s con_tew-widget-area con_tew"><div class="cont-filter-brand filter-cl">',

        'after_widget'  => '</div></section>',

        'before_title'  => '<h4 class="title_w font-weight-bold text-uppercase">',

        'after_title'   => '</h4>',

    ));

}

add_action('widgets_init', 'dcms_widget_footer_3');

function dcms_widget_footer_3()
{

    register_sidebar(array(

        'name'          => 'Columna footer',

        'id'            => 'widget-footer-3',

        'description'   => 'Área para las widget en el footer',

        'before_widget' => '<section id="%1$s" class="widget %2$s con_tew-widget-area con_tew"><div class="cont-filter-brand filter-cl">',

        'after_widget'  => '</div></section>',

        'before_title'  => '<h4 class="title_w font-weight-bold text-uppercase">',

        'after_title'   => '</h4>',

    ));

}

function my_acf_init()
{

    acf_update_setting('google_api_key', 'AIzaSyAyPrqZb9nl5EJhvnxMhnZ1Y0lLIUbKe8I');
}

add_action('acf/init', 'my_acf_init');

function init_functions()
{
   

}
add_action('init', 'init_functions');


function ajax_response($status)
{
    wp_send_json($status);
    die();
}
add_theme_support( 'post-thumbnails' );




add_action('init', 'creacion_marca_producto', 0);

function creacion_marca_producto()
{

    $labels = array(

        'name'              => _x('Marca producto ', 'taxonomy general name'),

        'singular_name'     => _x('Marca producto ', 'taxonomy singular name'),

        'search_items'      => __('Buscar por marca'),

        'all_items'         => __('Todos los marca'),

        'parent_item'       => __('Marca padre'),

        'parent_item_colon' => __('Marca padre:'),

        'edit_item'         => __('Editar categoria'),

        'update_item'       => __('Actualizar categoria'),

        'add_new_item'      => __('Añadir nuevo categoria'),

        'new_item_name'     => __('Nombre del nuevo categoria'),

    );

    register_taxonomy('marca_tax', array('producto'), array(

        'hierarchical' => true,

        'labels'       => $labels,

        'show_ui'      => true,

        'query_var'    => true,

        'has_archive'  => false,

        'rewrite'      => array('slug' => 'producto', 'with_front' => false),

    ));

}


add_action('init', 'creacion_categorias_blog', 0);

function creacion_categorias_blog()
{

    $labels = array(

        'name'              => _x('Categoria producto ', 'taxonomy general name'),

        'singular_name'     => _x('Categoria producto ', 'taxonomy singular name'),

        'search_items'      => __('Buscar por categoria'),

        'all_items'         => __('Todos los categoria'),

        'parent_item'       => __('Categoria padre'),

        'parent_item_colon' => __('Categoria padre:'),

        'edit_item'         => __('Editar categoria'),

        'update_item'       => __('Actualizar categoria'),

        'add_new_item'      => __('Añadir nuevo categoria'),

        'new_item_name'     => __('Nombre del nuevo categoria'),

    );

    register_taxonomy('producto_tax', array('producto'), array(

        'hierarchical' => true,

        'labels'       => $labels,

        'show_ui'      => true,

        'query_var'    => true,

        'has_archive'  => false,

        'rewrite'      => array('slug' => 'producto', 'with_front' => false),

    ));

}

add_action('init', 'custom_post_type_productos');

function custom_post_type_productos()
{

    $labels = array(

        'name'               => _x('Productos', 'post type general name'),

        'singular_name'      => _x('Productos', 'post type singular name'),

        'add_new'            => _x('Añadir producto', 'book'),

        'add_new_item'       => __('Añadir nueva producto'),

        'edit_item'          => __('Editar producto'),

        'new_item'           => __('Nuevo producto'),

        'view_item'          => __('Ver producto'),

        'search_items'       => __('Buscar'),

        'not_found'          => __('No se han encontrado una producto'),

        'not_found_in_trash' => __('No se han encontrado una producto'),

        'parent_item_colon'  => '',

    );

    // Creamos un array para $args

    $args = array('labels' => $labels,

        'public'               => true,

        'publicly_queryable'   => true,

        'show_ui'              => true,

        'query_var'            => true,

        'rewrite'              => array('slug' => 'producto', 'with_front' => false),

        'has_archive'          => 'producto',

        'capability_type'      => 'post',

        'hierarchical'         => false,

        'menu_position'        => null,

        'supports'             => array('title', 'editor', 'author', 'thumbnail'),

    );

    register_post_type('producto', $args);

}



add_action('init', 'custom_post_type_clientes');

function custom_post_type_clientes()
{

    $labels = array(

        'name'               => _x('Clientes', 'post type general name'),

        'singular_name'      => _x('Clientes', 'post type singular name'),

        'add_new'            => _x('Añadir cliente', 'book'),

        'add_new_item'       => __('Añadir nueva cliente'),

        'edit_item'          => __('Editar cliente'),

        'new_item'           => __('Nuevo cliente'),

        'view_item'          => __('Ver cliente'),

        'search_items'       => __('Buscar'),

        'not_found'          => __('No se han encontrado una cliente'),

        'not_found_in_trash' => __('No se han encontrado una cliente'),

        'parent_item_colon'  => '',

    );

    // Creamos un array para $args

    $args = array('labels' => $labels,

        'public'               => true,

        'publicly_queryable'   => true,

        'show_ui'              => true,

        'query_var'            => true,

        'rewrite'              => array('slug' => 'clientes', 'with_front' => false),

        'has_archive'          => 'clientes',

        'capability_type'      => 'post',

        'hierarchical'         => false,

        'menu_position'        => null,

        'supports'             => array('title', 'editor', 'author', 'thumbnail'),

    );

    register_post_type('clientes', $args);

}