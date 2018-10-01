<?php
	/*
		Template Name: 1Column
	*/
?>
<?php $rootFolder = get_bloginfo('template_directory'); get_header();?>
	<h1 class="search"><?php the_field('page_title');?></h1>

	<main>
		<div class="wrapper clear blog-main-presets">
			<div id="blog-section">
				<h3><?php the_field('section_header');?></h3>
				<p class="blog-description"><?php the_field('section_blurb');?></p>
				<article class="article1">
					<?php the_field('full_content');?>
				</article>
			</div><!--End of Blog Section-->
			<?php include 'sidebar.php' ?>
		</div><!--End of Wrapper and Clear-->
	</main>
	<?php get_footer(); ?>