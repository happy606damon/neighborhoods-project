<?php
/**
 * Create the FOOTER options page
 */
function theme_options_footer_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' - Footer Options', 'NHCtheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'NHCtheme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'NHC_footer_options' ); ?>
			<?php $options = get_option( 'NHC_footer_options' ); ?>

			<table class="form-table">

				<tr valign="top"><th scope="row"><?php _e( '1st Column Title Text', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_footer_options[titletext1]" class="regular-text" type="text" name="NHC_footer_options[titletext1]" value="<?php esc_attr_e( $options['titletext1'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Footer - 1st Column Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options['col1'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_footer_options[col1]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( '2nd Column Title Text', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_footer_options[titletext2]" class="regular-text" type="text" name="NHC_footer_options[titletext2]" value="<?php esc_attr_e( $options['titletext2'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Footer - 2nd Column Facebook Link', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_footer_options[facebooklink]" class="regular-text" type="text" name="NHC_footer_options[facebooklink]" value="<?php esc_attr_e( $options['facebooklink'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Footer - 2nd Column Twitter Link', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_footer_options[twitterlink]" class="regular-text" type="text" name="NHC_footer_options[twitterlink]" value="<?php esc_attr_e( $options['twitterlink'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Footer - 2nd Column Yelp Link', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_footer_options[yelplink]" class="regular-text" type="text" name="NHC_footer_options[yelplink]" value="<?php esc_attr_e( $options['yelplink'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( '3rd Column Title Text', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_footer_options[titletext3]" class="regular-text" type="text" name="NHC_footer_options[titletext3]" value="<?php esc_attr_e( $options['titletext3'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Footer - 3rd Column Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options['col3'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_footer_options[col3]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test2';//has to be lower case - and has to be unique for each text area that displays
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( '4th Column Title Text', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_footer_options[titletext4]" class="regular-text" type="text" name="NHC_footer_options[titletext4]" value="<?php esc_attr_e( $options['titletext4'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Footer - 4th Column Blurb', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options['col4'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_footer_options[col4]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test3';//has to be lower case - and has to be unique for each text area that displays
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Footer - Last Column Content', 'NHCtheme' ); ?></th>
					<td>
						<p>Note:  The last column of the footer will be a Ninja form.</p>
					</td>
				</tr>
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'NHCtheme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}
?>