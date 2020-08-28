<?php
/**
 * Plugin Name: ISIC Custom Modules
 * Plugin URI: http://www.inzite.dk
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Rasmus Jürs
 * Author URI: http://www.inzite.dk
 * Text Domain: isic-bb-modules
 * Domain Path: /languages
 */

function isic_bb_modules_load_plugin_textdomain() {
    load_plugin_textdomain( 'isic-bb-modules', FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'isic_bb_modules_load_plugin_textdomain' );
 
define( 'ISIC_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'ISIC_MODULES_URL', plugins_url( '/', __FILE__ ) );

function styles_includer() {
    wp_register_style('isic-tailwind', ISIC_MODULES_URL . '/build/style.css');
    wp_enqueue_style('isic-tailwind');
}

add_action( 'wp_enqueue_scripts','styles_includer');

add_action( 'init', 'isic_load_modules' );

function isic_load_modules() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'modules/isic-slider/isic-slider.php';
        require_once 'modules/isic-frontpage-content/isic-frontpage-content.php';

    }
}