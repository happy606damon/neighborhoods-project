<?php
/**
 * Create the home options page
 */
function theme_options_general() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' - General Options', 'NHCtheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'NHCtheme' ); ?></strong></p></div>
		<?php endif; ?>

		<p>need to decide what will go here</p>
	</div>
	<?php
}
?>