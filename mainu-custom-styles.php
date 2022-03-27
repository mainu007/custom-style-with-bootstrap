<?php
/**
* Plugin Name: Custom Styles with Bootstrap
* Plugin URI:        https://github.com/mainu007/custom-style-with-bootstrap
* Description:       This plugin is designed for bootstrap(v5.1.3) and custom css.
* Version:           1.0.0
* Author:            Main Uddin
* Author URI:        https://github.com/mainu007/
*/

function my_custom_css() {
wp_enqueue_style( 'my-bootstrap', plugin_dir_url(__FILE__).'bootstrap.css');
wp_enqueue_style( 'my-styles', plugin_dir_url(__FILE__).'styles.css');
}
add_action('wp_enqueue_scripts', 'my_custom_css');

?>