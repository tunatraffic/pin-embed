<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Pin_Embed
 *
 * @wordpress-plugin
 * Plugin Name:       Pin Embed
 * Plugin URI:        http://example.com/pin-embed-uri/
 * Description:       Embed pins on your site with a shortcode
 * Version:           1.0.0
 * Author:            Tuna Traffic
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pin-embed
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


define( 'PINEMBED__PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PINEMBED__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


require_once( PINEMBED__PLUGIN_DIR . 'pe-shortcode.php' );

//include_once plugin_dir_url(__FILE__) . 'pe-shortcode.php';