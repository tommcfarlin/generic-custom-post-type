<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/tommcfarlin/generic-custom-post-type/
 * @since             1.0.0
 * @package           Generic_CPT
 *
 * @wordpress-plugin
 * Plugin Name:       Generic Custom Post Type
 * Plugin URI:        https://github.com/tommcfarlin/generic-custom-post-type/
 * Description:       Creates a generic custom post type to be used for testing other plugins that rely on them.
 * Version:           1.0.0
 * Author:            Tom McFarlin
 * Author URI:        https://tommcfarlin.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	 die;
}

/**
 * Includes the class that provides the functionality for the plugin.
 */
include_once( 'class-generic-custom-post-type.php' );

add_action( 'init', 'tm_load_generic_cpt', 99 );
/**
 * Registers and enqueues the code responsible for automatically expanding the
 * excerpt field in the post editor.
 *
 * Note that the init hook must be used (rather than, say, plugins_loaded)
 * because trying to register a custom post type with a custom activation
 * throws an add_rewrite_tag() error.
 *
 * @since 1.0.0
 */
function tm_load_generic_cpt() {

	/**
	 * Define the arguments for the post type in this array. A full list
	 * of the available arguments can be found here:
	 * https://codex.wordpress.org/Function_Reference/register_post_type
	 */
	$args = array(
		'label'  => 'Generic',
		'labels' => array(
			'name'          => 'Generics',
			'singular_name' => 'Generic',
			'add_new_item'  => 'Add New Generic',
			'edit_item'     => 'Edit Generic',
			'new_item'      => 'New Generic',
			'view_item'     => 'View Generic',
			'search_items'  => 'Search Generic',
			'not_found'     => 'No Generics',
		),
		'description' => 'A generic post type for third-party testing.',
		'public'      => true,
		'show_ui'     => true,
		'supports'    => array(
			'title',
			'editor',
			'excerpt',
		),
	);

	// Instantiate the generic post type and pass the arguments array.
	$plugin = new Generic_Custom_Post_type();
	$plugin->init( $args );

}
