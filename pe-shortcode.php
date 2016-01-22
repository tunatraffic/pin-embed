<?php
/**
 * Created by PhpStorm.
 * User: emmaedgar
 * Date: 1/22/16
 * Time: 1:59 PM
 */


if ( ! shortcode_exists( 'pin-embed' ) ) {

function pe_shortcode_atts( $atts ) {
    $atts = shortcode_atts(
        array(
            'url' => '',
            'size' => '',
            'description' => 'false',
        ), $atts, 'pin_embed' );


    if( $atts['url'] == '' )
        return;

    $html = '<a data-pin-do="embedPin" ';
    if ($atts['size'] == '' || $atts['size'] == 'medium' || $atts['size'] == 'large') $html .= 'data-pin-width="' . $atts['size'] . '" ';
    if($atts['description'] == 'true') $html .= 'data-pin-terse="true" ';
    $html .= 'href="' . $atts['url'] . '"></a>';

    return $html;
}
add_shortcode( 'pin-embed', 'pe_shortcode_atts' );


}