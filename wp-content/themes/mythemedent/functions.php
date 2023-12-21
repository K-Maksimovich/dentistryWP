<?php 


define('B_THEME_ROOT', get_template_directory_uri() );
define('B_IMG_DIR', B_THEME_ROOT . '/assets/img' );


/* Подключение стилей и скриптов */

add_action( 'wp_enqueue_scripts', 'band_digital_scripts' );
function band_digital_scripts() {
 /* подключение стилей */
    wp_enqueue_style( 'main', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), ' ');
    wp_enqueue_style( 'bootstrap-style-grid', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap-grid.min.css', array(), ' ');
    wp_enqueue_style( 'band-digital', get_template_directory_uri() . '/assets/css/style.css', array(), ' ');


    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/plugins/jquery/jquery.min.js');
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/plugins/bootstrap/js/popper.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-style', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
}



if ( ! function_exists('band_digital_setup') ){
    function band_digital_setup(){
        add_theme_support( 'custom-logo', [
            'height' => 130,
            'width' => 50,
            'flex-width' => true,
            'flex-height'=> false,
            'header-text'=> '',
            'unlink-homepage-logo'=> true,
        ] );

        add_theme_support('title-tag');
    }

    add_action('after_setup_theme','band_digital_setup');
}


function band_digital_menus(){
    $locatoins = array(
        'header' => __('Main menu', 'band_digital'),
        'footer'=> __('Footer menu', 'band_digital')
    );
    register_nav_menus($locatoins);
}
add_action('init','band_digital_menus');



class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $li_attributes = '';
        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = ($args->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
        $classes[] = 'nav-item';
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';
        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $attributes .= ($args->has_children) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown"' : ' class="nav-link"';
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= ($args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
        $item_output .= $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}