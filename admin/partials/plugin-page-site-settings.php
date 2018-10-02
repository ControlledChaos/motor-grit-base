<?php
/**
 * About page site settings output.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Website settings', 'motor-grit' ); ?></h3>
<?php echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'The plugin is equipped with', 'motor-grit' ),
	esc_url( admin_url( '?page=' . MG_ADMIN_SLUG . '-settings' ) ),
	__( 'an admin page', 'motor-grit' ),
	__( 'for customizing the user interface of WordPress, as well as other useful features.', 'motor-grit' )
 ); ?>
<h3><?php _e( 'Clean Up the Admin', 'motor-grit' ); ?></h3>
<ul>
	<li><?php _e( 'Remove dashboard widgets: WordPress news, quick press', 'motor-grit' ); ?></li>
	<li><?php _e( 'Make Menus and Widgets top level menu items', 'motor-grit' ); ?></li>
	<li><?php _e( 'Remove select admin menu items', 'motor-grit' ); ?></li>
	<li><?php _e( 'Remove WordPress logo from admin bar', 'motor-grit' ); ?></li>
	<li><?php _e( 'Remove access to theme and plugin editors', 'motor-grit' ); ?></li>
</ul>
<h3><?php _e( 'Enchance the Admin', 'motor-grit' ); ?></h3>
<ul>
	<li><?php _e( 'Add three admin bar menus', 'motor-grit' ); ?></li>
	<li><?php _e( 'Add custom post types to the At a Glance widget', 'motor-grit' ); ?></li>
	<li><?php _e( 'Custom admin footer message', 'motor-grit' ); ?></li>
</ul>