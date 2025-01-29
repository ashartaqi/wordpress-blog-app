<?php

// adding css
function load_css() {
    
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], '5.3.3', 'all');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', [], '4.4.1', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/style.css', ['bootstrap-css']);
    
}
add_action('wp_enqueue_scripts', 'load_css');

// adding js
function load_js() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', ['jquery'], '1.16.0', true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', ['jquery', 'popper'], '4.4.1', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'load_js');

// theme options
function load_theme_support() {

    add_theme_support('title_tag');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'load_theme_support');
// adding menus
function load_menus(){
    register_nav_menus(
        array(
            'top-menu' => 'Top Menu Location',
            'mobile-menu' => 'Mobile Menu Location',
            'footer-menu' => 'Footer Menu Location',
        )
    );
}
add_action('init', 'load_menus');
// custom image sizes
add_image_size('blog-large', 800, 400 ,true);
add_image_size('blog-small', 300, 200 ,true);


function my_sidebars(){

    register_sidebar(array(
        'name' => 'Page-Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'blog-Sidebar',
        'id' => 'blog-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'my_sidebars')

?>
