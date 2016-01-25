<?php
/**
 * Created by PhpStorm.
 * User: emmaedgar
 * Date: 1/25/16
 * Time: 10:14 AM
 */


add_action( 'admin_init', 'pe_tinymce_button' );

function pe_tinymce_button() {
    if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
        add_filter( 'mce_buttons', 'pe_register_tinymce_button' );
        add_filter( 'mce_external_plugins', 'pe_add_tinymce_button' );
    }
}

function pe_register_tinymce_button( $buttons ) {
    array_push( $buttons, "button_pin_embed" );
    return $buttons;
}

function pe_add_tinymce_button( $plugin_array ) {
    $plugin_array['pe_button_script'] = plugins_url( '/js/pe-mce.js', __FILE__ ) ;
    return $plugin_array;
}