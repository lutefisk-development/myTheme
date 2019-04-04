<?php
get_header();
?>

<main class="container">

	<section class="row">
		<main class="col-md-9 content">
			<h1><?php _e('Sorry, this page is missing!', 'mytheme')?></h1>

			<article class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ?controls=0&hd=1 &autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</article>		
		</main><!-- /.col-md-9 -->
		
		<?php get_sidebar(); ?>
	</section><!-- /.row -->
</main><!-- /.container -->

<?php
get_footer();