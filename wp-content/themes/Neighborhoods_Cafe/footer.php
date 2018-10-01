<?php $rootFolder = get_bloginfo('template_directory'); ?>
<?php $options = get_option( 'NHC_footer_options' ); ?>
<footer>
		<div class="wrapper clear">
			<div id="footer-col1">
				<?php if($options['titletext1'] !="") : ?>
				<h3><?php echo $options['titletext1']; ?></h3>
				<?php echo $options['col1']; ?>
				<?php endif; ?>
			</div><!--End of footer col1-->
			<div id="footer-col2">
				<?php if($options['titletext2'] !="") : ?>
				<h3><?php echo $options['titletext2']; ?></h3>
				<ul class="clear">
					<li><a href="<?php echo $options['facebooklink']; ?>" id="blog-footer-facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="<?php echo $options['twitterlink']; ?>" id="blog-footer-twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="<?php echo $options['yelplink']; ?>" id="blog-footer-yelp"><i class="fa fa-yelp"></i></a></li>
				</ul>
				<?php endif; ?> 
			</div><!--End of footer col2-->
			<div id="footer-col3">
				<?php if($options['titletext3'] !="") : ?>
				<h3><?php echo $options['titletext3']; ?></h3>
				<?php echo $options['col3']; ?>
				<?php endif; ?> 
			</div><!--End of footer col3-->
			<div id="footer-col4">
				<?php if($options['titletext4'] !="") : ?>
				<h3><?php echo $options['titletext4']; ?></h3>
				<h5><?php echo $options['col4']; ?></h5>
				<?php endif; ?> 
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?>
			</div><!--End of footer col4-->
		</div><!--end of wrapper and clear-->
		<div id="copyright-section">
			<div class="wrapper">
				<h3>&copy;&nbsp;Neighborhoods Cafe. All Rights Reserved.</h3>
				<h4>Site Designed by <a href="http://joshuacintolo.com">Josh Cintolo</a></h4>
			</div><!--End of wrapper-->
		</div><!--End of copyright section-->
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="<?php echo $rootFolder; ?>/flexslider/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?php echo $rootFolder; ?>/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="<?php echo $rootFolder; ?>/neighborhoodscafe.js"></script>
	<?php wp_footer(); ?>
</body>
</html>