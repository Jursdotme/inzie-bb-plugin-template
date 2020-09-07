<?php

/**
 * Plugin Name: Inzite Custom Modules
 * Plugin URI: http://www.inzite.dk
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 1.0
 * Author: Rasmus Jürs
 * Author URI: http://www.inzite.dk
 * Text Domain: inzite-bb-modules
 * Domain Path: /languages
 */

function inzite_bb_modules_load_plugin_textdomain() {
    load_plugin_textdomain('inzite-bb-modules', FALSE, basename(dirname(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'inzite_bb_modules_load_plugin_textdomain');

define('INZITE_MODULES_DIR', plugin_dir_path(__FILE__));
define('INZITE_MODULES_URL', plugins_url('/', __FILE__));

function styles_includer() {
    wp_register_style('inzite-tailwind', INZITE_MODULES_URL . '/build/style.css');
    wp_enqueue_style('inzite-tailwind');
}

add_action('wp_enqueue_scripts', 'styles_includer');

add_action('init', 'inzite_load_modules');

function inzite_load_modules() {
    if (class_exists('FLBuilder')) {
        require_once 'modules/inzite-slider/inzite-slider.php';
        require_once 'modules/inzite-frontpage-content/inzite-frontpage-content.php';
    }
}
