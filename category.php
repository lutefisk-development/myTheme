<?php
get_header();
?>

<main class="container">
	<h1><?php single_cat_title('Category Archive for: '); ?></h1>

	<section class="row">
		<main class="col-md-9">
			<!-- Do we have any posts? -->
			<?php if (have_posts()) : ?>
				<!-- Yey, we has posts -->
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/content', 'excerpt'); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part('template-parts/content', 'none'); ?>
			<?php endif; ?>
			<!-- End of posts -->
		</main><!-- /.col-md-9 -->
		<?php get_sidebar(); ?>
	</section><!-- /.row -->
</main><!-- /.container -->

<?php
get_footer();