<?php
/**
 * The core class for registering the generic custom post type.
 *
 * @package Generic_CPT
 * @since   1.0.0
 */

/**
 * Provides attributes and functionality specifically for creating a custom
 * post type to be used for testing other plugins that may relay on custom
 * features.
 *
 * @package Generic_CPT
 * @since   1.0.0
 */
class Generic_Custom_Post_Type {

	/**
	 * Maintains the current version of this plugin. Defined
	 * in the constructor.
	 *
	 * @access private
	 * @var    string
	 */
	private $version;

	/**
	 * Defines values for the class' attributes, namely its version, during
	 * instantiation.
	 */
	public function __construct() {
		$this->version = '1.0.0';
	}

	/**
	 * Provides a function to the `init` hook for registering a custom post type.
	 *
	 * @param array $args The arguments for the custom post type.
	 */
	public function init( $args ) {

		// Define a custom action that will pass the $args to the generic post type.
		add_action(
			'register_generic_post_type',
			array( $this, 'register_post_type' ),
			10,
			1
		);

		// Perform the custom action passing the arguments.
		do_action( 'register_generic_post_type', $args );

	}

	/**
	 * Defines a 'Generic Post' custom post type along with some basic features
	 * that will allow third-party plugins to test their functionality against
	 * a custom post type.
	 *
	 * @param array $args The arguments for the custom post type.
	 */
	public function register_post_type( $args ) {

		register_post_type(
			'generic_post_type',
			$args
		);

	}
}
