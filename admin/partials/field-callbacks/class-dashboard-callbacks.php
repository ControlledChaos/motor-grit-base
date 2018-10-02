<?php
/**
 * Callbacks for the Dashboard tab on the Site Settings page.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Callbacks for the Dashboard tab.
 *
 * @since  1.0.0
 * @access public
 */
class Dashboard_Callbacks {

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
	public function __construct() {}

	/**
	 * Hide try Gutenberg panel.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_try_gutenberg( $args ) {

		$option = get_option( 'mg_hide_try_gutenberg' );

		$html = '<p><input type="checkbox" id="mg_hide_try_gutenberg" name="mg_hide_try_gutenberg" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mg_hide_try_gutenberg"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Use custom welcome panel.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function custom_welcome( $args ) {

		$option = get_option( 'mg_custom_welcome' );

		$html = '<p><input type="checkbox" id="mg_custom_welcome" name="mg_custom_welcome" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mg_custom_welcome"> ' . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Hide welcome panel.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_welcome( $args ) {

		$option = get_option( 'mg_hide_welcome' );

		$html = '<p><input type="checkbox" id="mg_hide_welcome" name="mg_hide_welcome" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mg_hide_welcome"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Remove welcome dismiss.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function remove_welcome_dismiss( $args ) {

		$option = get_option( 'mg_remove_welcome_dismiss' );

		$html = '<p><input type="checkbox" id="mg_remove_welcome_dismiss" name="mg_remove_welcome_dismiss" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mg_remove_welcome_dismiss"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Hide WordPress News widget.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_wp_news( $args ) {

		$option = get_option( 'mg_hide_wp_news' );

		$html = '<p><input type="checkbox" id="mg_hide_wp_news" name="mg_hide_wp_news" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mg_hide_wp_news"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Hide Quick Draft (QuickPress) widget.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_quickpress( $args ) {

		$option = get_option( 'mg_hide_quickpress' );

		$html = '<p><input type="checkbox" id="mg_hide_quickpress" name="mg_hide_quickpress" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mg_hide_quickpress"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Hide At a Glance widget.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_at_glance( $args ) {

		$option = get_option( 'mg_hide_at_glance' );

		$html = '<p><input type="checkbox" id="mg_hide_at_glance" name="mg_hide_at_glance" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mg_hide_at_glance"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Hide Activity widget.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Extra arguments passed into the callback function.
	 * @return string
	 */
	public function hide_activity( $args ) {

		$option = get_option( 'mg_hide_activity' );

		$html = '<p><input type="checkbox" id="mg_hide_activity" name="mg_hide_activity" value="1" ' . checked( 1, $option, false ) . '/>';

		$html .= '<label for="mg_hide_activity"> '  . $args[0] . '</label></p>';

		echo $html;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function mg_dashboard_callbacks() {

	return Dashboard_Callbacks::instance();

}

// Run an instance of the class.
mg_dashboard_callbacks();