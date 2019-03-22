<?php
get_header();
?>

<div class="container">
	<h1>Posts by author: <?php the_author(); ?></h1>

	<div class="row">
		<div class="col-md-9">
			<!-- Do we have any posts? -->
			<?php if (have_posts()) : ?>
				<!-- Yey, we has posts -->
				<?php while (have_posts()) : the_post(); ?>
					<!-- This is a Blog Post -->
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div>Post Created: <?php echo get_the_date(); ?> in <?php the_category(); ?></div>

					<?php the_excerpt(); ?>

					<hr>
					<!-- End of Blog Post -->
				<?php endwhile; ?>
			<?php endif; ?>
			<!-- End of posts -->
		</div><!-- /.col-md-9 -->
		<?php get_sidebar(); ?>
	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();