<?php
get_header();
?>

<main class="container" id="main">
	<h1>Welcome!</h1>

	<section class="row">
		<main class="col-md-9 content">
			<!-- Do we have any posts? -->
			<?php if (have_posts()) : ?>
				<!-- Yey, we has posts -->
				<div class="card-group">
					<div class="row">
						<?php while (have_posts()) : the_post(); ?>
							<?php get_template_part('template-parts/content', 'excerpt'); ?>
						<?php endwhile; ?>
					</div>
				</div>
			<?php else :?>
				<?php get_template_part('template-parts/content', 'none'); ?>
			<?php endif; ?>
			<!-- End of posts -->
		</main><!-- /.col-md-9 -->
		
		<?php get_sidebar(); ?>
	</section><!-- /.row -->
</main><!-- /.container -->

<?php
get_footer();