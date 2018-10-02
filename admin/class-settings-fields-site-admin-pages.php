<?php
/**
 * Settings for the Admin Pages tab on the Site Settings page.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings for the Admin Pages tab.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Site_Admin_Pages {

	/**
	 * Holds the values to be used in the fields callbacks.
	 *
	 * @var array
	 */
	private $options;

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

		// Register settings sections and fields.
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

		// Callbacks for the Admin Pages tab.
		require MG_PATH . 'admin/partials/field-callbacks/class-admin-pages-callbacks.php';

	}

	/**
	 * Plugin site settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 *
	 * @link  https://codex.wordpress.org/Settings_API
	 */
	public function settings() {

		// Admin pages settings section.
		add_settings_section(
			'mg-site-admin-pages',
			__( 'Admin Pages Settings', 'motor-grit' ),
			[],
			'mg-site-admin-pages'
		);

		// Use custom sort order.
		add_settings_field(
			'mg_use_custom_sort_order',
			__( 'Drag & Drop Sort Order', 'motor-grit' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'custom_sort_order' ],
			'mg-site-admin-pages',
			'mg-site-admin-pages',
			[ esc_html__( 'Add drag & drop sort order functionality to post types and taxonomies.', 'motor-grit' ) ]
		);

		register_setting(
			'mg-site-admin-pages',
			'mg_use_custom_sort_order'
		);

		// Admin footer credit.
		add_settings_field(
			'mg_footer_credit',
			__( 'Admin Footer Credit', 'motor-grit' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'footer_credit' ],
			'mg-site-admin-pages',
			'mg-site-admin-pages',
			[ esc_html__( 'The "developed by" credit.', 'motor-grit' ) ]
		);

		register_setting(
			'mg-site-admin-pages',
			'mg_footer_credit'
		);

		// Admin footer link.
		add_settings_field(
			'mg_footer_link',
			__( 'Admin Footer Link', 'motor-grit' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'footer_link' ],
			'mg-site-admin-pages',
			'mg-site-admin-pages',
			[ esc_html__( 'Link to the website devoloper.', 'motor-grit' ) ]
		);

		register_setting(
			'mg-site-admin-pages',
			'mg_footer_link'
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
function mg_settings_fields_site_admin_pages() {

	return Settings_Fields_Site_Admin_Pages::instance();

}

// Run an instance of the class.
mg_settings_fields_site_admin_pages();