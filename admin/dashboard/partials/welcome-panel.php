<?php
/**
 * Custom welcome panel output.
 *
 * Provided are several widget areas and hooks for adding content.
 * The `do_action` hooks are named and placed to be similar to the
 * before and after pseudoelements in CSS.
 *
 * @package    Controlled_Chaos_Plugin
 * @subpackage Admin\Dashboard
 *
 * @since      1.0.0
 * @author     Motor & Grit <dev@motorandgrit.com>
 */

namespace CC_Plugin\Admin\Dashboard;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get the current user name for the greeting.
$current_user = wp_get_current_user();
$user_name    = $current_user->display_name;

// Add a filterable subheading.
$subheading = sprintf(
	'<h3>%1s %2s %3s.</h3>',
	esc_html__( 'This is your custom', 'motor-grit' ),
	get_bloginfo( 'name' ),
	esc_html__( 'welcome panel', 'motor-grit' )
);
$subheading = apply_filters( 'mg_welcome_subheading', $subheading );

// Add a filterable description.
$about_desc = apply_filters( 'mg_welcome_about', __( 'Put your welcome message here.', 'motor-grit' ) );

?>
<?php do_action( 'mg_before_welcome_panel_content' ); ?>
<div class="welcome-panel-content custom">
	<?php do_action( 'mg_welcome_panel_content_before' ); ?>

	<?php echo sprintf(
		'<h2>%1s %2s.</h2>',
		esc_html__( 'Welcome,', 'motor-grit' ),
		$user_name
	); ?>
	<p class="about-description"><?php echo $about_desc; ?></p>
	<?php echo $subheading; ?>
	<p><?php _e( 'Use this to provide handy links to manage content, informational widgets, or maybe an instructional video.' ); ?></p>
	<p><?php _e( 'No CSS has been applied to this welcome panel. Add styles as necessary for your project.' ); ?></p>

	<div class="welcome-panel-column-container">
		<?php do_action( 'mg_welcome_panel_column_container_before' ); ?>

		<div class="welcome-panel-column">
			<?php do_action( 'mg_welcome_panel_column_first_before' ); ?>

				<?php if ( is_active_sidebar( 'mg_welcome_widget_first' ) ) {

					dynamic_sidebar( 'mg_welcome_widget_first' );

				} else {

					$placeholder = sprintf(
						'<h3>%1s</h3>',
						esc_html( 'Column One', 'motor-grit' )
					);
					$placeholder .= sprintf(
						'<p><a href="%1s">%2s</a> %3s.</p>',
						admin_url( 'widgets.php' ),
						__( 'Add a widget', 'motor-grit' ),
						__( 'to this area', 'motor-grit' )
					);

					echo $placeholder;

				} ?>

			<?php do_action( 'mg_welcome_panel_column_first_after' ); ?>
		</div>
		<div class="welcome-panel-column">
			<?php do_action( 'mg_welcome_panel_column_second_before' ); ?>

			<?php if ( is_active_sidebar( 'mg_welcome_widget_second' ) ) {

					dynamic_sidebar( 'mg_welcome_widget_second' );

				} else {

					$placeholder = sprintf(
						'<h3>%1s</h3>',
						esc_html( 'Column Two', 'motor-grit' )
					);
					$placeholder .= sprintf(
						'<p><a href="%1s">%2s</a> %3s.</p>',
						admin_url( 'widgets.php' ),
						__( 'Add a widget', 'motor-grit' ),
						__( 'to this area', 'motor-grit' )
					);

					echo $placeholder;

				} ?>

			<?php do_action( 'mg_welcome_panel_column_second_after' ); ?>
		</div>
		<div class="welcome-panel-column welcome-panel-last">
			<?php do_action( 'mg_welcome_panel_column_last_before' ); ?>

			<?php if ( is_active_sidebar( 'mg_welcome_widget_last' ) ) {

					dynamic_sidebar( 'mg_welcome_widget_last' );

				} else {

					$placeholder = sprintf(
						'<h3>%1s</h3>',
						esc_html( 'Column Three', 'motor-grit' )
					);
					$placeholder .= sprintf(
						'<p><a href="%1s">%2s</a> %3s.</p>',
						admin_url( 'widgets.php' ),
						__( 'Add a widget', 'motor-grit' ),
						__( 'to this area', 'motor-grit' )
					);

					echo $placeholder;

				} ?>

			<?php do_action( 'mg_welcome_panel_column_last_after' ); ?>
		</div>

		<?php do_action( 'mg_welcome_panel_column_container_after' ); ?>
	</div>

	<?php do_action( 'mg_welcome_panel_content_after' ); ?>
</div>
<?php do_action( 'mg_after_welcome_panel_content' ); ?>