<?php
// Exit if accessed directly
nocache_headers();
if ( !defined( 'ABSPATH' ) ) exit;



// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;




/*********Plug-in style*********/

if(!function_exists('child_configurator_css')):
    function child_configurator_css() {
        wp_enqueue_style('parent-style-min',trailingslashit(get_stylesheet_directory_uri()).'css/all.min.css');
        wp_enqueue_style('parent-style',trailingslashit(get_stylesheet_directory_uri()).'css/style.css');
    }
    endif;
add_action( 'wp_enqueue_scripts', 'child_configurator_css',15);
// END ENQUEUE PARENT ACTION

/** Remove autoformatting */
remove_filter( 'the_content', 'wpautop' );


/** Init TGM plagins installer */
require get_stylesheet_directory() . '/inc/tgm-list.php';


/*********Custom Post Types*********/


function create_post_type(){
    register_post_type('realty-object',array(
            'labels' => array(
                'name' => 'Объекты',
                'singular name' => 'Объект',
                'add_new' => 'Добавить новый'
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite'=> array( 'slug' => 'realty'),
            'menu_position' => 6,
            'menu_icon' => 'dashicons-admin-home',
            'taxonomies' => array( 'property type' ),
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            ),
        )
    );
    register_post_type('realty-cities',array(
            'labels' => array(
                'name' => 'Города',
                'singular name' => 'Город',

            ),
            'public' => true,
            'has_archive' => true,
            'rewrite'=> array( 'slug' => 'cities' ),
            'menu_position' => 5,
            'menu_icon' => 'dashicons-admin-multisite',
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            ),
        )
    );
}
add_action( 'init', 'create_post_type' );

/*********Custom Taxonomy*********/

function create_taxonomy(){
    register_taxonomy(
        'property type',
        'realty-object',
        array(
            'label' => __('Типы объектов'),
            'rewrite' => array(
                'slug' => 'property-type'
            ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'create_taxonomy' );


