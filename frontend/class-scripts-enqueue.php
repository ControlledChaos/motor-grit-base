<?php
/**
 * Enqueue frontend scripts.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Frontend
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Frontend;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The frontend functionality of the plugin.
 *
 * @since  1.0.0
 * @access public
 */
class Enqueue_Frontend_Scripts {

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

		add_action( 'wp_enqueue_scripts', [ $this, 'scripts' ] );

	}

	/**
	 * Enqueue scripts traditionally by default.
	 *
	 * Uses the universal slug partial for admin pages. Set this
     * slug in the core plugin file.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function scripts() {

		// Non-vendor plugin script. Uncomment to use.
		// wp_enqueue_script( MG_ADMIN_SLUG, MG_URL . 'assets/js/frontend.js', [ 'jquery' ], MG_VERSION, true );

		// Fancybox 3.
		if ( get_option( 'mg_enqueue_fancybox_script' ) ) {
			wp_enqueue_script( MG_ADMIN_SLUG . '-fancybox', MG_URL . 'assets/js/jquery.fancybox.min.js', [ 'jquery' ], MG_VERSION, true );
		}

		// Slick.
		if ( get_option( 'mg_enqueue_slick' ) ) {
			wp_enqueue_script( MG_ADMIN_SLUG . '-slick', MG_URL . 'assets/js/slick.min.js', [ 'jquery' ], MG_VERSION, true );
		}

		// Tabslet.
		if ( get_option( 'mg_enqueue_tabslet' ) ) {
			wp_enqueue_script( MG_ADMIN_SLUG . '-tabslet', MG_URL . 'assets/js/jquery.tabslet.min.js', [ 'jquery' ], MG_VERSION, true );
		}

		// Tooltipster.
		if ( get_option( 'mg_enqueue_tooltipster' ) ) {
			wp_enqueue_script( MG_ADMIN_SLUG . '-tooltipster', MG_URL . 'assets/js/tooltipster.bundle.min.js', [ 'jquery' ], MG_VERSION, true );
		}

		// FitVids.
		wp_enqueue_script( MG_ADMIN_SLUG . '-fitvids', MG_URL . 'assets/js/jquery.fitvids.min.js', [ 'jquery' ], MG_VERSION, true );

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function mg_enqueue_frontend_scripts() {

	return Enqueue_Frontend_Scripts::instance();

}

// Run an instance of the class.
mg_enqueue_frontend_scripts();