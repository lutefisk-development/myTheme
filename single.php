<?php
get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<!-- Do we have any posts? -->
			<?php if (have_posts()) : ?>
				<!-- Yey, we has posts -->
				<?php while (have_posts()) : the_post(); ?>
					<!-- This is a Blog Post -->
					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

					<div>Post Created: <?php echo get_the_date(); ?> by <?php the_author(); ?></div>
					<hr>

					<!-- End of Blog Post -->
				<?php endwhile; ?>
			<?php endif; ?>
			<!-- End of posts -->
		</div><!-- /.col-md-9 -->

		<div class="col-md-3 blog-sidebar">
			<!-- sidebar -->
			<?php get_sidebar(); ?>
			<!-- end sidebar -->
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();