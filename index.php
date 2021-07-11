<?php
/**
 * Plugin Name: Editor Add
 * Description: Adds something to editor
 * Version:     1.0
 * Author:      Tammie Lister
 * Author URI:  https://tammielister.com
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

 defined( 'ABSPATH' ) || exit;

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * Passes translations to JavaScript.
 */
function pluginframe_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		// Gutenberg is not active.
		return;
	}

	wp_register_script(
		'pluginframe-script',
		plugins_url( '/build/index.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		filemtime( plugin_dir_path( __FILE__ ) . '/build/index.js' )
	);

	wp_register_style(
		'pluginframe-style',
		plugins_url( '/build/index.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . '/build/index.css' )
	);

	register_block_type( 'pluginframe/test-block', array(
		'editor_style' => 'pluginframe-style',
		'editor_script' => 'pluginframe-script',
	) );

}
add_action( 'init', 'pluginframe_register_block' );