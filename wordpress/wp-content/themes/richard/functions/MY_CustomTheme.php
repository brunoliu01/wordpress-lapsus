<?php
/*
 * PostTypes Personalizados
 * -------------------------
 */

function create_post_type() {


    // servicios
    register_post_type('Servicios', array(
        'labels' => array(
            'name' => __('Servicios'),
            'singular_name' => __('Noticias de Futbol'),
            'all_items' => __('Ver Noticias de Futbol'),
            'add_new_item' => __('Agregar nueva noticia de futbol'),
            'edit_item' => __('Editar noticia de futbol'),
            'new_item' => __('Nueva noticia de futbol'),
            'view_item' => __('Ver noticias de futbol'),
            'search_items' => __('Buscar noticias de futbol'),
            'not_found' => __('No se encontraron noticias de futbol'),
            'parent_item_colon' => '',
        ),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'futbol'),
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'hierarchical' => false,
        'query_var' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
        'show_in_menu' => true,
        'show_ui' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-groups',
       )
    );



    // QUE_HACEMOS
    register_post_type('QUE_HACEMOS', array(
        'labels' => array(
            'name' => __('QUE_HACEMOS'),
            'singular_name' => __('Noticias de QUE_HACEMOS'),
            'all_items' => __('Ver Noticias de QUE_HACEMOS'),
            'add_new_item' => __('Agregar nueva noticia de QUE_HACEMOS'),
            'edit_item' => __('Editar noticia de QUE_HACEMOS'),
            'new_item' => __('Nueva noticia de QUE_HACEMOS'),
            'view_item' => __('Ver noticias de QUE_HACEMOS'),
            'search_items' => __('Buscar noticias de QUE_HACEMOS'),
            'not_found' => __('No se encontraron noticias de QUE_HACEMOS'),
            'parent_item_colon' => '',
        ),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'futbol'),
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'hierarchical' => false,
        'query_var' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
        'show_in_menu' => true,
        'show_ui' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-groups',
       )
    );

    // Contact
    register_post_type('menu', array(
        'labels' => array(
            'name' => __('menu'),
            'singular_name' => __('Noticias de menu'),
            'all_items' => __('Ver Noticias de menu'),
            'add_new_item' => __('Agregar nueva noticia de menu'),
            'edit_item' => __('Editar noticia de menu'),
            'new_item' => __('Nueva noticia de menu'),
            'view_item' => __('Ver noticias de menu'),
            'search_items' => __('Buscar noticias de menu'),
            'not_found' => __('No se encontraron noticias de menu'),
            'parent_item_colon' => '',
        ),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'futbol'),
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'hierarchical' => false,
        'query_var' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
        'show_in_menu' => true,
        'show_ui' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-groups',
       )
    );

    //slider

    register_post_type('slide', array(
        'labels' => array(
            'name' => __('slide'),
            'singular_name' => __('Noticias de slide'),
            'all_items' => __('Ver Noticias de slide'),
            'add_new_item' => __('Agregar nueva noticia de slide'),
            'edit_item' => __('Editar noticia de slide'),
            'new_item' => __('Nueva noticia de slide'),
            'view_item' => __('Ver noticias de slide'),
            'search_items' => __('Buscar noticias de slide'),
            'not_found' => __('No se encontraron noticias de slide'),
            'parent_item_colon' => '',
        ),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'slide'),
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'hierarchical' => false,
        'query_var' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
        'show_in_menu' => true,
        'show_ui' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-groups',
       )
    );

