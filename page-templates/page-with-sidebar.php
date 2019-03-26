<?php
/* Template Name: Page with sidebar */
get_header();
?>

<main class="container">
	<section class="row">
		<main class="col-md-9 content">
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
		</main>
		<?php get_sidebar('page'); ?>
	</section>
</main><!-- /.container -->

<?php
get_footer();