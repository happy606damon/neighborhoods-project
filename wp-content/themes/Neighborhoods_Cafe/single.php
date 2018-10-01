<?php $rootFolder = get_bloginfo('template_directory'); get_header();?>
	<main>
		<div class="wrapper clear blog-main-presets">
			<div id="blog-section">
				<h3>Neighborhood's Cafe Blog</h3>
				<p class="blog-description">To stay even more connected, check out our <a href="#">facebook page</a> for even more updates.</p>
				<?php  
					if( have_posts() ){
					while( have_posts() ){
					the_post(); 
				?>
				<article class="article1">
					<div class="figure-article">
						<?php
							if( has_post_thumbnail() ){ 
							the_post_thumbnail('normal');
							}
						?>
					</div><!--end of figure article-->
					<div class="clear">
						<div class="blog-post-info">
							<h3><?php the_time('d'); ?></h3>
							<p><?php the_time('m'); ?>,&nbsp;<?php the_time('y'); ?></p>
						</div><!--End Blog Post Info-->
						<div class="blog-post-title">
							<h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
							<p><i class="fa fa-pencil"><a href="#"><?php the_author_posts_link(); ?></a></i><i class="fa fa-hand-o-right"><a href="#"><?php wp_list_comments(); ?></a></i></p>
							<p><i class="fa fa-tag"><a href="#"><?php the_tags(); ?></a></i></p>
						</div><!--End Blog Post Title-->
					</div><!--End clear for blog post info and title-->
					<div class="full-article-content">
						<p><?php the_content(); ?></p>
					</div><!--End of full article content-->
				</article>
				<?php 	}//END WHILE
						}//END IF
									
						else{
							?>
							<p>Sorry no content...</p>
							<?php
				
						};//END ELSE
					?>
			</div><!--End of Blog Section-->
			<?php include 'sidebar.php' ?>
		</div><!--End of Wrapper and Clear-->
	</main>
	<?php get_footer(); ?>
	