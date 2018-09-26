<?php


function scratch_enqueue_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.1', 'all');
    wp_enqueue_script('script' , get_template_directory_uri() . '/js/main.js',array(), '1.1',true);
  
}

function register_sidebar_locations() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 1,
            'class'         => 'aside-container',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="aside-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

add_action( 'widgets_init', 'register_sidebar_locations' );

add_action('wp_enqueue_scripts', 'scratch_enqueue_scripts');
?>