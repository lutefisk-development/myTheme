<?php
/* Template Name: Fullwidth Page */
get_header();
?>

<main class="container-fluid content">
	<!-- Do we have a page? -->
	<?php if (have_posts()) : ?>
		<!-- Yey, we has a page -->
		<?php while (have_posts()) : the_post(); ?>
			<!-- This is a Page -->
			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
			<!-- End of Page -->
		<?php endwhile; ?>
	<?php endif; ?>
	<!-- End of posts -->
</main><!-- /.container -->

<?php
get_footer();