<?php
get_header();
?>

<div class="container">
	<h1>Welcome!</h1>

	<div class="row">
		<div class="col-md-9 content">
			<!-- Do we have any posts? -->
			<?php if (have_posts()) : ?>
				<!-- Yey, we has posts -->
				<?php while (have_posts()) : the_post(); ?>
					<!-- This is a Blog Post -->
					<div class="row">
						<?php if(has_post_thumbnail()) : ?>
							<div class="col-sm-3">
								<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
							</div>
						<?php endif; ?>	
						<div class="col-sm">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div>Post Created: <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> in <?php the_category(); ?></div>

							<?php the_excerpt(); ?>
						</div>
					</div>
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