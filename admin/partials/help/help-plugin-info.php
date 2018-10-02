<?php
/**
 * Content for the plugin More Information help tab.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php echo sprintf(
	'%1s %2s %3s',
	__( 'More information about the', 'motor-grit' ),
	get_bloginfo( 'name' ),
	__( 'plugin', 'motor-grit' )
); ?></h3>
<h4><?php _e( 'The plugin source', 'motor-grit' ); ?></h4>
<p><?php _e( 'Following is the the link to this plugin as it comes out of the box. Change this information to complement your site-specific version.', 'motor-grit' ); ?></p>
<p><a href="https://github.com/ControlledChaos/motor-grit" target="_blank">https://github.com/ControlledChaos/motor-grit</a></p>
<h4><?php _e( 'Ask for development help', 'motor-grit' ); ?></h4>
<?php echo sprintf(
	'<p>%1s <a href="mailto:greg@ccdzine.com">greg@ccdzine.com</a></p>',
	__( 'If you would like help developing this plugin for your project, contact the plugin author, Motor & Grit, at' )
 ); ?>