//seccion novedades
    register_post_type('novedades', array(
        'labels' => array(
            'name' => __('novedades'),
            'singular_name' => __('Noticias de novedades'),
            'all_items' => __('Ver Noticias de novedades'),
            'add_new_item' => __('Agregar nueva noticia de novedades'),
            'edit_item' => __('Editar noticia de novedades'),
            'new_item' => __('Nueva noticia de novedades'),
            'view_item' => __('Ver noticias de novedades'),
            'search_items' => __('Buscar noticias de novedades'),
            'not_found' => __('No se encontraron noticias de novedades'),
            'parent_item_colon' => '',
        ),
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'futbol'),
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'hierarchical' => false,
        'query_var' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
        'show_in_menu' => true,
        'show_ui' => true,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-groups',
       )
    );

    //seccion enfoque
        register_post_type('enfoque', array(
            'labels' => array(
                'name' => __('enfoque'),
                'singular_name' => __('Noticias de enfoque'),
                'all_items' => __('Ver Noticias de enfoque'),
                'add_new_item' => __('Agregar nueva noticia de enfoque'),
                'edit_item' => __('Editar noticia de enfoque'),
                'new_item' => __('Nueva noticia de enfoque'),
                'view_item' => __('Ver noticias de enfoque'),
                'search_items' => __('Buscar noticias de enfoque'),
                'not_found' => __('No se encontraron noticias de enfoque'),
                'parent_item_colon' => '',
            ),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'futbol'),
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'hierarchical' => false,
            'query_var' => true,
            'supports' => array('title', 'thumbnail', 'editor'),
            'show_in_menu' => true,
            'show_ui' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-groups',
           )
        );

        //seccion contacto
            register_post_type('contacto', array(
                'labels' => array(
                    'name' => __('contacto'),
                    'singular_name' => __('Noticias de contacto'),
                    'all_items' => __('Ver Noticias de contacto'),
                    'add_new_item' => __('Agregar nueva noticia de contacto'),
                    'edit_item' => __('Editar noticia de contacto'),
                    'new_item' => __('Nueva noticia de contacto'),
                    'view_item' => __('Ver noticias de contacto'),
                    'search_items' => __('Buscar noticias de contacto'),
                    'not_found' => __('No se encontraron noticias de contacto'),
                    'parent_item_colon' => '',
                ),
                'public' => true,
                'show_ui' => true,
                'capability_type' => 'post',
                'rewrite' => array('slug' => 'futbol'),
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'hierarchical' => false,
                'query_var' => true,
                'supports' => array('title', 'thumbnail', 'editor'),
                'show_in_menu' => true,
                'show_ui' => true,
                'menu_position' => 6,
                'menu_icon' => 'dashicons-groups',
               )
            );

            register_post_type('map', array(
                'labels' => array(
                    'name' => __('skills'),
                    'singular_name' => __('Noticias de map'),
                    'all_items' => __('Ver Noticias de map'),
                    'add_new_item' => __('Agregar nueva noticia de map'),
                    'edit_item' => __('Editar noticia de map'),
                    'new_item' => __('Nueva noticia de map'),
                    'view_item' => __('Ver noticias de map'),
                    'search_items' => __('Buscar noticias de map'),
                    'not_found' => __('No se encontraron noticias de map'),
                    'parent_item_colon' => '',
                ),
                'public' => true,
                'show_ui' => true,
                'capability_type' => 'post',
                'rewrite' => array('slug' => 'map'),
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'hierarchical' => false,
                'query_var' => true,
                'supports' => array('title', 'thumbnail', 'editor'),
                'show_in_menu' => true,
                'show_ui' => true,
                'menu_position' => 6,
                'menu_icon' => 'dashicons-groups',
               )
            );

            register_post_type('parallax', array(
                'labels' => array(
                    'name' => __('parallax'),
                    'singular_name' => __('Noticias de parallax'),
                    'all_items' => __('Ver Noticias de parallax'),
                    'add_new_item' => __('Agregar nueva noticia de parallax'),
                    'edit_item' => __('Editar noticia de parallax'),
                    'new_item' => __('Nueva noticia de parallax'),
                    'view_item' => __('Ver noticias de parallax'),
                    'search_items' => __('Buscar noticias de parallax'),
                    'not_found' => __('No se encontraron noticias de parallax'),
                    'parent_item_colon' => '',
                ),
                'public' => true,
                'show_ui' => true,
                'capability_type' => 'post',
                'rewrite' => array('slug' => 'parallax'),
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'hierarchical' => false,
                'query_var' => true,
                'supports' => array('title', 'thumbnail', 'editor'),
                'show_in_menu' => true,
                'show_ui' => true,
                'menu_position' => 6,
                'menu_icon' => 'dashicons-groups',
               )
            );

            register_post_type('clientes', array(
                'labels' => array(
                    'name' => __('clientes'),
                    'singular_name' => __('Noticias de clientes'),
                    'all_items' => __('Ver Noticias de clientes'),
                    'add_new_item' => __('Agregar nueva noticia de clientes'),
                    'edit_item' => __('Editar noticia de clientes'),
                    'new_item' => __('Nueva noticia de clientes'),
                    'view_item' => __('Ver noticias de clientes'),
                    'search_items' => __('Buscar noticias de clientes'),
                    'not_found' => __('No se encontraron noticias de clientes'),
                    'parent_item_colon' => '',
                ),
                'public' => true,
                'show_ui' => true,
                'capability_type' => 'post',
                'rewrite' => array('slug' => 'clientes'),
                'publicly_queryable' => true,
                'exclude_from_search' => false,
                'hierarchical' => false,
                'query_var' => true,
                'supports' => array('title', 'thumbnail', 'editor'),
                'show_in_menu' => true,
                'show_ui' => true,
                'menu_position' => 6,
                'menu_icon' => 'dashicons-groups',
               )
            );



}
add_action('init', 'create_post_type');
