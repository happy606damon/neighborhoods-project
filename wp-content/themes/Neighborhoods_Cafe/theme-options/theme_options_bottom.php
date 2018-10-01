<?php
/**
 * Create the Homepage Bottom options page
 */
function theme_options_bottom() {
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
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' - Homepage Bottom Options', 'NHCtheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'NHCtheme' ); ?></strong></p></div>
		<?php endif; ?>

	<form method="post" action="options.php">
			<?php settings_fields( 'NHC_bottom_options' ); ?>
			<?php $options3 = get_option( 'NHC_bottom_options' ); ?>

			<table class="form-table" style="border-bottom: 2px solid black;">
				<?php
				/**
				* Setting Gallery Section
				*/
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Gallery Hero Image', 'NHCtheme' ); ?></th>
					<td valign="top">
						<p><?php if($options3['gallery_hero_image'] !="") { ?>
							<img id="preview_gallery_hero_image" src="<?php echo $options3['gallery_hero_image']?>" alt="image"  width=100 /></p><?php } ?>
						<input class="upload_image_button" type="button" value="Upload Image" />
						<input id="gallery_hero_image" class="upload_image_button_urltext" type="text" size="" name="NHC_bottom_options[gallery_hero_image]" value="<?php esc_attr_e( $options3['gallery_hero_image'] ); ?>" />						
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Gallery Text', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options3['gallerytext'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_bottom_options[gallerytext]',//name you want for the textarea
							'textarea_rows'=>5,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
			</table>
			<table class="form-table" style="border-bottom: 2px solid black;">
				<?php
				/**
				* Setting Blog Section
				*/
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Blog Text', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options3['blogtext'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_bottom_options[blogtext]',//name you want for the textarea
							'textarea_rows'=>5,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test2';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Newsletter Text', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options3['newslettertext'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_bottom_options[newslettertext]',//name you want for the textarea
							'textarea_rows'=>5,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test3';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Newsletter Sub Text', 'NHCtheme' ); ?></th>
					<td>
						<?php 
							$initial_data=$options3['newslettersubtext'];
							$settings = array(
							'quicktags' => array('buttons' => 'em,strong,link',),
							'textarea_name'=>'NHC_bottom_options[newslettersubtext]',//name you want for the textarea
							'textarea_rows'=>5,
							'quicktags' => true,
							'tinymce' => true
							);
							$id = 'editor-test4';//has to be lower case
							wp_editor($initial_data,$id,$settings); ?>
					</td>
				</tr>
			</table>
			<table class="form-table" style="border-bottom: 2px solid black;">
				<?php
				/**
				* Setting Footer Links
				*/
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Facebook Link', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_bottom_options[facebooklink]" class="regular-text" type="text" name="NHC_bottom_options[facebooklink]" value="<?php esc_attr_e( $options3['facebooklink'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Twitter Link', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_bottom_options[twitterlink]" class="regular-text" type="text" name="NHC_bottom_options[twitterlink]" value="<?php esc_attr_e( $options3['twitterlink'] ); ?>" />
					</td>
				</tr>
				<tr valign="top"><th scope="row"><?php _e( 'Yelp Link', 'NHCtheme' ); ?></th>
					<td>
						<input id="NHC_bottom_options[yelplink]" class="regular-text" type="text" name="NHC_bottom_options[yelplink]" value="<?php esc_attr_e( $options3['yelplink'] ); ?>" />
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