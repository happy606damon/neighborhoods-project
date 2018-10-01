<?php $rootFolder = get_bloginfo('template_directory'); ?>
<html>
<head>
	<title>Neighborhoods Cafe</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600italic,300italic,300,600,700,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo $rootFolder; ?>/myriad-pro/style.css">
	<link rel="stylesheet" href="<?php echo $rootFolder; ?>/flexslider/flexslider.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootFolder; ?>/hover.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootFolder; ?>/fancybox/source/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootFolder; ?>/style.css">
	<?php wp_head(); ?>
</head>
	

	<?php $options = get_option( 'NHC_homepage_options' );?>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<header class="slider" id="top">
		<?php if($options['logo_image'] !="") : ?>
		<div id="logo" style="background-image: url(<?php echo $options['logo_image']; ?>)!important;" class="clear">
		<?php endif; ?>	
		</div>
		<div class="flexslider">
			<ul class="slides">
				<?php if( have_rows('homepageslider') ):
				while ( have_rows('homepageslider') ) : the_row(); ?>
		    <li>
		      <?php $image = get_sub_field('image'); ?> 
		      <img src="<?php echo $image; ?>" />
		    </li>
		    <?php
		    endwhile; endif;?>
		  </ul>
			
		</div>
	</header>
	<!-- Desktop Btns -->
	<ul class="btns clear" id="desk_btn">
		<?php if($options['button1'] !="") : ?>
			<li class="home_btn"><a href="#top"><p class="btn-spacing"><?php echo $options['button1']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button2'] !="") : ?>
			<li class="location_btn"><a href="#location"><p class="btn-spacing"><?php echo $options['button2']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button3'] !="") : ?>
			<li class="story_btn"><a href="#story"><p class="btn-spacing"><?php echo $options['button3']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button4'] !="") : ?>
			<li class="menu_btn"><a href="#menu"><p class="btn-spacing"><?php echo $options['button4']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button5'] !="") : ?>
			<li class="image_btn"><a href="#images"><p class="btn-spacing"><?php echo $options['button5']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button6'] !="") : ?>
			<li class="blog_btn"><a href="#blog"><p class="btn-spacing"><?php echo $options['button6']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button7'] !="") : ?>
			<li class="top_btn"><a href="#top"><p class="btn-spacing"><?php echo $options['button7']; ?></p></a></li>
		<?php endif; ?>
	</ul>
	<!-- Mobile Btns -->
	<ul class="btns-mobile clear" id="mobile_btn">
		<?php if($options['button1'] !="") : ?>
			<li class="home_btn_mobile"><a href="#top"><p class="btn-spacing"><?php echo $options['button1']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button2'] !="") : ?>	
			<li class="location_btn_mobile"><a href="#location"><p class="btn-spacing"><?php echo $options['button2']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button3'] !="") : ?>	
			<li class="story_btn_mobile"><a href="#story"><p class="btn-spacing"><?php echo $options['button3']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button4'] !="") : ?>	
			<li class="menu_btn_mobile"><a href="#menu"><p class="btn-spacing"><?php echo $options['button4']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button5'] !="") : ?>	
			<li class="image_btn_mobile"><a href="#images"><p class="btn-spacing"><?php echo $options['button5']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button6'] !="") : ?>
			<li class="blog_btn_mobile"><a href="#blog"><p class="btn-spacing"><?php echo $options['button6']; ?></p></a></li>
		<?php endif; ?>
		<?php if($options['button7'] !="") : ?>
			<li class="top_btn_mobile"><a href="#top"><p class="btn-spacing"><?php echo $options['button7']; ?></p></a></li>
		<?php endif; ?>
	</ul>