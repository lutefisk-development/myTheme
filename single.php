<?php
get_header();
?>

<main class="container">
	<section class="row">
		<article class="col-md-9">
			<!-- Do we have any posts? -->
			<?php if (have_posts()) : ?>
				<!-- Yey, we has posts -->
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('template-parts/content', 'single'); ?>
				<?php endwhile; ?>
			<?php else: ?>
				<?php get_template_part('template-parts/content', 'none'); ?>
			<?php endif; ?>
			<!-- End of posts -->
		</article><!-- /.col-md-9 -->
		<?php get_sidebar(); ?>
	</section><!-- /.row -->
</main><!-- /.container -->

<?php
get_footer();