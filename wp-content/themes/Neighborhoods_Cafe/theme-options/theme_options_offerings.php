<?php
/**
 * Create the Offerings Options page
 */
function theme_options_offerings() {
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
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' - Offerings Options', 'NHCtheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'NHCtheme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'NHC_offerings_options' ); ?>
			<?php $options2 = get_option( 'NHC_offerings_options' ); ?>

			<table class="form-table" style="border-bottom: 1px solid black;">
				<?php
				/**
				 * Coffee & Tea Section
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Coffee Section Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[coffeetitle]" class="regular-text" type="text" name="NHC_offerings_options[coffeetitle]" value="<?php esc_attr_e( $options2['coffeetitle'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Coffee Section Image', 'NHCtheme' ); ?></th>
					<td valign="top">
						<p><?php if($options2['coffee_image'] !="") { ?>
							<img id="preview_coffee_image" src="<?php echo $options2['coffee_image']?>" alt="coffee-image"  width=100 /></p><?php } ?>
						<input class="upload_image_button" type="button" value="Upload Image" />
						<input id="coffee_image" class="upload_image_button_urltext" type="text" size="" name="NHC_offerings_options[coffee_image]" value="<?php esc_attr_e( $options2['coffee_image'] ); ?>" />						
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Coffee Section Row 1 Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[coffeerr1title]" class="regular-text" type="text" name="NHC_offerings_options[coffeer1title]" value="<?php esc_attr_e( $options2['coffeer1title'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Coffee Section Row 1 -  Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options2['cr1content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_offerings_options[cr1content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Coffee Section Row 2 Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[coffeerr2title]" class="regular-text" type="text" name="NHC_offerings_options[coffeer2title]" value="<?php esc_attr_e( $options2['coffeer2title'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Coffee Section Row 2 -  Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options2['cr2content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_offerings_options[cr2content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test2';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Coffee Section Row 3 Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[coffeerr3title]" class="regular-text" type="text" name="NHC_offerings_options[coffeer3title]" value="<?php esc_attr_e( $options2['coffeer3title'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Coffee Section Row 3 -  Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options2['cr3content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_offerings_options[cr3content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test3';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
			</table>
			<table class="form-table" style="border-bottom: 1px solid black;">
				<?php
				/**
				 * Crepes Section
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Crepes Section Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[crepestitle]" class="regular-text" type="text" name="NHC_offerings_options[crepestitle]" value="<?php esc_attr_e( $options2['crepestitle'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Crepes Section Image', 'NHCtheme' ); ?></th>
					<td valign="top">
						<p><?php if($options2['crepes_image'] !="") { ?>
							<img id="preview_crepes_image" src="<?php echo $options2['crepes_image']?>" alt="crepes-image"  width=100 /></p><?php } ?>
						<input class="upload_image_button" type="button" value="Upload Image" />
						<input id="crepes_image" class="upload_image_button_urltext" type="text" size="" name="NHC_offerings_options[crepes_image]" value="<?php esc_attr_e( $options2['crepes_image'] ); ?>" />						
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Crepes Section Row 1 Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[crepesr1title]" class="regular-text" type="text" name="NHC_offerings_options[crepesr1title]" value="<?php esc_attr_e( $options2['crepesr1title'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Crepes Section Row 1 -  Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options2['crepesr1content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_offerings_options[crepesr1content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test4';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Crepes Section Row 2 Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[crepesr2title]" class="regular-text" type="text" name="NHC_offerings_options[crepesr2title]" value="<?php esc_attr_e( $options2['crepesr2title'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Crepes Section Row 2 -  Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options2['crepesr2content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_offerings_options[crepesr2content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test5';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Crepes Section Row 3 Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[crepesr3title]" class="regular-text" type="text" name="NHC_offerings_options[crepesr3title]" value="<?php esc_attr_e( $options2['crepesr3title'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Crepes Section Row 3 -  Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options2['crepesr3content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_offerings_options[crepesr3content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test6';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
			</table>
			<table class="form-table" style="border-bottom: 1px solid black;">
				<?php
				/**
				 * Other Treats Section
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Treats Section Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[treatstitle]" class="regular-text" type="text" name="NHC_offerings_options[treatstitle]" value="<?php esc_attr_e( $options2['treatstitle'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Treats Section Image', 'NHCtheme' ); ?></th>
					<td valign="top">
						<p><?php if($options2['treats_image'] !="") { ?>
							<img id="preview_treats_image" src="<?php echo $options2['treats_image']?>" alt="treats-image"  width=100 /></p><?php } ?>
						<input class="upload_image_button" type="button" value="Upload Image" />
						<input id="treats_image" class="upload_image_button_urltext" type="text" size="" name="NHC_offerings_options[treats_image]" value="<?php esc_attr_e( $options2['treats_image'] ); ?>" />						
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Treats Section Row 1 Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[treatsr1title]" class="regular-text" type="text" name="NHC_offerings_options[treatsr1title]" value="<?php esc_attr_e( $options2['treatsr1title'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Treats Section Row 1 -  Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options2['treatsr1content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_offerings_options[treatsr1content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test7';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Treats Section Row 2 Title', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_offerings_options[treatsr2title]" class="regular-text" type="text" name="NHC_offerings_options[treatsr2title]" value="<?php esc_attr_e( $options2['treatsr2title'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Treats Section Row 2 -  Content', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options2['treatsr2content'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_offerings_options[treatsr2content]',//name you want for the textarea
							'textarea_rows'=>10,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test8';//has to be lower case
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