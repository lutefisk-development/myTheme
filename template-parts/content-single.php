<!-- This is a Blog Post -->
<article>
	<h1><?php the_title(); ?></h1>
	<?php if(has_post_thumbnail()) : ?>
		<figure class="featured-image-wrapper">
			<?php the_post_thumbnail('featured-image', ['class' => 'img-fluid d-block mx-auto']); ?>
		</figure>
	<?php endif; ?>	

	<p class="text-muted">
		<em>
			<?php
				printf(__('Post Created: %s by %s', 'mytheme'),
				get_the_date(),
				get_the_author()
				);
			?>
		</em>
	</p>

	<?php the_content(); ?>
</article>
<!-- End of Blog Post -->

<!-- Paginatiopn -->
<?php get_template_part('template-parts/post-pagination'); ?>
<!-- End of Pagination -->