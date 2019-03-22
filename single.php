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
					<!-- This is a Blog Post -->
					<?php if(has_post_thumbnail()) : ?>
						<figure class="featured-image-wrapper">
							<?php the_post_thumbnail('featured-image', ['class' => 'img-fluid d-block mx-auto']); ?>
						</figure>
					<?php endif; ?>	
					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

					<summary>Post Created: <?php echo get_the_date(); ?> by <?php the_author(); ?></summary>
					<hr>

					<!-- End of Blog Post -->
				<?php endwhile; ?>
			<?php endif; ?>
			<!-- End of posts -->
		</article><!-- /.col-md-9 -->
		<?php get_sidebar(); ?>
	</section><!-- /.row -->
</main><!-- /.container -->

<?php
get_footer();