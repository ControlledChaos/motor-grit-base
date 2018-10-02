<?php
/**
 * Content for the Convert Plugin help tab.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Admin\Partials\Help
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Admin\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Converting the plugin for your website', 'motor-grit' ); ?></h3>
<h4><?php _e( 'Directories and file names', 'motor-grit' ); ?></h4>
<p><?php _e( 'The names for directories and files are descriptive enough to describe what they do yet generic enough that they likely will not need to be changed. However, you may want to remove some files, such as that in which this code is written.', 'motor-grit' ); ?></p>
<h4><?php _e( 'Renaming the code', 'motor-grit' ); ?></h4>
<p><?php _e( 'To rename this plugin to convert it specifically for a single website, first rename this file and rename the plugin folder with the same name as this file. Then use a find &amp; replace function to look for the following...', 'motor-grit' ); ?></p>
<ol>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Text Domain', 'motor-grit' ), esc_html__( 'The text domain should be the same as this file and the plugin folder. Replace "motor-grit".', 'motor-grit' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Classes', 'motor-grit' ), esc_html__( 'Classes are prefixed with the plugin name. Replace "Controlled_Chaos".', 'motor-grit' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Class Variables', 'motor-grit' ), esc_html__( 'Class variables are prefixed with the plugin name. Replace "controlled_chaos".', 'motor-grit' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Functions', 'motor-grit' ), esc_html__( 'There are a few functions prefixed with the plugin name. The above replace of "controlled_chaos" will have given them your new name.', 'motor-grit' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Filters', 'motor-grit' ), esc_html__( 'Filters are prexixed with an abbreviation for the plugin name. Replace "ccp".', 'motor-grit' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Pages', 'motor-grit' ), esc_html__( 'Admin page URLs are prexixed with an abbreviation for the plugin name. The above replace of "ccp" will have given them your new prefix.', 'motor-grit' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Options', 'motor-grit' ), esc_html__( 'Options are prexixed with an abbreviation for the plugin name. The above replace of "ccp" will have given them your new prefix.', 'motor-grit' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Version', 'motor-grit' ), esc_html__( 'The plugin version is all caps and is prexixed with an abbreviation for the plugin name. Replace "CCP".', 'motor-grit' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Author', 'motor-grit' ), esc_html__( 'The author name and email is used in class docblocks. Replace "Motor & Grit" and replace "greg@ccdzine.com".', 'motor-grit' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Plugin Name', 'motor-grit' ), esc_html__( 'The plugin name is used in various places. Replace "Controlled Chaos".', 'motor-grit' ) ); ?>
</ol>