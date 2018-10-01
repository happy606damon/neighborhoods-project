<?php $rootFolder = get_bloginfo('template_directory');?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Neighborhoods Cafe</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600italic,300italic,300,600,700,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo $rootFolder; ?>/myriad-pro/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $rootFolder; ?>/style.css">
	<?php wp_head(); ?>
</head>
<body id="other">
	<section id="other-header">
		<div class="wrapper clear">
			<div id="logo-blog">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo $rootFolder; ?>/images/neighborhoodslogo.png" alt="neighborhoods-logo" />
				</a>
			</div><!--logo blog-->
			<div id="nav-blog">
				<ul>
					<li><a href="<?php echo admin_url(); ?>">Log in</a></li>
					<li><a href="#"><i class="fa fa-shopping-cart"></i>Cart</a></li>
					<li><a href="<?php echo site_url('/blog/'); ?>"><i class="fa fa-rss" aria-hidden="true"></i>Blog</a></li>
					<li><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header_widget') ) : ?><?php endif; ?></li>
				</ul>
			</div><!--nav blog-->
		</div><!--End of wrapper and clear-->
	</section><!--Other Header-->