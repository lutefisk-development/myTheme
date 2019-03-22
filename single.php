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
					<?php if(has_post_thumbnail()) : ?>
						<div class="featured-image-wrapper">
							<?php the_post_thumbnail('featured-image', ['class' => 'img-fluid d-block mx-auto']); ?>
						</div>
					<?php endif; ?>	
					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

					<div>Post Created: <?php echo get_the_date(); ?> by <?php the_author(); ?></div>
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