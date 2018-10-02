<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/**
 * Uninstall avatars.
 *
 * During uninstallation, remove the custom field from the users
 * and delete the local avatars.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function mg_user_avatars_uninstall() {

	$mg_user_avatars = new mg_user_avatars;
	$users            = get_users_of_blog();

	foreach ( $users as $user ) {
		$mg_user_avatars->avatar_delete( $user->user_id );
	}

	delete_option( 'mg_user_avatars_caps' );

}
register_uninstall_hook( __FILE__, 'mg_user_avatars_uninstall' );