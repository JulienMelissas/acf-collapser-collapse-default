<?php
/*
Plugin Name: Collapse ACF Repeaters by Default
Description: Meant to be used with <a href="https://wordpress.org/plugins/advanced-custom-field-repeater-collapser/" target="_blank">Advanced Custom Fields Repeater &amp; Flexible Content Fields Collapser</a>, this plugin defaults to collapsing all fields.
Plugin URI:  https://github.com/JulienMelissas/acf-collapser-collapse-default
Author:      Julien Melissas
Author URI:  http://www.julienmelissas.com
Version:     1.0
*/

/* Load the javascript on the ACF admin pages */
add_action( 'acf/input/admin_enqueue_scripts', 'acf_repeater_collapse_default', 12 );
function acf_repeater_collapse_default() {
  wp_enqueue_script(
    'acf_repeater_collapse_default_script',
    esc_url( plugins_url( 'acf_repeater_collapse_default.js', __FILE__ ) ),
    array( 'jquery' )
  );
}