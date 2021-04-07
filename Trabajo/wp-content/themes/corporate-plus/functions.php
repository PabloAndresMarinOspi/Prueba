<?php
/**
 * Corporate Plus functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Corporate Plus
 */

/**
 * Require init.
 */

function load_scripts()
{
    wp_enqueue_style('jquery-confirm_style', get_stylesheet_directory_uri() . '/assets/library/jquery-confirm/jquery-confirm.min.css');
    wp_enqueue_script('js_jquery-confirm', get_stylesheet_directory_uri() . '/assets/library/jquery-confirm/jquery-confirm.min.js', array('jquery'), '4.1.3', true);
    wp_enqueue_script('js_wp-custom', get_stylesheet_directory_uri() . '/assets/js/wp-custom.js', array('jquery'), '4.1.3', true);
}    

require_once trailingslashit( get_template_directory() ).'acmethemes/init.php';
require_once get_parent_theme_file_path('/wp-custom/CWebServices.php');
add_action('wp_enqueue_scripts', 'load_scripts');