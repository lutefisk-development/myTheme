<!-- This is a Blog Post -->
<article>
	<h1><?php the_title(); ?></h1>
	<?php if(has_post_thumbnail()) : ?>
		<figure class="featured-image-wrapper">
			<?php the_post_thumbnail('featured-image', ['class' => 'img-fluid d-block mx-auto']); ?>
		</figure>
	<?php endif; ?>	

	<p class="text-muted"><em>Post Created: <?php echo get_the_date(); ?> by <?php the_author(); ?></em></p>

	<?php the_content(); ?>
</article>
<!-- End of Blog Post -->