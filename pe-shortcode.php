<?php

function pe_shortcode_atts( $atts ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'size' => 'small',
            'description' => 'true',
        ), $atts, 'pin-embed' );


    if ( $atts['url'] == '' ) {
        return;
    }

    wp_enqueue_script( 'pin-embed-js' );

    $html = '<a data-pin-do="embedPin" ';
    
    if ( $atts['size'] == 'medium' || $atts['size'] == 'large' ) {
        $html .= 'data-pin-width="' . $atts['size'] . '" ';
    } 
    
    if ( $atts['description'] == 'false' ) {
        $html .= 'data-pin-terse="true" ';
    }

    $html .= 'href="' . $atts['url'] . '"></a>';

    return $html;
}

/**
 * Register shortcode only if it does not already exist
 */
function pe_register_pin_embed_shortcode() {
    if ( ! shortcode_exists( 'pin-embed' ) ) {
        add_shortcode( 'pin-embed', 'pe_shortcode_atts' );
    }       
}
add_action( 'init', 'pe_register_pin_embed_shortcode' );
