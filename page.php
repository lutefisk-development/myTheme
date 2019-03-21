<?php
get_header();
?>

<div class="container">
	<!-- Do we have a page? -->
	<?php if (have_posts()) : ?>
		<!-- Yey, we has a page -->
		<?php while (have_posts()) : the_post(); ?>
			<!-- This is a Page -->
			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
			<hr>
			<!-- End of Page -->
		<?php endwhile; ?>
	<?php endif; ?>
	<!-- End of posts -->
</div><!-- /.container -->

<?php
get_footer();