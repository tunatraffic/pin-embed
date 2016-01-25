<?php
/**
 * Created by PhpStorm.
 * User: emmaedgar
 * Date: 1/25/16
 * Time: 10:14 AM
 */

//// add new buttons
//add_filter( 'mce_buttons', 'pe_register_buttons' );
//
//function myplugin_register_buttons( $buttons ) {
//    array_push( $buttons, '|', 'pin-embed' );
//    return $buttons;
//}
//
//// Load the TinyMCE plugin : editor_plugin.js (wp2.5)
//add_filter( 'mce_external_plugins', 'pe_register_tinymce_javascript' );
//
//function pe_register_tinymce_javascript( $plugin_array ) {
//    $plugin_array['[pin-embed'] = plugins_url( '/js/pe-mce.js',__FILE__ );
//    return $plugin_array;
//}

/* Plugin Name: My TinyMCE Buttons */
add_action( 'admin_init', 'my_tinymce_button' );

function my_tinymce_button() {
    if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
        add_filter( 'mce_buttons', 'my_register_tinymce_button' );
        add_filter( 'mce_external_plugins', 'my_add_tinymce_button' );
    }
}

function my_register_tinymce_button( $buttons ) {
    array_push( $buttons, "button_eek" );
    return $buttons;
}

function my_add_tinymce_button( $plugin_array ) {
    $plugin_array['my_button_script'] = plugins_url( '/js/pe-mce.js', __FILE__ ) ;
    return $plugin_array;
}