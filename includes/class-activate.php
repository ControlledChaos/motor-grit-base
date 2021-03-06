<?php
/**
 * Plugin activation class.
 *
 * This file must not be namespaced.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Includes
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Plugin activation class.
 *
 * @since  1.0.0
 * @access public
 */
class Controlled_Chaos_Activate {

	/**
	 * Get an instance of the class.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

			// Activation function
			$instance->activate();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void Constructor method is empty.
	 */
	public function __construct() {}

	/**
	 * Fired during plugin activation.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function activate() {}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function mg_activate() {

	return Controlled_Chaos_Activate::instance();

}