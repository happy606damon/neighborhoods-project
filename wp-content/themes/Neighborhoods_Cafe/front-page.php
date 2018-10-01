<?php $rootFolder = get_bloginfo('template_directory'); get_header(2); ?>
<!DOCTYPE HTML>
	<?php $options = get_option( 'NHC_homepage_options' );?>
	<?php $options2 = get_option( 'NHC_offerings_options' );?>
	<?php $options3 = get_option( 'NHC_bottom_options' );?>
	<!-- Main Content -->
	<main>
		<div id="location">
		<div class="wrapper clear">
			<div id="location-left">
					<?php if($options['s1c1title'] !="") : ?>
					<h5><?php echo $options['s1c1title']; ?><i class="fa fa-location-arrow"></i></h5>
					<?php echo $options['s1c1content']; ?>
					<?php endif; ?>
			</div><!--Location Left-->
			<div id="location-middle">
					<?php if($options['s1c2title'] !="") : ?>
					<h5><?php echo $options['s1c2title']; ?><i class="fa fa-clock-o"></i></h5>
					<?php echo $options['s1c2content']; ?>
					<?php endif; ?>
			</div><!--Location Middle-->
			<div id="location-right">
				<div id="fb-full">
					<div class="fb-page" data-href="https://www.facebook.com/NeighborhoodsCafe" data-tabs="timeline" data-width="500px" data-height="200px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NeighborhoodsCafe"><a href="https://www.facebook.com/NeighborhoodsCafe">Neighborhoods Cafe</a></blockquote></div></div>
				</div><!--FB Full-->
				<div id="ipad">
					<div class="fb-page" data-href="https://www.facebook.com/NeighborhoodsCafe" data-tabs="timeline" data-width="300px" data-height="200px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NeighborhoodsCafe"><a href="https://www.facebook.com/NeighborhoodsCafe">Neighborhoods Cafe</a></blockquote></div></div>
				</div><!--FB iPad-->
				<div id="mobile">
					<div class="fb-page" data-href="https://www.facebook.com/NeighborhoodsCafe" data-tabs="timeline" data-width="150px" data-height="200px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NeighborhoodsCafe"><a href="https://www.facebook.com/NeighborhoodsCafe">Neighborhoods Cafe</a></blockquote></div></div>
				</div><!--FB mobile-->				
			</div><!--End of Location Right-->
		</div><!--End of wrapper & clear-->
		</div><!--End of Location-->
		<section id="story">
			<div class="grid">
				<figure class="effect-ruby">
						<?php if($options['section2_image'] !="") : ?>
						<img src="<?php echo $options['section2_image']; ?>" alt="crepes-white"/>
						<?php endif; ?>
						<figcaption>
							<?php if($options['button3'] !="") : ?>
							<h2><?php echo $options['button3']; ?></h2>
							<p><?php echo $options['s2content']; ?></p>
							<?php endif; ?>
						</figcaption>
				</figure>
			</div><!-- End of Grid -->
			<div class="story-mobile" style="background-image: url(<?php echo $options['section2_image']; ?>)!important;">
				<div class="transbox">
					<?php if($options['s2content'] !="") : ?>
					<p><?php echo $options['s2content']; ?></p>
					<?php endif; ?>
				</div><!--End of Transbox -->
			</div><!--Story Mobile-->	
		</section>
		<section id="menu">
			<div class="wrapper clear">
				<?php if($options['button4'] !="") : ?>
				<h2><?php echo $options['button4']; ?></h2>
				<?php endif; ?>
				<div id="coffee">
					<!-- setting coffee section title and image -->
					<?php if($options2['coffeetitle'] !="") : ?>
						<h3><?php echo $options2['coffeetitle']; ?><img src="<?php echo $options2['coffee_image'] ?>" alt="coffee-icon" /></h3>
					<?php endif; ?>
					<!-- setting coffee section row 1 -->
					<?php if($options2['coffeer1title'] !="") : ?>
					<h6 class="coffee"><?php echo $options2['coffeer1title'];?></h6>
					<?php echo $options2['cr1content'];?>
					<?php endif; ?>
					<!-- setting coffee section row 2 -->
					<?php if($options2['coffeer2title'] !="") : ?>
					<h6 class="tea"><?php echo $options2['coffeer2title'];?></h6>
					<?php echo $options2['cr2content'];?>
					<?php endif; ?>
					<!-- setting coffee section row 3 -->
					<?php if($options2['coffeer3title'] !="") : ?>
					<h6 class="other"><?php echo $options2['coffeer3title'];?></h6>
					<?php echo $options2['cr3content'];?>
					<?php endif; ?>
				</div><!--End of Coffee-->


				<div id="crepes">
					<!-- setting crepe section title and image -->
					<?php if($options2['crepestitle'] !="") : ?>
					<h3><?php echo $options2['crepestitle']; ?> <img src="<?php echo $options2['crepes_image'] ?>" alt="crepes-icon" /></h3>
					<?php endif; ?>
					<!-- setting crepes section row 1 -->
					<?php if($options2['crepesr1title'] !="") : ?>
					<h6 class="breakfast"><?php echo $options2['crepesr1title']; ?></h6>
					<?php echo $options2['crepesr1content'];?>
					<?php endif; ?>
					<!-- setting crepes section row 2 -->
					<?php if($options2['crepesr2title'] !="") : ?>
					<h6 class="savory"><?php echo $options2['crepesr2title']; ?></h6>
					<?php echo $options2['crepesr2content'];?>
					<?php endif; ?>
					<!-- setting crepes section row 2 -->
					<?php if($options2['crepesr3title'] !="") : ?>
					<h6 class="sweet"><?php echo $options2['crepesr2title']; ?></h6>
					<?php echo $options2['crepesr3content'];?>
					<?php endif; ?>
				</div><!--End of Crepes-->


				<div id="treats">
					<!-- setting treats section title and image -->
					<?php if($options2['treatstitle'] !="") : ?>
					<h3><?php echo $options2['treatstitle']; ?><img src="<?php echo $options2['treats_image']; ?>" alt="muffin-icon" /></h3>
					<?php endif; ?>
					<!-- setting treats section row 1 -->
					<?php if($options2['treatsr1title'] !="") : ?>
					<h6 class="baked-treats"><?php echo $options2['treatsr1title']; ?></h6>
					<?php echo $options2['treatsr1content'];?>
					<?php endif; ?>
					<!-- setting treats section row 2 -->
					<?php if($options2['treatsr2title'] !="") : ?>
					<h6 class="other-treats"><?php echo $options2['treatsr2title']; ?></h6>
					<?php echo $options2['treatsr2content'];?>
					<?php endif; ?>
					
				</div><!--End of Treats-->
			</div><!--End of wrapper and clear-->
		</section>

		<?php if($options3['gallery_hero_image'] !="") : ?>
		<section id="images" style="background-image: url(<?php echo $options3['gallery_hero_image']; ?>)!important;">
		<?php endif; ?>	
			<div class="wrapper clear">
				<?php if($options['button5'] !="") : ?>
				<h2><?php echo $options['button5']; ?></h2>
				<?php endif; ?>
				<?php if($options3['gallerytext'] !="") : ?>
				<p><?php echo $options3['gallerytext']; ?></p>
				<?php endif; ?>
				<ul>
					<?php if( have_rows('gallery') ):
						while ( have_rows('gallery') ) : the_row(); ?>
					<li>
						<?php $gallery_image = get_sub_field('gallery_image'); ?> 
						<a class="fancybox" rel="neighborhoods" href="<?php echo $gallery_image; ?>">
							<img src="<?php echo $gallery_image; ?>" />
						</a>
					</li>
						<?php endwhile; endif;?>
				</ul>
			</div>
		</section>
		<section id="blog">
			<div class="wrapper clear">
				<!--Setting blog title and sub heading-->
				<?php if($options['button6'] !="") : ?>
				<h2><?php echo $options['button6']; ?></h2>
				<?php endif; ?>
				<?php if($options3['blogtext'] !="") : ?>
				<?php echo $options3['blogtext'];?>
				<?php endif; ?>
				<!--Blog Loop-->
				<?php include 'featuredPost.php'; ?>
				<?php if($options3['newslettertext'] !="") : ?>
				<?php echo $options3['newslettertext'];?>
				<?php echo $options3['newslettersubtext']; ?></h5>
				<?php endif; ?>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 7 ); } ?>
			</div><!--End of wrapper and clear-->
		</section>
	</main>
	<?php get_footer(2); ?>