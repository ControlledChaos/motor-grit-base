<?php
/**
 * Define the internationalization functionality.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Includes
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Includes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since  1.0.0
 * @access public
 */
class i18n {

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

			// Load the text domain.
			$instance->load_plugin_textdomain();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void Constructor method is empty.
	 */
	private function __construct() {}

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'motor-grit',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function mg_i18n() {

	return i18n::instance();

}

// Run an instance of the class.
mg_i18n();