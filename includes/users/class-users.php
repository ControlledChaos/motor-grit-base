<?php
/**
 * Wordpress user functionality.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Includes\Users
 *
 * @since      1.0.0
 * @author	   Jared Atchison
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Includes\Users;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Wordpress user functionality.
 *
 * @since  1.0.0
 * @access public
 */
class Users {

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

			// Require the class files.
			$instance->dependencies();

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// User avatars.
		require_once MG_PATH . 'includes/users/class-user-avatars.php';

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function mg_users() {

	return Users::instance();

}

// Run an instance of the class.
mg_users();