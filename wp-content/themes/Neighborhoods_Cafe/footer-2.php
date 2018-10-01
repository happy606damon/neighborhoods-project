<?php $rootFolder = get_bloginfo('template_directory'); ?>
<?php $options3 = get_option( 'NHC_bottom_options' );?>
<footer>
		<div class="wrapper clear">
			<ul class="clear">
				<?php if($options3['facebooklink'] !="") : ?>
				<li id="facebook"><a href="<?php echo $options3['facebooklink'];?>"><i class="fa fa-facebook"></i></a></li>
				<li id="twitter"><a href="<?php echo $options3['twitterlink'];?>"><i class="fa fa-twitter"></i></a></li>
				<li id="yelp"><a href="<?php echo $options3['yelplink'];?>"><i class="fa fa-yelp"></i></a></li>
				<?php endif; ?>
			</ul>
			<h3>&copy;&nbsp;Neighborhoods Cafe. All Rights Reserved.</h3>
			<h4>Site Designed by <a href="http://joshuacintolo.com">Josh Cintolo</a></h4>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="<?php echo $rootFolder; ?>/flexslider/jquery.flexslider.js"></script>
	<script type="text/javascript" src="<?php echo $rootFolder; ?>/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="<?php echo $rootFolder; ?>/neighborhoodscafe.js"></script>
	<?php wp_footer(); ?>
</body>
</html>