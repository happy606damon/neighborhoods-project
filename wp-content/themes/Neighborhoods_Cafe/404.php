<?php $rootFolder = get_bloginfo('template_directory');?>
<?php get_header(); ?>

    <h1 class="search">Oops! That page can&rsquo;t be found.</h1>

    <main class="wrapper clear">
    	<div id="not-found">
        	<h2 class="noresults">It looks like nothing was found at this location. Maybe try one of the pages below</h2>
        	<ul class="center">
        		<li><a href=" <?php get_stylesheet_directory() ?>/">HOME</a></li>
        		<li><a href=" <?php get_stylesheet_directory()?>/blog/">BLOG</a></li>
        	</ul>
    	</div>

        <?php include 'sidebar.php'; ?>

    </main>  

<?php get_footer(); ?>