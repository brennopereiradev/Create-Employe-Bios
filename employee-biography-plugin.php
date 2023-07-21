<?php
/*
Plugin Name: Employee Biography
Plugin URI: https://zondahome.com/
Description: To show employee bio on pages or posts, you need to include this shortcode: [employee-biography id="XX"] and change the "XX" to the Employee Bio custom page id.
Version: 1.0
Author: Brenno Matthias Pereira
Author URI: https://brenno.vercel.app/
License: GPL2
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


// Enqueue the stylesheet for the shortcode.
function employee_biography_enqueue_styles() {
    if ( has_shortcode( get_post()->post_content, 'employee-biography' ) ) {
        wp_enqueue_style( 'employee-biography-css', plugin_dir_url( __FILE__ ) . 'assets/css/employee-biography.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'employee_biography_enqueue_styles' );


// Add settings link on the plugin list page.
function employee_biography_settings_link( $links ) {
    $settings_link = '<a href="' . esc_url( admin_url( 'edit.php?post_type=employee_bio&page=settings' ) ) . '">' . esc_html__( 'Settings', 'employee-biography-plugin' ) . '</a>';
    array_unshift( $links, $settings_link );
    return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'employee_biography_settings_link' );


// Add a new submenu item inside the "Employee Bios" menu.
function employee_biography_add_submenu_item() {
    add_submenu_page(
        'edit.php?post_type=employee_bio', // Parent Slug (slug of Employee Bios menu)
        'Settings',             // Page Title
        'Settings',                  // Menu Title
        'manage_options',                  // Capability required to access the page
        'settings',             // Menu Slug (should be unique)
        'employee_biography_render_custom_submenu' // Callback function to render the submenu page
    );
}
add_action( 'admin_menu', 'employee_biography_add_submenu_item' );

// Callback function to render the content for the custom submenu page.
function employee_biography_render_custom_submenu() {
    // Include the custom PHP file content.
    include plugin_dir_path( __FILE__ ) . 'templates/settings.php';
}


// Register the custom post type for employee bios.
function employee_biography_register_post_type() {
    $args = array(
        'public'        => true,
        'label'         => 'Employee Bios',
        'menu_position' => 80,
        'menu_icon'     => 'dashicons-id-alt',
        'supports'      => array( 'title', 'thumbnail' ),
        'show_in_rest'  => true,
    );

    register_post_type( 'employee_bio', $args );
}
add_action( 'init', 'employee_biography_register_post_type' );


// Shortcode for displaying employee biography.
function employee_biography_shortcode( $atts ) {
    ob_start();

    $atts = shortcode_atts( array(
        'id' => null,
    ), $atts );

    $post_id = absint( $atts['id'] );
    $employee_bio = get_post( $post_id );

    if ( $employee_bio && 'employee_bio' === $employee_bio->post_type ) {
        include plugin_dir_path( __FILE__ ) . 'templates/employee-biography.php';
    }

    return ob_get_clean();
}
add_shortcode( 'employee-biography', 'employee_biography_shortcode' );