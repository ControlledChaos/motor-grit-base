<?php
/**
 * About page media options output.
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
<h2><?php _e( 'Media and Upload Options', 'motor-grit' ); ?></h2>
<h3><?php _e( 'Image Sizes', 'motor-grit' ); ?></h3>
<ul>
	<li><?php _e( 'Add option to hard crop the medium and/or large image sizes', 'motor-grit' ); ?></li>
	<li><?php _e( 'Add option to allow SVG uploads to the Media Library', 'motor-grit' ); ?></li>
</ul>
<h3><?php _e( 'Fancybox Presentation', 'motor-grit' ); ?></h3>
<h3><?php _e( 'SVG Uploads', 'motor-grit' ); ?></h3>