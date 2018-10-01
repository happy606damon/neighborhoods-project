<?php
/**
 * Create the Homepage Top options page
 */
function theme_options_home_page_top() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<script language="JavaScript">

	    jQuery(document).ready(function($){

		    var custom_uploader;

		    $('.upload_image_button').click(function(e) {

		        e.preventDefault();

		        formfield = jQuery(this).next().attr('id');

		        //If the uploader object has already been created, reopen the dialog
		        if (custom_uploader) {
		            custom_uploader.open();
		            return;
		        }

		        //Extend the wp.media object
		        custom_uploader = wp.media.frames.file_frame = wp.media({
		            title: 'Choose Image',
		            button: {
		                text: 'Choose Image'
		            },
		            multiple: true
		        });

		        //When a file is selected, grab the URL and set it as the text field's value
		        custom_uploader.on('select', function() {
		            console.log(custom_uploader.state().get('selection').toJSON());
		            attachment = custom_uploader.state().get('selection').first().toJSON();
		            // $('#upload_image').val(attachment.url);
		            $('#'+formfield).val(attachment.url);
		            $('#preview'+'_'+formfield).attr( "src", attachment.url );
		        });

		        //Open the uploader dialog
		        custom_uploader.open();

		    });
		});

	</script>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' - Homepage Top Options', 'NHCtheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'NHCtheme' ); ?></strong></p></div>
		<?php endif; ?>

	<form method="post" action="options.php">
			<?php settings_fields( 'NHC_homepage_options' ); ?>
			<?php $options = get_option( 'NHC_homepage_options' ); ?>

			<table class="form-table" style="border-bottom: 2px solid black;">
				<?php
				/**
				* Setting the Logo Image
				*/
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Logo image', 'NHCtheme' ); ?></th>
					<td valign="top">
						<p><?php if($options['logo_image'] !="") { ?>
							<img id="preview_logo_image" src="<?php echo $options['logo_image']?>" alt="image"  width=100 /></p><?php } ?>
						<input class="upload_image_button" type="button" value="Upload Image" />
						<input id="logo_image" class="upload_image_button_urltext" type="text" size="" name="NHC_homepage_options[logo_image]" value="<?php esc_attr_e( $options['logo_image'] ); ?>" />						
					</td>
				</tr>
				<?php
				/**
				* Setting the Navigation Button Text
				*/
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Button 1 title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_homepage_options[button1]" class="regular-text" type="text" name="NHC_homepage_options[button1]" value="<?php esc_attr_e( $options['button1'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Button 2 title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_homepage_options[button2]" class="regular-text" type="text" name="NHC_homepage_options[button2]" value="<?php esc_attr_e( $options['button2'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Button 3 title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_homepage_options[button3]" class="regular-text" type="text" name="NHC_homepage_options[button3]" value="<?php esc_attr_e( $options['button3'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Button 4 title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_homepage_options[button4]" class="regular-text" type="text" name="NHC_homepage_options[button4]" value="<?php esc_attr_e( $options['button4'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Button 5 title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_homepage_options[button5]" class="regular-text" type="text" name="NHC_homepage_options[button5]" value="<?php esc_attr_e( $options['button5'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Button 6 title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_homepage_options[button6]" class="regular-text" type="text" name="NHC_homepage_options[button6]" value="<?php esc_attr_e( $options['button6'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Button 7 title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_homepage_options[button7]" class="regular-text" type="text" name="NHC_homepage_options[button7]" value="<?php esc_attr_e( $options['button7'] ); ?>" />
					</td>
				</tr>
			</table>
			<table class="form-table" style="border-bottom: 2px solid black;">
				<?php
				/**
				* Setting Location Section -- Column 1
				*/
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Section 1 Column 1 - Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_homepage_options[s1c1title]" class="regular-text" type="text" name="NHC_homepage_options[s1c1title]" value="<?php esc_attr_e( $options['s1c1title'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Section 1 Column 1 -  Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options['s1c1content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_homepage_options[s1c1content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<?php
				/**
				* Setting Location Section -- Column 2
				*/
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Section 1 Column 2 - Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_homepage_options[s1c2title]" class="regular-text" type="text" name="NHC_homepage_options[s1c2title]" value="<?php esc_attr_e( $options['s1c2title'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Section 1 Column 2 - Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options['s1c2content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_homepage_options[s1c2content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test1';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<?php
				/**
				* Setting Location Section -- Column 3
				*/
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Section 1 Column 3', 'NHCtheme' ); ?></th>
					<td>
						<p>Note:  The 3rd column displays the Facebook feed and cannot be edited unless handled by a developer.</p>
					</td>
				</tr>
			</table>
			<table class="form-table" style="border-bottom: 2px solid black;">
				<?php
				/**
				* Setting Our Story Section
				*/
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Section 2 Image', 'NHCtheme' ); ?></th>
					<td valign="top">
						<p><?php if($options['section2_image'] !="") { ?>
							<img id="preview_section2_image" src="<?php echo $options['section2_image']?>" alt="image"  width=100 /></p><?php } ?>
						<input class="upload_image_button" type="button" value="Upload Image" />
						<input id="section2_image" class="upload_image_button_urltext" type="text" size="" name="NHC_homepage_options[section2_image]" value="<?php esc_attr_e( $options['section2_image'] ); ?>" />						
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Section 2 - Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options['s2content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_homepage_options[s2content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test2';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
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