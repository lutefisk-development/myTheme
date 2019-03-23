<?php
get_header();
?>

<main class="container">
	<h1>Posts by author: <?php the_author(); ?></h1>

	<section class="row">
		<main class="col-md-9">
			<!-- Do we have any posts? -->
			<?php if (have_posts()) : ?>
				<!-- Yey, we has posts -->
				<?php while (have_posts()) : the_post(); ?>
					<!-- This is a Blog Post -->
					<section class="row">
						<?php if(has_post_thumbnail()) : ?>
							<figure class="col-sm-3">
								<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
							</figure>
						<?php endif; ?>
						<article class="col-sm">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<summary>Post Created: <?php echo get_the_date(); ?> in <?php the_category(); ?></summary>

							<?php the_excerpt(); ?>
						</article>
					</section>
					<hr>
					<!-- End of Blog Post -->
				<?php endwhile; ?>
			<?php endif; ?>
			<!-- End of posts -->
		</main><!-- /.col-md-9 -->
		<?php get_sidebar(); ?>
	</section><!-- /.row -->
</main><!-- /.container -->

<?php
get_footer();