<?php
/**
 * Settings fields for user options.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Admin;

use CC_Plugin\Admin\Partials\Field_Callbacks\Users_Callbacks as Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for user options.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Users {

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
    public function __construct() {

        // Media settings.
        add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Callbacks for the Dashboard tab.
		require MG_PATH . 'admin/partials/field-callbacks/class-users-callbacks.php';

	}

    /**
	 * User settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function settings() {

        // User settings section.
        add_settings_section(
            'mg-site-users',
            __( 'User Settings', 'motor-grit' ),
            [],
            'mg-site-users'
        );

        // Local avatars only (no Gravatars).
		add_settings_field(
			'mg_block_gravatar',
			__( 'Block Gravatars', 'motor-grit' ),
			[ Callbacks::instance(), 'block_gravatar' ],
			'mg-site-users',
			'mg-site-users',
			[ esc_html__( 'Prevent avatar requests from Gravatar.com', 'motor-grit' ) ]
		);

		register_setting(
			'mg-site-users',
			'mg_block_gravatar'
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
function mg_settings_fields_users() {

	return Settings_Fields_Users::instance();

}

// Run an instance of the class.
mg_settings_fields_users();