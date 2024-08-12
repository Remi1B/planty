<?php
// Exit if accessed directly
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
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    // Vérifier si l'utilisateur est connecté et si l'emplacement du menu est 'primary'
    if (is_user_logged_in() && ($args->theme_location === 'primary' || $args->theme_location === 'mobile_menu')) {
        // Définir l'élément "Admin"
        $admin_item = '<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home"><a class="menu-link" href="' . admin_url() . '">Admin</a></li>';
        // Séparer les éléments de menu en un tableau
        $items_array = explode('</li>', $items);
        // Enlever les éléments vides du tableau
        $items_array = array_filter($items_array, function($value) {
            $value = trim($value); // Enlever les espaces blancs
            return !empty($value); // Vérifier que l'élément n'est pas vide
        });
        // Ajouter l'élément "Admin" à l'avant-dernière position
        if (count($items_array) > 0) {
            array_splice($items_array, count($items_array) - 1, 0, $admin_item);
        } else {
            $items_array[] = $admin_item;
        }
        // Recombiner les éléments en une seule chaîne
        $items = implode('</li>', $items_array) . '</li>';
    }
    return $items;
}
